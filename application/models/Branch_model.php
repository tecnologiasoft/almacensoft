<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {

  public function GetBranchTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("b.id as branch_id,b.*, CONCAT(b.address_line1, ' ', b.address_line2) as address, CONCAT(b.tele_country_code1, ' ', b.telephone_number1) as telephone_number1, CONCAT(b.tele_country_code2, ' ', b.telephone_number2) as telephone_number2")
        ->from('tbl_branch b');

        $valirable = $this->datatables->generate();
        return $valirable;

    }

    function getMaxId(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(id) as maxid");
        $company_db->from('tbl_branch');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;
        
    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_branch");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

}

/* End of file Branch_model.php */
/* Location: ./application/models/Branch_model.php */