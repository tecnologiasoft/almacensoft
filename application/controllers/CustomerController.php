<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		    $this->load->model('customer_model', 'cm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
    $data = array();
    $data['next_id'] = $this->cm->get_next_id();
    $data['cref'] = $this->cm->get_cref();

    $data['next_id_shipto'] = $this->cm->get_next_id_shipto();
    $data['cref_shipto'] = $this->cm->get_cref_shipto();

        //var_dump($data['cref']);exit();
        //var_dump($data['next_id']);exit;
        /*$data['title'] = $this->lang->line('label_add_customer');
        $data['second_title'] = $this->lang->line('label_add_customer');*/
        /*$data['js'] = ['https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js', MAP_API_URL, 'customer'];*/

       /* $data = array(
            'scripts' => array(
                /*'vendors/googleapis/googleapis.js',
                'vendors/googleapis/jquery.min.js',*/
             /*   'vendors/bootstrap-fileinput/js/fileinput.min.js',
                'vendors/general/inputmask/dist/jquery.inputmask.bundle.js',
                'plus/customer.js'
            ),
            'styles' => array(
                'vendors/bootstrap-fileinput/css/fileinput.min.css'
            )
        );*/

       /* $data['css'] = ['customer'];
        $data['function'] = 'add';*/
        //$this->load->model('company/branch_model');
        $data['title']= 'Customer';
        $data['breadcrumb'] = array('Customer' => 'customer');
//$data['breadcrumb'] = array('/' => 'customer','#' => 'Welcome Page');
        $data['branch_list'] = $this->cm->getBranch();
        $data['main_content'] = 'company/customer/customer_view';
        $this->load->view('includes/template', $data);
  }

  /*get el datatables ListClient*/
  public function getCustomerDataTable($codigoCustomer='')
  {
    echo ($this->cm->ShowCustomerTable($codigoCustomer));
  }



    /* Validation Form Customer*/
    public function Customer_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {

        //$this->form_validation->set_rules('company_name',$this->lang->line('field_company_name'),'trim');
        //$this->form_validation->set_rules('user_name',$this->lang->line('field_user_name'),'trim');
        $this->form_validation->set_rules('fname', $this->lang->line('field_first_name'), 'required|trim');
        $this->form_validation->set_rules('lname', $this->lang->line('field_last_name'), 'required|trim');
        //$this->form_validation->set_rules('email', $this->lang->line('field_email'), 'required|trim|valid_email');
        //$this->form_validation->set_rules('website',$this->lang->line('field_website'),'trim');
        //$this->form_validation->set_rules('password',$this->lang->line('field_password'),'trim|min_length[4]');
        //$this->form_validation->set_rules('confirmpassword', $this->lang->line('field_confirm_password'), 'trim|matches[password]');

        //$this->form_validation->set_rules('address',$this->lang->line('field_address'),'required|trim');

       /*$this->form_validation->set_rules('address_line1', $this->lang->line('field_address_line_1'), 'trim');
        //$this->form_validation->set_rules('address_line_2', $this->lang->line('field_address_line_2'), 'trim');
        $this->form_validation->set_rules('city', $this->lang->line('field_city'), 'required|trim');
        // $this->form_validation->set_rules('borough',$this->lang->line('field_borough'),'required|trim');
        $this->form_validation->set_rules('state', $this->lang->line('field_state'), 'required|trim');
        $this->form_validation->set_rules('branch', $this->lang->line('label_branch'), 'required|trim');*/


        // $this->form_validation->set_rules('country',$this->lang->line('field_country'),'required|trim');
        //$this->form_validation->set_rules('zipcode',$this->lang->line('field_zipcode'),'required|trim');

        //$this->form_validation->set_rules('tele_country_code',$this->lang->line('field_tele_country_code'),'required|trim');
        //$this->form_validation->set_rules('office_country_code',$this->lang->line('field_office_country_code'),'required|trim');
        //$this->form_validation->set_rules('cell_country_code',$this->lang->line('field_cell_country_code'),'required|trim');
        // if(empty($this->input->post('cellphone_number')) && empty($this->input->post('office_phone_number'))){
        //     $this->form_validation->set_rules('telephone_number',$this->lang->line('field_telephone_number'),'required|trim');
        // }
        // if(empty($this->input->post('telephone_number')) && empty($this->input->post('office_phone_number'))){
        //     $this->form_validation->set_rules('cellphone_number',$this->lang->line('field_cellphone_number'),'required|trim');
        // }

      /*  if (($this->input->post('cellphone_number') != '') && ($this->input->post('telephone_number') != '')) {

            $this->form_validation->set_rules('telephone_number', $this->lang->line('field_telephone_number'), 'required|trim');
            $this->form_validation->set_rules('cellphone_number', $this->lang->line('field_cellphone_number'), 'required|trim');
        }*/


        //$this->form_validation->set_rules('fax_number',$this->lang->line('field_fax_number'),'trim');

        //$this->form_validation->set_rules('lic_id',$this->lang->line('field_lic_id'),'trim');

       // $this->form_validation->set_rules('language',$this->lang->line('field_language'),'trim|required|in_list[English,Spanish]');

        //$this->form_validation->set_rules('price_code',$this->lang->line('field_price_code'),'trim');
        //$this->form_validation->set_rules('agent_code',$this->lang->line('field_agent_code'),'trim');
        //$this->form_validation->set_rules('disable_pickup',$this->lang->line('field_disable_pickup'),'trim');
        //$this->form_validation->set_rules('notes',$this->lang->line('field_notes'),'trim');
        //$this->form_validation->set_rules('has_pickup',$this->lang->line('field_has_pickup'),'trim|required|in_list[Yes,No]');
        //$this->form_validation->set_rules('additional_pickup',$this->lang->line('field_additional_pickup'),'trim|required|in_list[Yes,No]');

      /*  $this->form_validation->set_error_delimiters('<div class="has-danger"><div class="form-control-feedback">', '</div></div>');
        if ($this->form_validation->run() == false) {
            //die(validation_errors());
            $this->loadView($this->view_folder . 'add', $data);
        } else {
            /* check email already registered or not? */
          /*  if($this->input->post('email') != ''){
            $already_register = $this->customer_model->check_param(array('email' => $this->input->post('email')));
            if (!empty($already_register)) {
                $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_email_exist'));
                $this->loadView($this->view_folder . 'add', $data);return;
            }
        }
            if ($this->input->post('user_name') != '') {
                /* check user name already registered or not? */
             /*   $already_register = $this->customer_model->check_param(array('user_name' => $this->input->post('user_name')));
                if (!empty($already_register)) {
                    $this->session->set_flashdata('err_msg1', $this->lang->line('text_customer_user_name_exist'));
                    $this->loadView($this->view_folder . 'add', $data);return;
                }
            }

            $lic_picture = "";
            //$this->lang->line('text_customer_email_exist')
            if (!empty($_FILES['lic_picture']) && $_FILES['lic_picture']['size'] > 0) {
                $lic_picture = $this->common->image_upload($field = 'lic_picture', $path = './' . CUSTOMER_IMAGES);
                if (!$lic_picture) {
                    $this->session->set_flashdata('err_msg1', $this->upload->display_errors('', ''));
                    $this->loadView($this->view_folder . 'add', $data);return;
                }
            }*/ /*else{
            $this->session->set_flashdata('err_msg1', sprintf($this->lang->line('label_please_select'),$this->lan->line('field_lic_picture')));
            $this->load->view($this->view_folder.'add', $data); return;
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
                 $datos =
                    array(

                     // 'Cust_ID' => $this->input->post('Cust_ID'),
                      'Cust_ID' => $this->input->post('customer_id'),
                      //'cref' => $this->input->post('cref'),
                      'company_name' => $this->input->post('company_name'),
                      'fname' => $this->input->post('fname'),
                      'lname' => $this->input->post('lname'),
                      'address_line1' => $this->input->post('address_line1'),
                      'apartment' => $this->input->post('apartment'),
                      'address_line2' => $this->input->post('address_line2'),
                      'city' => $this->input->post('city'),
                      'state' => $this->input->post('state'),
                      'zipcode' => $this->input->post('zipcode'),
                      'branch_id' => $this->input->post('branch'),
                      'telephone_number' => $this->input->post('telephone_number'),
                      'cellphone_number' => $this->input->post('cellphone_number'),
                      'email' => $this->input->post('email'),
                      'website' => $this->input->post('website'),
                      'lic_id' => $this->input->post('lic_id'),
                      'lic_picture' => $this->upload_images(),
                      'agent_code' => $this->input->post('agent_code'),
                      'password' => $this->input->post('password'),
                      'language' => $this->input->post('language'),



                       // $this->session->userdata("CODIGO")
                    );
               // return print_r($datos);

                  /*echo "<PRE>";
                    print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idCustomer") !='')
                {

                   $this->cm->createCustomer($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => 'Cliente Editado'));
                }
                else
                {

                    $this->cm->createCustomer($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => 'Gracias por haber completado el formualario para la creacion Clientes'));
                  }

            }

        }
    }

    function upload_images()
    {

          $lic_picture="";
          if (!empty($_FILES['lic_picture']) && $_FILES['lic_picture']['size'] > 0) {
              $user_image = $this->cm->image_upload($field = 'lic_picture', $path = './' . CUSTOMER_IMAGES);
             //  var_dump($lic_picture);exit();
              if (!$user_image) {
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('includes/header', $error);

              }
              return $user_image;
          }
    }

  public function edit_Customer($id_customer ='')
  {
    $data = $this->cm->get_customer($id_customer)->row();
    //var_dump($data);
    echo json_encode($data);
  }


  public function delete_registros($id)
  {
    $this->cm->deleteCustom($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success">Salario Profesor Actualizado</div>'));;
  }




    /*-----------shipto-----------*/

    /*get el datatables Shipto*/
    public function getShiptoDataTable($codigoShipto)
    {
      //var_dump($_POST);exit();
      echo ($this->cm->ShowShiptoTable($codigoShipto));
    }


    /* Validation Form Shipto*/
    public function Ship_to_validate()
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

                   $this->cm->createShipto($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => 'Cliente Editado'));
                }
                else
                {

                    $this->cm->createShipto($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => 'Gracias por haber completado el formualario para la creacion Clientes'));
                  }

            }

        }
    }

    function upload_images_shipto()
    {

          $lic_picture_shipto="";
          if (!empty($_FILES['lic_picture_shipto']) && $_FILES['lic_picture_shipto']['size'] > 0) {
              $user_image = $this->cm->image_upload($field = 'lic_picture_shipto', $path = './' . CUSTOMER_IMAGES);
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
    $data = $this->cm->get_Shipto($id_shipto)->row();
    //var_dump($data);
    echo json_encode($data);
  }


  /*public function delete_registros($id)
  {
    $this->cm->deleteCustom($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success">Salario Profesor Actualizado</div>'));;
  }*/

    /*-----------end shipto-----------*/

  function get_prov_list_json($texto)
  {
      $output = $this->cm->get_prov_list_search(strtolower(urldecode($texto)));
      echo json_encode($output);
  }

    /* get customer data by ajax */
    function get_province_data($texto)
    {
        $output = array('result'=>'');
        if(!empty($texto)){
            $output['result'] = $this->cm->get_province_data(urldecode($texto));
        //var_dump($output);exit;
        }
        echo json_encode($output);
    }




    public function customer_update_in_pickup(){

        if($this->input->is_ajax_request() && $this->input->post()){
            $customer_id  = $this->input->post('customer_id');
           // $this->form_validation->set_rules('company_name', $this->lang->line('label_company'), 'required|trim');
            $this->form_validation->set_rules('customer_fname', $this->lang->line('label_first_name'), 'required|trim');
            $this->form_validation->set_rules('customer_lname', $this->lang->line('customer_lname'), 'required|trim');
            $this->form_validation->set_rules('customer_address_line_1', $this->lang->line('label_address_1'), 'required|trim');
            $this->form_validation->set_rules('customer_city', $this->lang->line('label_city'), 'required|trim');
            $this->form_validation->set_rules('customer_state', $this->lang->line('label_state'), 'required|trim');
            $this->form_validation->set_rules('customer_balance', $this->lang->line('label_balance'), 'required|trim');
            $this->form_validation->set_rules('customer_zipcode', $this->lang->line('label_zipcode'), 'required|trim');
            if (($this->input->post('customer_telephone_number') != '') && ($this->input->post('customer_cellphone_number') != '')) {

                $this->form_validation->set_rules('customer_telephone_number', $this->lang->line('field_telephone_number'), 'required|trim');
                $this->form_validation->set_rules('customer_cellphone_number', $this->lang->line('field_cellphone_number'), 'required|trim');
            }
            $this->form_validation->set_rules('customer_language',$this->lang->line('field_language'),'trim|required|in_list[English,Spanish]');

            if ($this->form_validation->run() == false) {

                echo json_encode(array('st'=>0, 'msg' => validation_errors()));

            }else{

                $params = array(
                    'company_name' => $this->input->post('company_name'),
                    'fname' => $this->input->post('customer_fname'),
                    'lname' => $this->input->post('customer_lname'),
                    'address_line1' => $this->input->post('customer_address_line_1'),
                    'city' => $this->input->post('customer_city'),
                    'state' => $this->input->post('customer_state'),
                    'balance' => $this->input->post('customer_balance'),
                    'zipcode' => $this->input->post('customer_zipcode'),
                    'language' => $this->input->post('customer_language'),
                    'apartment' => $this->input->post('apartment'),
                );

                $this->cm->update_customer($customer_id, $params);
                echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_customer_update_success')));


            }

        }

    }

}

/* End of file CustomerController.php */
/* Location: ./application/controllers/CustomerController.php */