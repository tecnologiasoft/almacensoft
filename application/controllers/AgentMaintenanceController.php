<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentMaintenanceController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('agent_maintenance_model', 'amm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        $data['max_value'] = $this->amm->getMaxId();
        $data['cref'] = $this->amm->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','Agent' => 'agent');
        $data['title']= $this->lang->line('title_agent_list');
        $data['main_content'] = 'company/agent/agent_maintenance_view';
        $this->load->view('includes/template', $data);	
	}

  /*get el datatables AgentMaintenanceController*/
  public function getAgentDataTable($codigoAgent='')
  {//var_dump($_POST);exit;
    echo ($this->amm->ShowAgentTable($codigoAgent));
  }

    /* Validation Form Inventory*/
    public function Agent_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {

        $this->form_validation->set_rules('fname',$this->lang->line('field_first_name'),'required|trim');
        $this->form_validation->set_rules('lname',$this->lang->line('field_last_name'),'required|trim');
      /*  $this->form_validation->set_rules('address_1',$this->lang->line('field_address'),'required|trim');
        //$this->form_validation->set_rules('address_2',$this->lang->line('field_address'),'trim');
        $this->form_validation->set_rules('city',$this->lang->line('field_city'),'required|trim');
        $this->form_validation->set_rules('state',$this->lang->line('field_state'),'required|trim');
        //$this->form_validation->set_rules('zipcode',$this->lang->line('field_zipcode'),'required|trim');
        if($this->input->post('email') != ''){

            $this->form_validation->set_rules('email',$this->lang->line('label_email'),'valid_email');
        }
        
        $this->form_validation->set_rules('agent_company',$this->lang->line('label_agent_company'),'required|trim');
*/



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
                      'id' => $this->input->post('item_number'),
                      'company_name'=>'',
                      'fname' => $this->input->post('fname'),
                      'lname' => $this->input->post('lname'),
                      'email' => $this->input->post('email'),
                      'address_1' => $this->input->post('address'),
                      'address_2' => $this->input->post('address_2'),
                      'city' => $this->input->post('city'),
                      'state' => $this->input->post('state'),
                      'zipcode' => $this->input->post('zipcode'),
                      'telephone' => $this->input->post('telephone_number'),
                      'cellphone' => $this->input->post('cellphone_number'),
                      'header' => $this->input->post('header'),
                      'comment ' => $this->input->post('comment'),
                      'agent_company ' => $this->input->post('agent_company'),
                      'percentage  ' => $this->input->post('percentage'),
                      'agent_module  ' => $this->input->post('agent_module'),
                  );
    
               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idAgent") !='')
                {

                   $this->amm->createAgent($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->amm->createAgent($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }

  public function edit_Agent($id_agent='')
  {
    $data = $this->amm->get_Agent($id_agent)->row();
    //var_dump($data);
    echo json_encode($data);
  }

  public function delete_Agent($id)
  {
    $this->amm->deleteAgent($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
  }


}

/* End of file AgentMaintenanceController.php */
/* Location: ./application/controllers/AgentMaintenanceController.php */