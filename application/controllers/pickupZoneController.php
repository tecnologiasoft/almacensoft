<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PickupZoneController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PickupZone_model', 'pzm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);

	}

	public function index()
	{
        $data = array();
        /*$data['max_value'] = $this->pzm->getMaxId();
        $data['cref'] = $this->pzm->get_cref();*/
        //var_dump($data['next_id']);exit;
        $data['branch_list'] = $this->pzm->getBranch();
        $data['title']= $this->lang->line('title_pickup_zone_list');
        $data['main_content'] = 'company/pickup_zone/pickup_zone_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables pickup_zone*/
  public function getPickupZoneDataTable($codigopickup_zone='')
  {
    echo ($this->pzm->ShowPickup_ZoneTable($codigopickup_zone));
  }


    /* Validation Form PickupZone*/
    public function PickupZone_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


              $this->form_validation->set_rules('description',$this->lang->line('field_description'),'required|trim');
             // $this->form_validation->set_rules('price',$this->lang->line('field_price'),'required|trim');




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
	                'description' => $this->input->post('description'),
	                'stops' => $this->input->post('stops'),
	                'zone' => $this->input->post('zone'),
	                'validation' => $this->input->post('validation'),
	                'country' => $this->input->post('country'),
	                'id_branch' => $this->input->post('branch')
                //'zipcode' => '',
                  );

               // return print_r($datos);

                  /*  echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idpickup_zone") !='')
                {

                   $this->pzm->createPickupZone($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->pzm->createPickupZone($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }

	public function edit_PickupZone($id_pickupzone='')
	  {
      $data['result'] = $this->pzm->get_pickup_zone_data($pickup_zone_id);
     // var_dump($data['result']);exit;
	    $data = $this->pzm->get_PickupZone($id_pickupzone)->row();
	    //var_dump($data);
	    echo json_encode($data);
	  }

	  public function delete_PickupZone($id)
	  {
	    $this->pzm->deletePickupZone($id);
	    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
	  }


}

/* End of file pickupZoneController.php */
/* Location: ./application/controllers/pickupZoneController.php */