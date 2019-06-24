<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PruebaSoftController extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			
		}

	public function index()
	{
		$data['title']= 'AlmacenSoft';
        $data['main_content'] = 'pruebas/pruebas_view';     
        $this->load->view('includes/template', $data);
	}

}

/* End of file PruebaSoftController.php */
/* Location: ./application/controllers/PruebaSoftController.php */