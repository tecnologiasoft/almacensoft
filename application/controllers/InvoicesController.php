<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoicesController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('invoices_model', 'invm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
		$data = array();
        $data['max_value_customer'] = $this->invm->getMaxId_customer();
        $data['max_value_shipto'] = $this->invm->getMaxId_shipto();
        //$data['cref'] = $this->invm->get_cref();
        $data['driver_list'] = $this->invm->get_driver_list();
        $data['agent_list'] = $this->invm->get_agent_list();
		$data['breadcrumb'] = array('Configuration' => 'configuration','Invoices' => 'invoices');
		$data['title']= 'Invoices';
        $data['main_content'] = 'company/invoices/invoices_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables Invoices*/
  public function getInvoicesDataTable($codigoInvoices='')
  {//var_dump($_POST);exit;
    echo ($this->invm->ShowInvoicesTable($codigoInvoices));
  }



	/* get customer list by ajax */
	function get_customer_list_json()
	{
	    $output = $this->invm->get_customer_list_search(strtolower($this->uri->segment(4)));
	    echo json_encode($output);
	}

    /* get customer data by ajax */
    function get_customer_data($customer_id ="")
    {
        $output = array('result'=>'');
        if(!empty($customer_id)){
            $output['result'] = $this->invm->get_customer_data($customer_id);
		//var_dump($output);exit;
        }
        echo json_encode($output);
    }

    /* get shipto list data by ajax */
    function get_customer_shipto($customer_id ="")
    {
        if(!empty($customer_id)){
            $output = $this->invm->get_customer_shipto($customer_id);
        }
        echo json_encode($output);
    }

    /* get shipto data by ajax */
    function get_shipto_data($shipto_id="")
    {
    	//var_dump($_POST);exit;
        $output = array('result'=>'');
        if(!empty($shipto_id)){
            $output['result'] = $this->invm->get_shipto_data($shipto_id);
            //var_dump($output['result']);exit;

        }
        echo json_encode($output);
        die;
    }


    /* get item list by ajax */
    function get_item_list_json()
    {
        $output = $this->invm->get_item_list_search(strtolower($this->uri->segment(4)));
        echo json_encode($output);
    }



    /* Validation Form Invoices*/
    public function Invoices_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {

            $this->form_validation->set_rules('date',$this->lang->line('field_date'),'required|trim');
            $this->form_validation->set_rules('due_date',$this->lang->line('field_due_date'),'trim');
            $this->form_validation->set_rules('user',$this->lang->line('field_user'),'trim');
            $this->form_validation->set_rules('misc',$this->lang->line('field_misc'),'trim');
            $this->form_validation->set_rules('invoice_hash',$this->lang->line('field_invoice_number'),'required|trim');
            $this->form_validation->set_rules('agent_invoice',$this->lang->line('field_agent_invoice'),'trim');
            $this->form_validation->set_rules('container',$this->lang->line('field_container'),'required|trim');
            $this->form_validation->set_rules('agent',$this->lang->line('field_agent'),'trim');
            $this->form_validation->set_rules('driver_id',$this->lang->line('field_driver_id'),'required|trim');
            $this->form_validation->set_rules('pay_term',$this->lang->line('field_pay_term'),'required|trim');
            $this->form_validation->set_rules('status',$this->lang->line('field_status'),'required|trim');
            $this->form_validation->set_rules('tot_box',$this->lang->line('field_tot_box'),'required|trim|numeric');
            $this->form_validation->set_rules('sub_total',$this->lang->line('field_sub_total'),'required|trim|numeric');
            $this->form_validation->set_rules('final_tax',$this->lang->line('field_final_tax'),'required|trim|numeric');
            $this->form_validation->set_rules('final_discount',$this->lang->line('field_final_discount'),'required|trim|numeric');
            $this->form_validation->set_rules('final_insurance',$this->lang->line('field_final_insurance'),'required|trim');
            $this->form_validation->set_rules('final_payment',$this->lang->line('field_final_payment'),'required|trim|numeric');
            $this->form_validation->set_rules('final_balance',$this->lang->line('field_final_balance'),'required|trim|numeric');
            $this->form_validation->set_rules('shipto_id',$this->lang->line('label_shipto_details'),'required|trim|numeric');
            $this->form_validation->set_rules('text_customer_id',$this->lang->line('label_customer_details'),'required|trim|numeric');


            $this->form_validation->set_message('required', 'El Campo %s es Requerido');
           // $this->form_validation->set_message('version_check','Esta Asignatura para esta version ya existe, favor crear una nueva version para esta asignatura');



           /*$this->form_validation->set_message('version_check_max','la version para esta asignatura no esta disponible');*/

            if ($this->form_validation->run()== false)
            {

              echo json_encode(array('st'=>0, 'msg' => validation_errors()));
            }
            else
            {

            $customer_id = $shipto_id = 0;

            $customer_id = $this->input->post('text_customer_id');
            $shipto_id = $this->input->post('shipto_id');

            $has_insrance = (!empty($this->input->post('final_insurance')))? "Yes" : "No";

            $datos = array(
                'customer_id' => $customer_id,
                'shipto_id' => $shipto_id,
                'void' => 'No',
                'user_id' => $this->session->userdata('admin_id'),
                'invoice_date' => date("Y-m-d",strtotime(str_replace('/', '-',$this->input->post('date')))),
                'invoice_number' => $this->input->post('invoice_hash'),
                'agent_number' => $this->input->post('agent_invoice'),
                'container' => $this->input->post('container'),
                'driver_id' => $this->input->post('driver_id'),
                'pay_term' => $this->input->post('pay_term'),
                'status' => $this->input->post('status'),
                'sub_total' => $this->input->post('sub_total'),
                'total_packages' => $this->input->post('tot_box'),
                'final_tax' => $this->input->post('final_tax'),
                'final_discount' => $this->input->post('final_discount'),
                'final_insurance' => $this->input->post('final_insurance'),
                'final_payment' => $this->input->post('final_payment'),
                'final_balance' => $this->input->post('final_balance'),
                'balance' => $this->input->post('final_balance'),


            );
                  /*echo "<PRE>";
                    print_r($datos);exit;
                  echo "</PRE>";*/
            if(!empty($this->input->post('user'))){
                $datos['user_name'] = $this->input->post('user');
            }
            if(!empty($this->input->post('misc'))){
                $datos['misc'] = $this->input->post('misc');
            }
            if(!empty($this->input->post('agent_invoice'))){
                $datos['agent_number'] = $this->input->post('agent_invoice');
            }
            if(!empty($this->input->post('agent'))){
                $datos['agent'] = $this->input->post('agent');
            }
            if(!empty($this->input->post('due_date'))){
                $datos['duedate'] = date("Y-m-d",strtotime(str_replace('/', '-',$this->input->post('due_date'))));
            }

                $header_last_id = $this->invm->add_invoices($datos);
               // echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));



            /* now add items */
            $item_params = array();
            for ($i=0; $i < count($this->input->post('item')); $i++) {
                $i_param = array(
                    'header_id' => $header_last_id,
                    'description_1' =>  $this->input->post('item')[$i],
                    'line_number' => ($i+1),
                    'qty' =>  $this->input->post('qty')[$i],
                    'rate' =>  $this->input->post('price')[$i],
                    'discount' =>  $this->input->post('discount')[$i],
                    'insurance' =>  $this->input->post('insurance')[$i],
                    'tax' =>  $this->input->post('tax')[$i],
                    'total_price' =>  $this->input->post('total')[$i],
                );
                $item_params[] = $i_param;
            }
            if(!empty($item_params)){
                $header_id = $this->invm->add_invoice_items($item_params);
                echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
            }
               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                /*if($this->input->post("idInventory") !='')
                {

                   $this->invm->createInventory($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->invm->createInventory($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }*/

            }

        }
    }


    public function create_invoice_customer(){

        if($this->input->is_ajax_request() && $this->input->post()){
           $getMaxId = $this->invm->getMaxId_customer();

           // $this->form_validation->set_rules('company_name', $this->lang->line('label_company'), 'required|trim');
            $this->form_validation->set_rules('customer_fname', $this->lang->line('label_first_name'), 'required|trim');
            $this->form_validation->set_rules('customer_lname', $this->lang->line('label_last_name'), 'required|trim');
            $this->form_validation->set_rules('customer_address_line_1', $this->lang->line('label_address_1'), 'required|trim');
            $this->form_validation->set_rules('customer_city', $this->lang->line('label_city'), 'required|trim');
            $this->form_validation->set_rules('customer_state', $this->lang->line('label_state'), 'required|trim');
            //$this->form_validation->set_rules('customer_balance', $this->lang->line('label_balance'), 'required|trim');
            $this->form_validation->set_rules('customer_zipcode', $this->lang->line('label_zipcode'), 'required|trim');

            if (($this->input->post('customer_telephone_number') == '') && ($this->input->post('customer_cellphone_number') == '')) {

                $this->form_validation->set_rules('customer_telephone_number', $this->lang->line('field_telephone_number'), 'required|trim|max_length[12]');
                $this->form_validation->set_rules('customer_cellphone_number', $this->lang->line('field_cellphone_number'), 'required|trim|max_length[12]');
            }
            //$this->form_validation->set_rules('customer_language',$this->lang->line('field_language'),'trim|required|in_list[English,Spanish]');

            if ($this->form_validation->run() == false) {
                echo json_encode(array('st'=>0, 'msg' => validation_errors()));
                //die;
            }else{

                $params = array(
                    'Cust_ID' => $getMaxId,
                    'user_id' => $this->session->userdata('admin_id'),
                    'fname' => $this->input->post('customer_fname'),
                    'lname' => $this->input->post('customer_lname'),
                    'address_line1' => $this->input->post('customer_address_line_1'),
                    'latitude' => $this->input->post('customer_latitude'),
                    'longitude' => $this->input->post('customer_longitude'),
                    'address_line2' => $this->input->post('customer_address_line_2'),
                    'city' => $this->input->post('customer_city'),
                    'state' => $this->input->post('customer_state'),
                    'zipcode' => $this->input->post('customer_zipcode'),
                    'telephone_number' => $this->input->post('customer_telephone_number'),
                    'cellphone_number' => $this->input->post('customer_cellphone_number'),
                    'lic_id' => $this->input->post('customer_lic')

                );

                  /*echo "<PRE>";
                    var_dump($params);exit;
                  echo "</PRE>";*/

                $id = $this->invm->add_customer($params);
                echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_customer_add_success')));

            }

        }

    }


    public function create_invoice_shipto(){


        if($this->input->post('customer_id') == ''){
            echo json_encode(array('st'=>0, 'msg' => validation_errors()));
        }


        $this->form_validation->set_rules('shipto_fname', $this->lang->line('field_first_name'), 'required|trim');
        $this->form_validation->set_rules('shipto_lname', $this->lang->line('field_last_name'), 'required|trim');

        $this->form_validation->set_rules('shipto_address', $this->lang->line('field_address'), 'required|trim');
        $this->form_validation->set_rules('shipto_address_1', $this->lang->line('field_address_line_1'), 'required|trim');
        $this->form_validation->set_rules('shipto_address_2', $this->lang->line('field_address_line_2'), 'trim|required');

        $this->form_validation->set_rules('shipto_province', $this->lang->line('label_province'), 'required|trim');
        $this->form_validation->set_rules('shipto_sector', $this->lang->line('label_sector'), 'required|trim');

        if (($this->input->post('shipto_telephone_number') == '') && ($this->input->post('shipto_cellphone_number') == '')) {

            $this->form_validation->set_rules('shipto_telephone_number', $this->lang->line('field_telephone_number'), 'required|trim');
            $this->form_validation->set_rules('shipto_cellphone_number', $this->lang->line('field_cellphone_number'), 'required|trim');
        }

        if ($this->form_validation->run() == false) {

            echo json_encode(array('st'=>0, 'msg' => validation_errors()));

        } else {

            $params = array(
                'user_id' => $this->session->userdata('admin_id'),
                'customer_id' => $this->input->post('customer_id'),
                'fname' => $this->input->post('shipto_fname'),
                'lname' => $this->input->post('shipto_lname'),
                'address' => $this->input->post('shipto_address'),
                'address_line1' => $this->input->post('shipto_address_1'),
                'address_line2' => $this->input->post('shipto_address_2'),
                'sector' => $this->input->post('shipto_sector'),
                'province' => $this->input->post('shipto_province'),
                'lic_id' => $this->input->post('shipto_lic'),
                'latitude' => $this->input->post('shipto_latitude'),
                'longitude' => $this->input->post('shipto_longitude'),
                'telephone_number' => $this->input->post('shipto_telephone_number'),
                'cellphone_number' => $this->input->post('shipto_cellphone_number')
            );

            $id = $this->invm->add_shipto($params);

            //$this->Main_model->updateCompanyRefIds('shipto_id', $id);

            echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_customer_add_success')));

        }


    }

  public function edit_Invoice($id_invoice ='')
  {
    $data = $this->invm->get_invoice($id_invoice)->row();
    //var_dump($data);
    echo json_encode($data);
  }
   /* function get_invoice_details_ajax($id)
    {
        $data=array();
        $data['customer_list'] = $this->invm->get_customer_list();
        $data['driver_list'] = $this->invm->get_driver_list();
       /* $data['next_shipto_id'] = $this->invm->get_next_shipto_id();*/
        /*$data['agent_list'] = $this->invm->get_agent_list();
        $data['result'] = $this->invm->get_invoices_data($id);
        $data['result']['customer_data']=$this->invm->get_customer_data($data['result']['customer_id']);

        $data['result']['shipto_data']=$this->invm->get_shipto_data($data['result']['shipto_id']);

        $data['result']['invoice_items']=$this->invm->get_invoices_items($id);
        $inv_count=count($data['result']['invoice_items']);
        $data['invoice_item_count']=$inv_count;
        $data['edit_invoice_id']=$id;


        /*echo "<pre>";
        print_r($data);
        die;*/
        //$html=$this->load->view($this->view_folder.'edit_invoice_content', $data,true);
        /*$data['title']= 'Invoices';

      $html=  $this->load->view('company/invoices/edit_invoice_content', $data);
        //print_r($html); exit;

    }*/


    function edit()
    {
        /*print_r($this->input->post()); die;*/
        $message = array();
        /* customer information */
        // $this->form_validation->set_rules('edit_customer_fname',$this->lang->line('field_first_name'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_lname',$this->lang->line('field_last_name'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_address',$this->lang->line('field_address'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_borough',$this->lang->line('field_borough'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_city',$this->lang->line('field_city'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_state',$this->lang->line('field_state'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_country',$this->lang->line('field_country'),'required|trim');
        // $this->form_validation->set_rules('edit_customer_zipcode',$this->lang->line('field_zipcode'),'required|trim');
        // if(empty($this->input->post('edit_customer_cellphone_number'))){
        //     $this->form_validation->set_rules('edit_customer_telephone_number',$this->lang->line('field_telephone_number'),'required|trim');
        // }
        // if(empty($this->input->post('edit_customer_telephone_number'))){
        //     $this->form_validation->set_rules('edit_customer_cellphone_number',$this->lang->line('field_cellphone_number'),'required|trim');
        // }

        // /* shipto information */
        // $this->form_validation->set_rules('edit_shipto_fname',$this->lang->line('field_first_name'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_lname',$this->lang->line('field_last_name'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_address',$this->lang->line('field_address'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_address_1',$this->lang->line('field_address'),'trim');
        // $this->form_validation->set_rules('edit_shipto_borough',$this->lang->line('field_borough'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_city',$this->lang->line('field_city'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_state',$this->lang->line('field_state'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_country',$this->lang->line('field_country'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_telephone_number',$this->lang->line('field_telephone_number'),'required|trim');
        // $this->form_validation->set_rules('edit_shipto_cellphone_number',$this->lang->line('field_cellphone_number'),'required|trim');
        if($this->input->post('edit_text_customer_id') == ''){
            $message['code'] = "0";
            $res['message'] = $this->lang->line('please_add_a_customer_before_add_shipto');
            echo json_encode($res);
            die;
        }


        $this->form_validation->set_rules('edit_shipto_fname', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_first_name'), 'required|trim');
        $this->form_validation->set_rules('edit_shipto_lname', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_last_name'), 'required|trim');

        $this->form_validation->set_rules('edit_shipto_address', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_address'), 'required|trim');
        $this->form_validation->set_rules('edit_shipto_address_1', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_address_line_1'), 'required|trim');
        $this->form_validation->set_rules('edit_shipto_address_2', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_address_line_2'), 'trim|required');

        $this->form_validation->set_rules('edit_shipto_province', $this->lang->line('label_shipto_details').' '.$this->lang->line('label_province'), 'required|trim');
        $this->form_validation->set_rules('edit_shipto_sector', $this->lang->line('label_shipto_details').' '.$this->lang->line('label_sector'), 'required|trim');

        if (($this->input->post('edit_shipto_telephone_number') == '') && ($this->input->post('edit_shipto_cellphone_number') == '')) {

            $this->form_validation->set_rules('edit_shipto_telephone_number', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_telephone_number'), 'required|trim');
            $this->form_validation->set_rules('edit_shipto_cellphone_number', $this->lang->line('label_shipto_details').' '.$this->lang->line('field_cellphone_number'), 'required|trim');
        }


        // $this->form_validation->set_rules('company_name', $this->lang->line('label_company'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_fname', $this->lang->line('label_customer').' '.$this->lang->line('label_first_name'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_lname', $this->lang->line('label_customer').' '.$this->lang->line('label_last_name'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_address_1', $this->lang->line('label_customer').' '.$this->lang->line('label_address_1'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_city', $this->lang->line('label_customer').' '.$this->lang->line('label_city'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_state', $this->lang->line('label_customer').' '.$this->lang->line('label_state'), 'required|trim');
        //$this->form_validation->set_rules('customer_balance', $this->lang->line('label_balance'), 'required|trim');
        $this->form_validation->set_rules('edit_customer_zipcode', $this->lang->line('label_customer').' '.$this->lang->line('label_zipcode'), 'required|trim');

        if (($this->input->post('edit_customer_telephone_number') == '') && ($this->input->post('edit_customer_cellphone_number') == '')) {

            $this->form_validation->set_rules('edit_customer_telephone_number', $this->lang->line('label_customer').' '.$this->lang->line('field_telephone_number'), 'required|trim|max_length[12]');
            $this->form_validation->set_rules('edit_customer_cellphone_number', $this->lang->line('label_customer').' '.$this->lang->line('field_cellphone_number'), 'required|trim|max_length[12]');
        }

        $this->form_validation->set_rules('edit_date',$this->lang->line('field_date'),'required|trim');
        $this->form_validation->set_rules('edit_due_date',$this->lang->line('field_due_date'),'trim');
        $this->form_validation->set_rules('edit_user',$this->lang->line('field_user'),'trim');
        $this->form_validation->set_rules('edit_misc',$this->lang->line('field_misc'),'trim');
        $this->form_validation->set_rules('edit_invoice_hash',$this->lang->line('field_invoice_number'),'required|trim');
        $this->form_validation->set_rules('edit_agent_invoice',$this->lang->line('field_agent_invoice'),'trim');
        $this->form_validation->set_rules('edit_container',$this->lang->line('field_container'),'required|trim');
        $this->form_validation->set_rules('edit_agent',$this->lang->line('field_agent'),'trim');
        $this->form_validation->set_rules('edit_driver_id',$this->lang->line('field_driver_id'),'required|trim');
        $this->form_validation->set_rules('edit_pay_term',$this->lang->line('field_pay_term'),'required|trim');
        $this->form_validation->set_rules('edit_status',$this->lang->line('field_status'),'required|trim');
        $this->form_validation->set_rules('edit_tot_box',$this->lang->line('field_tot_box'),'required|trim');
        $this->form_validation->set_rules('edit_sub_total',$this->lang->line('field_sub_total'),'required|trim');
        $this->form_validation->set_rules('edit_final_tax',$this->lang->line('field_final_tax'),'required|trim');
        $this->form_validation->set_rules('edit_final_discount',$this->lang->line('field_final_discount'),'required|trim');
        $this->form_validation->set_rules('edit_final_insurance',$this->lang->line('field_final_insurance'),'required|trim');
        $this->form_validation->set_rules('edit_final_payment',$this->lang->line('field_final_payment'),'required|trim');
        $this->form_validation->set_rules('edit_final_balance',$this->lang->line('field_final_balance'),'required|trim');

        $this->form_validation->set_error_delimiters('<div class="has-danger"><div class="form-control-feedback">', '</div></div>');
        if ($this->form_validation->run() == FALSE)
        {
            $message['code'] = "0";
            $message['message'] = validation_errors();
        }
        else
        {   $customer_id = $shipto_id = 0;
            $edit_invoice_id=$this->input->post('edit_invoice_id');


                 $customer_id = $this->input->post('edit_text_customer_id');
                $params = array(
                    'user_id' => $this->id,
                    'fname' => $this->input->post('edit_customer_fname'),
                    'lname' => $this->input->post('edit_customer_lname'),
                    'address_line1' => $this->input->post('edit_customer_address_1'),
                    'latitude' => $this->input->post('edit_customer_latitude'),
                    'longitude' => $this->input->post('edit_customer_longitude'),
                    'address_line2' => $this->input->post('edit_customer_address_2'),
                    'city' => $this->input->post('edit_customer_city'),
                    'state' => $this->input->post('edit_customer_state'),
                    'zipcode' => $this->input->post('edit_customer_zipcode'),
                    'telephone_number' => $this->input->post('edit_customer_telephone_number'),
                    'cellphone_number' => $this->input->post('edit_customer_cellphone_number'),
                    'lic_id' => $this->input->post('edit_customer_lic')

                );


                $this->invm->update_customer($customer_id,$params);




                $shipto_id = $this->input->post('edit_shipto_id');
                $params = array(
                    'user_id' => $this->id,
                    'customer_id' => $this->input->post('edit_text_customer_id'),
                    'fname' => $this->input->post('edit_shipto_fname'),
                    'lname' => $this->input->post('edit_shipto_lname'),
                    'address' => $this->input->post('edit_shipto_address'),
                    'address_line1' => $this->input->post('edit_shipto_address_1'),
                    'address_line2' => $this->input->post('edit_shipto_address_2'),
                    'sector' => $this->input->post('edit_shipto_sector'),
                    'province' => $this->input->post('edit_shipto_province'),
                    'lic_id' => $this->input->post('edit_shipto_lic'),
                    'latitude' => $this->input->post('edit_shipto_latitude'),
                    'longitude' => $this->input->post('edit_shipto_longitude'),
                    'telephone_number' => $this->input->post('edit_shipto_telephone_number'),
                    'cellphone_number' => $this->input->post('edit_shipto_cellphone_number')
                );


                $this->invm->update_shipto($shipto_id, $params);

                $has_insrance = (!empty($this->input->post('edit_final_insurance')))? "Yes" : "No";

            /* internal invoice number */
            /* branch_id-nextinvoice_id_of_branch */

            $params = array(
                'customer_id' => $customer_id,
                'shipto_id' => $shipto_id,
                'void' => 'No',
                'invoice_date' => date("Y-m-d",strtotime(str_replace('/', '-',$this->input->post('edit_date')))),
                'invoice_number' => $this->input->post('edit_invoice_hash'),
                'container' => $this->input->post('edit_container'),
                'driver_id' => $this->input->post('edit_driver_id'),
                'agent' => $this->input->post('agent'),
                'pay_term' => $this->input->post('edit_pay_term'),
                'status' => $this->input->post('edit_status'),
                'sub_total' => $this->input->post('edit_sub_total'),
                'total_packages' => $this->input->post('edit_tot_box'),
                'final_tax' => $this->input->post('edit_final_tax'),
                'final_discount' => $this->input->post('edit_final_discount'),
                'final_insurance' => $this->input->post('edit_final_insurance'),
                'final_payment' => $this->input->post('edit_final_payment'),
                'final_balance' => $this->input->post('edit_final_balance'),
                'balance' => $this->input->post('edit_final_balance'),
            );
            if(!empty($this->input->post('edit_user'))){
                $params['user_name'] = $this->input->post('edit_user');
            }
            if(!empty($this->input->post('edit_misc'))){
                $params['misc'] = $this->input->post('edit_misc');
            }
            if(!empty($this->input->post('edit_agent_invoice'))){
                $params['agent_number'] = $this->input->post('edit_agent_invoice');
            }
            if(!empty($this->input->post('edit_agent'))){
                $params['agent'] = $this->input->post('edit_agent');
            }
            if(!empty($this->input->post('edit_due_date'))){
                $params['duedate'] = date("Y-m-d",strtotime(str_replace('/', '-',$this->input->post('edit_due_date'))));
            }
            $this->invm->update_invoices($edit_invoice_id,$params);

            /* delete existing items*/
            $this->invm->delete_invoice_items($edit_invoice_id);

            /* now add items */
            $item_params = array();
            for ($i=0; $i < count($this->input->post('edit_item')); $i++) {
                $i_param = array(
                    'header_id' => $edit_invoice_id,
                    'description_1' =>  $this->input->post('edit_item')[$i],
                    'line_number' => ($i+1),
                    'qty' =>  $this->input->post('edit_qty')[$i],
                    'rate' =>  $this->input->post('edit_price')[$i],
                    'discount' =>  $this->input->post('edit_discount')[$i],
                    'insurance' =>  $this->input->post('edit_insurance')[$i],
                    'tax' =>  $this->input->post('edit_tax')[$i],
                    'total_price' =>  $this->input->post('edit_total')[$i],
                );
                $item_params[] = $i_param;
            }
            if(!empty($item_params)){
                $header_id = $this->invm->add_invoice_items($item_params);
            }
            $this->session->set_flashdata('succ_msg1', $this->lang->line('text_invoices_update_success'));
            $message['code'] = "1";
            $message['message'] = $this->lang->line('text_invoices_update_success');
        }

        header('Content-Type: application/json');
        echo json_encode($message);
    }



}

/* End of file InvoicesController.php */
/* Location: ./application/controllers/InvoicesController.php */