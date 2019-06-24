<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver_model extends CI_Model {


  public function ShowDriverTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("d.id as driver_id,d.*, CONCAT(d.tele_country_code, ' ', d.telephone_number) as telephone_number, CONCAT(d.cell_country_code , ' ', d.cellphone_number) as cellphone_number, CONCAT(d.fname, ' ', d.lname) as name")
            ->from('tbl_driver d');

          /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
      // echo $this->datatables->last_query();exit;
      $valirable = $this->datatables->generate();
      return $valirable;

    }


    function getMaxId(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(id) as maxid");
        $company_db->from('tbl_driver');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;

    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_driver");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

    public function createDriver($datos, $accion = "create")
     {
         $company_db = $this->load->database('company_db', TRUE);
         if ($accion == "create") {

            return $company_db->insert('tbl_driver',$datos);
          // echo $company_db->last_query();

         }

         elseif($accion == "update"){
           $company_db->where('id', $this->input->post("idDriver"));
           return  $company_db->update('tbl_driver', $datos);
          //echo $company_db->last_query();exit;
         }

     }

  public function getBranch()
  {
        $company_db = $this->load->database('company_db', TRUE);
        $result = $company_db->query("select id, name from tbl_branch");
        //echo $this->db->last_query();
        return $result;
  }



}

/* End of file driver_model.php */
/* Location: ./application/models/driver_model.php */