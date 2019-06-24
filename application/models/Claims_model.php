<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Claims_model extends CI_Model {

  public function GetClaimsTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('tbl_claims');
        $valirable = $this->datatables->generate();
        return $valirable;

    }
	

}

/* End of file Claims_model.php */
/* Location: ./application/models/Claims_model.php */