<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BranchController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('branch_model', 'bm');
        $this->load->library('form_validation');
        $this->lang->load('rest_controller',$this->language);
	}

	public function index()
	{
        $data = array();
        $data['max_value'] = $this->bm->getMaxId();
        $data['cref'] = $this->bm->get_cref();
        //var_dump($data['next_id']);exit;
        $data['breadcrumb'] = array('Configuration' => 'configuration','Branch' => 'branch');
        $data['title']= $this->lang->line('title_branch_list');
        $data['main_content'] = 'company/branch/branch_view';
        $this->load->view('includes/template', $data);
	}

	  /*get el datatables Branch*/
	  public function getBranchDataTable($codigoBranch='')
	  {
	    echo ($this->bm->GetBranchTable($codigoBranch));
	  }

}

/* End of file BranchController.php */
/* Location: ./application/controllers/BranchController.php */