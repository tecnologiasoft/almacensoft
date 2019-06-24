<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClaimsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('claims_model', 'cm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        //$data['max_value'] = $this->im->getMaxId();
        //$data['cref'] = $this->im->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','Claims' => 'claims');
        $data['title']= $this->lang->line('title_claims_list');
        $data['main_content'] = 'company/claims/claims_view';
        $this->load->view('includes/template', $data);
	}


  /*get el datatables Claims*/
  public function getClaimsDataTable($codigoClaims='')
  {
    echo ($this->cm->GetClaimsTable($codigoClaims));
  }


}

/* End of file ClaimsController.php */
/* Location: ./application/controllers/ClaimsController.php */