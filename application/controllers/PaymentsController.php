<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('payments_model', 'pm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        //$data['max_value'] = $this->im->getMaxId();
      //  $data['cref'] = $this->im->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','Payments' => 'payments');
        $data['title']= $this->lang->line('title_payments_list');
        $data['main_content'] = 'company/payments/payments_view';
        $this->load->view('includes/template', $data);
	}

  /*get el datatables payments*/
  public function getPaymentsDataTable($codigoPayments='')
  {
    echo ($this->pm->ShowPaymentsTable($codigoPayments));
  }

    /* Validation Form Payments*/
    /*public function Payments_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


              $this->form_validation->set_rules('description',$this->lang->line('field_description'),'required|trim');





            $this->form_validation->set_message('required', 'El Campo %s es Requerido');
           // $this->form_validation->set_message('version_check','Esta Asignatura para esta version ya existe, favor crear una nueva version para esta asignatura');



           /*$this->form_validation->set_message('version_check_max','la version para esta asignatura no esta disponible');*/

          /*  if ($this->form_validation->run()== false)
            {

              echo json_encode(array('st'=>0, 'msg' => validation_errors()));
            }
            else
            {

                  $datos = array(
                      'item_number' => $this->input->post('item_number_hdn'),
                  );

               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

            /*    if($this->input->post("idInventory") !='')
                {

                   $this->im->createInventory($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->im->createInventory($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }*/




}

/* End of file PaymentsController.php */
/* Location: ./application/controllers/PaymentsController.php */