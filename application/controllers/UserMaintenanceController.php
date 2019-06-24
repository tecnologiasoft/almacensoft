<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserMaintenanceController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_maintenance_model', 'umm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        $data['next_id'] = $this->umm->getMaxId();
        $data['cref'] = $this->umm->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','User' => 'user');
        $data['title']= $this->lang->line('title_inventory_list');
        $data['main_content'] = 'company/user/user_maintenance_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables UserMaintenanceController*/
  public function getUserDataTable($codigoUser='')
  {
    echo ($this->umm->ShowUserTable($codigoUser));
  }

    /* Validation Form User*/
    public function User_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


            $this->form_validation->set_rules('fname',$this->lang->line('field_user_name'),'required|trim');
 /*           $this->form_validation->set_rules('fname',$this->lang->line('field_first_name'),'required|trim');
            $this->form_validation->set_rules('lname',$this->lang->line('field_last_name'),'required|trim');
            //$this->form_validation->set_rules('email', $this->lang->line('field_email'), 'required|trim|valid_email');
            $this->form_validation->set_rules('password',$this->lang->line('field_password'),'required|trim|min_length[4]');
            //$this->form_validation->set_rules('confirmpassword', 'Password Confirmation', 'required|trim|matches[password]');

            $this->form_validation->set_rules('address',$this->lang->line('field_address'),'required|trim');
            //$this->form_validation->set_rules('address_line_1',$this->lang->line('field_address_line_1'),'trim');
           // $this->form_validation->set_rules('address_line_2',$this->lang->line('field_address_line_2'),'trim');
          //  $this->form_validation->set_rules('borough',$this->lang->line('field_borough'),'required|trim');
            $this->form_validation->set_rules('city',$this->lang->line('field_city'),'required|trim');
            $this->form_validation->set_rules('state',$this->lang->line('field_state'),'required|trim');
            $this->form_validation->set_rules('country',$this->lang->line('field_country'),'required|trim');
            $this->form_validation->set_rules('zipcode',$this->lang->line('field_zipcode'),'required|trim');

            $this->form_validation->set_rules('telephone_number',$this->lang->line('field_telephone_number'),'trim');
            $this->form_validation->set_rules('cellphone_number',$this->lang->line('field_cellphone_number'),'trim');
        //    $this->form_validation->set_rules('container',$this->lang->line('field_container'),'trim');
      //      $this->form_validation->set_rules('country_ship_to',$this->lang->line('field_country_ship_to'),'trim');
    //        $this->form_validation->set_rules('user_group',$this->lang->line('field_user_group'),'required|trim|in_list[Agent,Branch]');
          /*  $this->form_validation->set_rules('driver',$this->lang->line('field_driver'),'required|trim|in_list[Yes,No,Both]');
            $this->form_validation->set_rules('start_time',$this->lang->line('field_start_time'),'required|trim');
            $this->form_validation->set_rules('end_time',$this->lang->line('field_end_time'),'required|trim');
            $this->form_validation->set_rules('branch',$this->lang->line('field_branch'),'required|trim');*/
            //$this->form_validation->set_rules('customer_number',$this->lang->line('field_customer_number'),'required|trim');
            //$this->form_validation->set_rules('appcode',$this->lang->line('field_appcode'),'required|trim');





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
                    'fname' => $this->input->post('fname'),
                    'lname' => $this->input->post('lname'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'borough' => '',
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'country' => $this->input->post('country'),
                    'zipcode' => $this->input->post('zipcode'),
                    'password' => $this->common->AES_encrypt($this->input->post('password')),
                    'user_group' => '',
                    'driver' => $this->input->post('driver'),
                    'customer_number' => '',
                    'appcode' => '',
                    'branch_id' => $this->input->post('branch'),
                    'ip' => $this->input->post('ip'),
                    'warehouse' => $this->input->post('warehouse')
                  );

               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idUser") !='')
                {

                   $this->umm->createUser($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->umm->createUser($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }

  public function edit_User($id_user='')
  {
    $data = $this->umm->get_User($id_user)->row();
    //var_dump($data);
    echo json_encode($data);
  }

  public function delete_user($id)
  {
    $this->umm->deleteUser($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
  }


}

/* End of file UserMaintenanceController.php */
/* Location: ./application/controllers/UserMaintenanceController.php */