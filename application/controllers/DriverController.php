<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('driver_model', 'dm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
		$data = array();
        $data['max_value'] = $this->dm->getMaxId();
        $data['cref'] = $this->dm->get_cref();
		$data['breadcrumb'] = array('Driver' => 'driver','Driver Maintenance' => 'driver');
		$data['branch_list'] = $this->dm->getBranch();
		$data['title']= $this->lang->line('title_driver_list');
        $data['main_content'] = 'company/driver/driver_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables Driver*/
  public function getDriverDataTable($codigoDriver='')
  {
    echo ($this->dm->ShowDriverTable($codigoDriver));
  }


    /* Validation Form Driver*/
    public function Driver_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


        $this->form_validation->set_rules('username',$this->lang->line('field_user_name'),'required|trim');
        $this->form_validation->set_rules('fname',$this->lang->line('field_first_name'),'required|trim');
		/*        $this->form_validation->set_rules('lname',$this->lang->line('field_last_name'),'required|trim');
		        $this->form_validation->set_rules('email', $this->lang->line('field_email'), 'required|trim|valid_email');
		        $this->form_validation->set_rules('password',$this->lang->line('field_password'),'required|trim|min_length[4]');
		        $this->form_validation->set_rules('confirmpassword', $this->lang->line('field_confirm_password'), 'required|trim|matches[password]');

		        $this->form_validation->set_rules('address',$this->lang->line('field_address'),'required|trim');
		        $this->form_validation->set_rules('address_line_1',$this->lang->line('field_address_line_1'),'trim');

		        //$this->form_validation->set_rules('borough',$this->lang->line('field_borough'),'required|trim');
		        $this->form_validation->set_rules('city',$this->lang->line('field_city'),'required|trim');
		        $this->form_validation->set_rules('state',$this->lang->line('field_state'),'required|trim');
		        $this->form_validation->set_rules('country',$this->lang->line('field_country'),'required|trim');
		        $this->form_validation->set_rules('zipcode',$this->lang->line('field_zipcode'),'required|trim');

		        if(empty($this->input->post('cellphone_number'))){
		            $this->form_validation->set_rules('cellphone_number',$this->lang->line('field_cellphone_number'),'required|trim');
		        }
		        if(empty($this->input->post('telephone_number'))){
		            $this->form_validation->set_rules('telephone_number',$this->lang->line('field_telephone_number'),'required|trim');
		        }*/




            $this->form_validation->set_message('required', 'El Campo %s es Requerido');
           // $this->form_validation->set_message('version_check','Esta Asignatura para esta version ya existe, favor crear una nueva version para esta asignatura');



           /*$this->form_validation->set_message('version_check_max','la version para esta asignatura no esta disponible');*/

            if ($this->form_validation->run()== false)
            {

              echo json_encode(array('st'=>0, 'msg' => validation_errors()));
            }
            else
            {

                  $datos = array(
	                'user_name' => $this->input->post('username'),
	                'fname' => $this->input->post('fname'),
	                'lname' => $this->input->post('lname'),
	                'email' => $this->input->post('email'),
	                'address' => $this->input->post('address'),
	               // 'borough' => $this->input->post('borough'),
	                'city' => $this->input->post('city'),
	                'state' => $this->input->post('state'),
	                'country' => $this->input->post('country_driver'),
	                'zipcode' => $this->input->post('zipcode'),
	                'password' => md5($this->input->post('password')),
	                'branch_id' => $this->input->post('branch')
                 );

               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idDriver") !='')
                {

                   $this->dm->createDriver($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->dm->createDriver($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }

  public function edit_Inventory($id_inventory='')
  {
    $data = $this->im->get_inventory($id_inventory)->row();
    //var_dump($data);
    echo json_encode($data);
  }

  public function delete_inventory($id)
  {
    $this->im->deleteInventory($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
  }






}

/* End of file DriverController.php */
/* Location: ./application/controllers/DriverController.php */