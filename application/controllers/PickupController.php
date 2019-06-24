<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PickupController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pickup_model', 'pm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{

	}

	public function pickup_managment()
	{
	    $data['driver_list'] = $this->pm->get_driver_list();
	    $data['zone_list'] = $this->pm->get_zone_list();
      $data['next_id_shipto'] = $this->pm->get_next_id_shipto();
      $data['cref_shipto'] = $this->pm->get_cref_shipto();
		  $data['breadcrumb'] = array('Pickup' => 'pickup','Pickup Managment' => 'pickup');
	  	$data['title']= 'Pickup';
        $data['main_content'] = 'company/pickup/pickup_managment_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables pickup*/
  public function getPickupDataTable($codigoPickup='')
  {
    echo ($this->pm->ShowPickupTable($codigoPickup));
  }


    function update_status(){
      var_dump($this->input->post());

        if($this->input->post() && $this->input->is_ajax_request()){

            $this->pm->update_status($this->input->post());
        }
    }

    function update_driver(){
     var_dump($this->input->post());

        if($this->input->post() && $this->input->is_ajax_request()){

            $data = $this->pm->update_driver($this->input->post());
             echo json_encode($data);
        }
    }


  public function edit_Pickup($id_pickup='')
  {
    $data = $this->pm->get_pickup($id_pickup)->row();
    //var_dump($data);
    echo json_encode($data);
  }


    public function getListShiptoDataTable($codigoListShipto='')
    {
      //var_dump($_POST);exit();
      echo ($this->pm->ShowListShiptoTable($codigoListShipto));
    }


   /*add shipto Pickoup*/

    /* Validation Form Shipto*/
    public function Ship_to_Pickup_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
          {

        //$this->form_validation->set_rules('company_name',$this->lang->line('field_company_name'),'trim');
        //$this->form_validation->set_rules('user_name',$this->lang->line('field_user_name'),'trim');
        $this->form_validation->set_rules('company_name_shipto', $this->lang->line('field_first_name'), 'required|trim');
        $this->form_validation->set_rules('fname_shipto', $this->lang->line('field_last_name'), 'required|trim');



        $this->form_validation->set_message('required', 'El Campo %s es Requerido');



            if ($this->form_validation->run()== false)
            {

              echo json_encode(array('st'=>0, 'msg' => validation_errors()));
            }
            else
            {
                 $datos =
                    array(

                     // 'Cust_ID' => $this->input->post('Cust_ID'),
                      'id' => $this->input->post('customer_id_shipto'),
                      //'cref' => $this->input->post('cref'),
                      'company_name' => $this->input->post('company_name_shipto'),
                      'fname' => $this->input->post('fname_shipto'),
                      'lname' => $this->input->post('lname_shipto'),
                      'address_line1' => $this->input->post('address_shipto'),

                      'address_line2' => $this->input->post('address_line2_shipto'),
                      'city' => $this->input->post('city_shipto'),
                      'state' => $this->input->post('state_shipto'),
                      'zipcode' => $this->input->post('zipcode_shipto'),
                      'telephone_number' => $this->input->post('telephone_number_shipto'),
                      'cellphone_number' => $this->input->post('cellphone_number_shipto'),
                      'email' => $this->input->post('email_shipto'),

                      'lic_id' => $this->input->post('lic_id_shipto'),
                      'lic_picture' => $this->upload_images_shipto(),
                      //'agent_code' => $this->input->post('agent_code_shipto'),
                      //'password' => $this->input->post('password_shipto'),
                      'language' => $this->input->post('language_shipto'),



                       // $this->session->userdata("CODIGO")
                    );
               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("id_shiptoList") !='')
                {

                   $this->pm->createShipto($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => 'Cliente Editado'));
                }
                else
                {

                    $this->pm->createShipto($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => 'Gracias por haber completado el formualario para la creacion Clientes'));
                  }

            }

        }
    }

    function upload_images_shipto()
    {

          $lic_picture_shipto="";
          if (!empty($_FILES['lic_picture_shipto']) && $_FILES['lic_picture_shipto']['size'] > 0) {
              $user_image = $this->pm->image_upload($field = 'lic_picture_shipto', $path = './' . SHIPT_TO_IMAGES);
             //  var_dump($lic_picture);exit();
              if (!$user_image) {
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('includes/header', $error);

              }
              return $user_image;
          }
    }

  public function edit_Shipto($id_shipto ='')
  {
    $data = $this->pm->get_Shipto($id_shipto)->row();
    //var_dump($data);
    echo json_encode($data);
  }





}

/* End of file PickupController.php */
/* Location: ./application/controllers/PickupController.php */