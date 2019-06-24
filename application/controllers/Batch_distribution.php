<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch_distribution extends MY_Controller {
    private $view_folder = 'company/batch_distribution/';
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Batch_distribution_model');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
    }

    public function index()
    {
        $data['title']= $this->lang->line('title_batch_list');
        $data['main_content'] = 'company/batch_distribution/listing';
        $this->load->view('includes/template', $data);
    }

  /*get el datatables Batch*/
  public function getBatchDataTable()
  {
    echo ($this->Batch_distribution_model->ShowBatchTable());
  }


    /*Add new driver*/
    function add()
    {
        $data = array();
        /*$data['title'] = $this->lang->line('title_driver_list');
        $data['second_title'] = $this->lang->line('title_add_new_driver');*/
        $data['title'] = $this->lang->line('title_add_new_batch');
        //$data['second_title'] = $this->lang->line('title_batch_list');
        $data['css'] = ['customer'];
       //* $data['max_value']= $this->Main_model->maxId('tbl_driver');
       // $data['formAction'] = 'company/batch_distribution/add/';
        $data['js'] = ['https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js',MAP_API_URL,'driver'];
        $data['function'] = 'add';
        $this->load->model('branch_model');
        $data['zone_list'] = $this->Batch_distribution_model->getZone();
        $data['status_list'] = $this->Batch_distribution_model->getStatus();
        $data['driver_list'] = $this->Batch_distribution_model->getDriver();
       //* $data['next_id'] = $this->driver_model->get_next_id();

        $this->form_validation->set_rules('zone',$this->lang->line('label_zone'),'required|trim');
        $this->form_validation->set_rules('status',$this->lang->line('label_status'),'required|trim');
        $this->form_validation->set_rules('driver',$this->lang->line('label_driver'),'required|trim');
        $this->form_validation->set_rules('date',$this->lang->line('label_date'),'required|trim');
        $this->form_validation->set_rules('type',$this->lang->line('label_type'),'required|trim');


        $this->form_validation->set_error_delimiters('<div class="has-danger"><div class="form-control-feedback">', '</div></div>');
        if ($this->form_validation->run() == FALSE)
        {
            //$this->loadView($this->view_folder.'listing', $data);
            // echo validation_errors();
            // die;
            //$this->loadView($this->view_folder.'add', $data);
            $data['main_content'] = 'company/batch_distribution/add';
            $this->load->view('includes/template', $data);
        }
        else
        {
            /* check driver name already registered or not? */
            /*$already_register = $this->Batch_distribution_model->check_param(array('user_name' => $this->input->post('username')));
            if(!empty($already_register)){
                $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_user_name_exist'));
                $this->loadView($this->view_folder.'add', $data);
                //$this->load->view($this->view_folder.'add', $data);
                return;
            }
             check email already registered or not?
            $already_register = $this->Batch_distribution_model->check_param(array('email' => $this->input->post('email')));
            if(!empty($already_register)){
                $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_email_exist'));
                $this->loadView($this->view_folder.'add', $data);
                //$this->load->view($this->view_folder.'add', $data);
                return;
            }*/



            /*'co_driverid' => $this->input->post('co_driverid'),
            'company_name' => $this->input->post('company_name'),
            'cnum' => $this->input->post('cnum'),
            'driver' => $this->input->post('driver'),
            'void' => $this->input->post('void'),*/
            $params = array(
                'MDist_Zone' => $this->input->post('zone'),
                'MDist_status' => $this->input->post('status'),
                'MDist_Driver' => $this->input->post('driver'),
                'MDist_Date' => date("Y-m-d", strtotime($this->input->post('date'))),
                'MDist_BType' => $this->input->post('type'),
                'MDist_Exchange_Rate' => $this->input->post('exchange_rate'),
                'MDist_Comment' => $this->input->post('comment'),
                'user_created' => $this->username,

             //
            );

               // return print_r($datos);

                   /* echo "<PRE>";
                  print_r($params);
                  echo "</PRE>";*/


            $id = $this->Batch_distribution_model->add_Batch($params);
            $this->Main_model->updateCompanyRefIds('batch_id',$id);
            // Update driver details
            //$this->driver_model->update_driver($id, array('driver_code' => $id));

            $this->session->set_flashdata('succ_msg1', $this->lang->line('text_driver_add_success'));
            redirect('batch','refresh');
        }
    }


    function edit(){

        $batch_id = $this->uri->segment(3);
        $data = array();
        $data['result'] = $this->Batch_distribution_model->get_driver_data($batch_id);
        $data['results'] = $this->Batch_distribution_model->get_driver_datas($batch_id);
        $data['zone_list'] = $this->Batch_distribution_model->getZone();
        //var_dump( $data['zone_list']);
        $data['status_list'] = $this->Batch_distribution_model->getStatus();
        $data['driver_list'] = $this->Batch_distribution_model->getDriver();
        $data['type_list'] = $this->Batch_distribution_model->getType();
        //var_dump($driver_data);exit;
        /*$data['title'] = $this->lang->line('title_driver_list');
        $data['second_title'] = $this->lang->line('title_add_new_driver');*/
        $data['title'] = $this->lang->line('title_edit_batch_list');
        $data['second_title'] = $this->lang->line('title_edit_batch_list');
        $data['css'] = ['customer'];
       // $data['max_value']= $this->Main_model->maxId('tbl_driver');
        $data['formAction'] = 'batch_distribution/edit/'.$batch_id;
        $data['js'] = ['https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js',MAP_API_URL,'driver'];//yaOk
        $data['function'] = 'add';
        $this->load->model('Batch_distribution_model');

        $this->form_validation->set_rules('zone',$this->lang->line('label_zone'),'required|trim');
        $this->form_validation->set_rules('status',$this->lang->line('label_status'),'required|trim');
        $this->form_validation->set_rules('driver',$this->lang->line('label_driver'),'required|trim');
        $this->form_validation->set_rules('date',$this->lang->line('label_date'),'required|trim');
        $this->form_validation->set_rules('type',$this->lang->line('label_type'),'required|trim');


        $this->form_validation->set_error_delimiters('<div class="has-danger"><div class="form-control-feedback">', '</div></div>');
        if ($this->form_validation->run() == FALSE)
        {
            // echo validation_errors();
            // die;
            //$this->load->view($this->view_folder.'edit', $data);
            $data['main_content'] = 'company/batch_distribution/edit';
            $this->load->view('includes/template', $data);
        }
        else
        {
            /* check email already registered or not? */
            /*$already_register = $this->driver_model->check_param(array('email' => $this->input->post('email'), 'id !=' => $driver_id  ));
            if(!empty($already_register)){
                $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_email_exist'));
                //$this->load->view($this->view_folder.'edit', $data); return;
                redirect(base_url('company/driver/edit/').$driver_id, 'refresh');
            }*/

            /* check user name already registered or not?
            $already_register = $this->driver_model->check_param(array('user_name' => $this->input->post('user_name'), 'id !=' => $driver_id));
            if(!empty($already_register)){
                $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_user_name_exist'));
                redirect(base_url('company/driver/edit/').$driver_id, 'refresh');
            }*/


            /*'co_driverid' => $this->input->post('co_driverid'),
            'company_name' => $this->input->post('company_name'),
            'cnum' => $this->input->post('cnum'),
            'driver' => $this->input->post('driver'),
            'driver_code' => $this->input->post('driver_code'),
            'void' => $this->input->post('void'),*/
          /*'co_driverid' => $this->input->post('co_driverid'),
            'company_name' => $this->input->post('company_name'),
            'cnum' => $this->input->post('cnum'),
            'driver' => $this->input->post('driver'),
            'void' => $this->input->post('void'),*/

            $params = array(
                'MDist_Zone' => $this->input->post('zone'),
                'MDist_status' => $this->input->post('status'),
                'MDist_Driver' => $this->input->post('driver'),
                'MDist_Date' => date("Y-m-d", strtotime($this->input->post('date'))),
                'MDist_BType' => $this->input->post('type'),
                'MDist_Exchange_Rate' => $this->input->post('exchange_rate'),
                'MDist_Comment' => $this->input->post('comment'),
                'user_update' => $this->username,
               //
            );

             /*echo "<pre>";
            var_dump($params);exit;
            echo "</pre>";*/

            /*if($this->input->post('password') != ''){
                $params['password'] = md5($this->input->post('password'));
            }

            if(!empty($this->input->post('telephone_number'))){
                $params['telephone_number'] = $this->input->post('telephone_number');
            } else {
                $params['telephone_number'] = "";
            }

            if(!empty($this->input->post('cellphone_number'))){
                $params['cellphone_number'] = $this->input->post('cellphone_number');
            } else {
                $params['cellphone_number'] = "";
            }

            if(!empty($this->input->post('latitude'))){
                $params['latitude'] = $this->input->post('latitude');
            }
            if(!empty($this->input->post('longitude'))){
                $params['longitude'] = $this->input->post('longitude');
            }
            if(!empty($this->input->post('address_line_1'))){
                $params['address_line1'] = $this->input->post('address_line_1');
            } */

            // Update driver details
            $this->Batch_distribution_model->update_driver($batch_id, $params);

            $this->session->set_flashdata('succ_msg1', $this->lang->line('text_driver_update_success'));
            redirect('batch_distribution/listing/', 'refresh');
        }

    }


    /*List all driver by ajax call*/
    function ajax_list_invoice()
    {
        $data = array();
        $AllPostData = $this->input->post();
        $list = $this->Batch_distribution_model->get_datatables_invoice();
       // $data['result'] = $list;
       // $data['list'] = $this->Batch_distribution_model->get_datatables_invoice();

        /*echo "<pre>";
        var_dump($data['result']);exit;
        echo "</pre>";*/

        $output = array(
                    "meta" => array('page'=>$AllPostData['datatable']['pagination']['page'],'pages'=>$AllPostData['datatable']['pagination']['pages'],'perpage'=>$AllPostData['datatable']['pagination']['perpage'],'total'=>$this->Batch_distribution_model->count_filtered_invoice(),'sort'=>'asc','field'=>'invoice_number'),
                    "data" => $list
                );
        //output to json format
        echo json_encode($output);
        //$this->load->view($this->view_folder.'edit', $data);
    }





}

/* End of file Batch_distribution.php */
/* Location: ./application/controllers/Batch_distribution.php */