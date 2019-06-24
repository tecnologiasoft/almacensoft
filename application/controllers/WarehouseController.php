<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WarehouseController extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('warehouse_model', 'wm');
    $this->load->model('customer_model', 'cm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        $data['max_value'] = $this->wm->getMaxId();
        $data['cref'] = $this->wm->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','Warehouse' => 'warehouse');
        $data['branch_list'] = $this->cm->getBranch();
        $data['title']= $this->lang->line('title_warehouse_list');
        $data['main_content'] = 'company/warehouse/warehouse_view';
        $this->load->view('includes/template', $data);
	}


  /*get el datatables Warehouse*/
  public function getWarehouseDataTable($codigoWarehouse='')
  {
    echo ($this->wm->ShowWarehouseTable($codigoWarehouse));
  }



    /*get Contry*/
  public function getCountry()
  {
    $country = $this->wm->GetCountry();
    echo json_encode($country);

  }

  /*get Province*/
  public function getProvince()
  {
        //$this->load->database('oracle', TRUE);
        $prov = $this->input->get('filtro', TRUE);
        $getProv = $this->wm->GetProvince($prov);
        echo json_encode($getProv);
  }

  /*get Municipality*/
  public function getMunicipality()
  {
        //$this->load->database('oracle', TRUE);
        $mu = $this->input->get('filtro', TRUE);
        $getMuni = $this->wm->GetMunicipality($mu);
        echo json_encode($getMuni);
  }

     /*get Addres1*/
  /*public function getAddress()
  {
    $adress1 = $this->wm->GetAdress();
    echo json_encode($adress1);

  }*/

  /*public function getAddress(){        
      $booksClue = $this->input->post('buscador', TRUE);
      $data_book = $this->wm->GetAdress($booksClue, 'id_prov AS "id", province_name AS "test"');
      echo json_encode($data_book);
  }*/


    /* Validation Form Warehouse*/
    public function Warehouse_validate()
    { //return print_r($_POST);
     // $versionMax = 0;

            if (!$this->input->is_ajax_request())
          {
              redirect('404');
          }else
            {


              $this->form_validation->set_rules('country',$this->lang->line('field_country'),'required|trim');
             // $this->form_validation->set_rules('price',$this->lang->line('field_price'),'required|trim');
             // $this->form_validation->set_rules('cost', $this->lang->line('field_cost'), 'required|trim');
                    //$this->form_validation->set_rules('type',$this->lang->line('field_type'),'required|trim|in_list[Service,Inventory]');





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
                      'country' => $this->input->post('country'),
                      'name' => $this->input->post('warehouse'),
                      'address_line1' => $this->input->post('address_line1'),
                      'address_line2' => $this->input->post('address_line2'),
                      'city' => $this->input->post('locality'),
                      'state' => $this->input->post('administrative_area_level_1'),
                      'zipcode' => $this->input->post('zipcode'),
                      'branch_id' => $this->input->post('branch')
                  );
    
               // return print_r($datos);

                    echo "<PRE>";
                  print_r($datos);
                  echo "</PRE>";

                if($this->input->post("idWarehouse") !='')
                {

                   $this->wm->createWarehouse($datos,'update');
                   echo json_encode(array('st'=>2, 'msg' => $this->lang->line('text_inventory_update_success')));
                }
                else
                {

                    $this->wm->createWarehouse($datos,'create');
                    echo json_encode(array('st'=>1, 'msg' => $this->lang->line('text_inventory_add_success')));
                  }

            }

        }
    }


  public function edit_Warehouse($id_warehouse='')
  {
    $data = $this->wm->get_warehouse($id_warehouse)->row();
    //var_dump($data);
    echo json_encode($data);
  }

  public function delete_warehouse($id)
  {
    $this->wm->deleteWarehouse($id);
    echo json_encode(array('st'=>1, 'msg' => '<div class="alert alert-dismissable alert-success"></div>'));;
  }




}

/* End of file WarehouseController.php */
/* Location: ./application/controllers/WarehouseController.php */