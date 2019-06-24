<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventoryController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		    $this->load->model('inventory_model', 'im');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        $data['max_value'] = $this->im->getMaxId();
        $data['cref'] = $this->im->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Inventory' => 'Inventory');
        $data['title']= $this->lang->line('title_inventory_list');
        $data['main_content'] = 'company/inventory/inventory_view';
        $this->load->view('includes/template', $data);
	}


  /*get el datatables Inventory*/
  public function getInventoryDataTable($codigoInventory='')
  {
    echo ($this->im->ShowInventoryTable($codigoInventory));
  }


    /* Validation Form Inventory*/
    public function Inventory_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


              $this->form_validation->set_rules('description',$this->lang->line('field_description'),'required|trim');
             // $this->form_validation->set_rules('price',$this->lang->line('field_price'),'required|trim');
             // $this->form_validation->set_rules('cost', $this->lang->line('field_cost'), 'required|trim');
                    //$this->form_validation->set_rules('type',$this->lang->line('field_type'),'required|trim|in_list[Service,Inventory]');
              //$this->form_validation->set_rules('qty', $this->lang->line('field_qty'), 'required|trim');
              //$this->form_validation->set_rules('recorder_point', $this->lang->line('field_recorder_point'), 'required|trim');
              //$this->form_validation->set_rules('driver_inventory', $this->lang->line('field_driver_inventory'), 'required|trim|in_list[Yes,No]');
              //$this->form_validation->set_rules('air', $this->lang->line('field_air'), 'required|trim|in_list[Yes,No]');
             // $this->form_validation->set_rules('country', $this->lang->line('field_country'), 'required|trim');
              //$this->form_validation->set_rules('zone', $this->lang->line('field_zone'), 'required|trim');

              // $this->form_validation->set_rules('weight', $this->lang->line('field_weight'), 'required|trim');
              // $this->form_validation->set_rules('width', $this->lang->line('field_width'), 'required|trim');
              // $this->form_validation->set_rules('height', $this->lang->line('field_height'), 'required|trim');
              //$this->form_validation->set_rules('depth', $this->lang->line('field_depth'), 'required|trim');
              //$this->form_validation->set_rules('volume_price', $this->lang->line('field_volume_price'), 'required|trim');
              //$this->form_validation->set_rules('weight_price', $this->lang->line('field_weight_price'), 'required|trim');
              //$this->form_validation->set_rules('has_insurane', $this->lang->line('field_has_insurane'), 'required|trim|in_list[Yes,No]');
              //$this->form_validation->set_rules('insurance_price', $this->lang->line('field_insurance_price'), 'required|trim');
              //$this->form_validation->set_rules('insurance_percentage', $this->lang->line('field_insurance_percentage'), 'required|trim');
              //$this->form_validation->set_rules('calculate_price', $this->lang->line('field_calculate_price'), 'required|trim');
              //$this->form_validation->set_rules('scanner_type', $this->lang->line('field_scanner_type'), 'required|trim');
               //$this->form_validation->set_rules('weight_price_from', 'weight_price_from', 'required|numeric|trim|callback_checkFromTo');
               //$this->form_validation->set_rules('weight_price_to', 'weight_price_to','required|numeric|trim');
               //$this->form_validation->set_rules('factor_of_volume', $this->lang->line('field_factor_of_volume'),'required|trim');
              //$this->form_validation->set_error_delimiters('<div class="has-danger"><div class="form-control-feedback">', '</div></div>');





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
                      'item_number' => $this->input->post('item_number_hdn'),
                      'description' => $this->input->post('description'),
                      'price' => $this->input->post('price'),
                      'cost' => $this->input->post('cost'),
                      'type' => $this->input->post('type'),
                      'qty' => $this->input->post('qty'),
                      'recorder_point' => $this->input->post('recorder_point'),
                      'driver_inventory' => $this->input->post('driver_inventory'),
                      'air' => $this->input->post('air'),
                      'country' => '',
                      'zone' => '',
                      'weight' => '',
                      'width' => '',
                      'height' => '',
                      'depth' => '',
                      'volume_price' => $this->input->post('volume_price'),
                      'weight_price' => '',
                      'has_insurane' => $this->input->post('has_insurane'),
                      'insurance_price' => $this->input->post('insurance_price'),
                      'insurance_percentage' => $this->input->post('insurance_percentage'),
                      'calculate_price' => $this->input->post('calculate_price'),
                      'scanner_type' => '',
                      'weight_price_from' => $this->input->post('weight_price_from'),
                      'weight_price_to' => $this->input->post('weight_price_to'),
                      'factor_of_volume' => $this->input->post('factor_of_volume')
                  );
    
               // return print_r($datos);

                    /*echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";*/

                if($this->input->post("idInventory") !='')
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

/* End of file InventoryController.php */
/* Location: ./application/controllers/InventoryController.php */