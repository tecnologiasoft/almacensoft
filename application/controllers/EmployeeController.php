<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		    $this->load->model('employee_model', 'em');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data['max_value'] = $this->em->getMaxId('employee');
        $data['cref'] = $this->em->get_cref();
       // $data['branch_list'] = $this->branch_model->getBranch();
        $data['breadcrumb'] = array('Employee' => 'employee');
        $data['title']= $this->lang->line('employee_list');
        $data['main_content'] = 'company/employee/employee_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables Employee*/
  public function getEmployeeDataTable($codigoEmployee='')
  {
    echo ($this->em->ShowEmployeeTable($codigoEmployee));
  }


    /* Validation Form Employee*/
    public function Employee_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


              $this->form_validation->set_rules('first_name',$this->lang->line('label_first_name'),'required|trim');
              $this->form_validation->set_rules('last_name',$this->lang->line('label_last_name'),'required|trim');
              /*$this->form_validation->set_rules('telephone', 'tel', 'required|trim|min_length[8]|max_length[14]');*/
      /*        $this->form_validation->set_rules('country',$this->lang->line('label_country'),'required|trim');
              $this->form_validation->set_rules('branch', 'branch', 'required|trim');
             // $this->form_validation->set_rules('is_driver','is_driver', 'required|trim');
              $this->form_validation->set_rules('is_warehouse', 'is_warehouse','required|trim');
              if($this->input->post('email') != ''){
                  $this->form_validation->set_rules('email', 'email','valid_email|callback_checkDuplicateEmail');
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
                'emp_code'        => $this->input->post('item_number_hdn'),
                'first_name'      => $this->input->post('first_name'),
                'last_name'       => $this->input->post('last_name'),
                'address1'        => $this->input->post('address1'),
                'address2'        => $this->input->post('address2'),
                'city'            => $this->input->post('city'),
                'state'           => $this->input->post('state'),
                'zipcode'         => $this->input->post('zipcode'),
                'country'         => $this->input->post('country'),
                'cel'             => $this->input->post('cel'),
                'tel'             => $this->input->post('telephone'),
                'email'           => $this->input->post('email'),
                'branch_id'       => $this->input->post('branch'),
                'is_warehouse'    => $this->input->post('is_warehouse'),
                'dob'             => $this->input->post('dob'),
                'social_security' => $this->input->post('social_security'),
               );

                 // return print_r($datos);

                      /*echo "<PRE>";
                    print_r($datos);
                    echo "</PRE>";*/

                if($this->input->post("idEmployee") !='')
                {

                   $this->em->createEmployee($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_employee_update_success')));
                }
                else
                {

                    $this->em->createEmployee($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_employee_add_success')));
                  }

            }

        }
    }

  public function edit_employee($id_employee='')
  {
    $data = $this->em->get_employee($id_employee)->row();
    //var_dump($data);
    echo json_encode($data);
  }

  public function deleteEmployee($id)
  {
    $this->em->deleteEmployee($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
  }



}

/* End of file EmployeeController.php */
/* Location: ./application/controllers/EmployeeController.php */