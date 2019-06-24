<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warehouse_model extends CI_Model {

  public function ShowWarehouseTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('tbl_warehouse');

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
        $company_db->from('tbl_warehouse');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;

    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_warehouse");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

    public function GetCountry(){
        $company_db = $this->load->database('company_db', TRUE);
        $sql="SELECT cou_id, cou_active, CONCAT(cou_code, ' - ', cou_name) AS cou_name, cou_code from aa_embar_countries where cou_active = 'Y'";
        $query=$company_db->query($sql);
        return $query->result();
    }

    public function GetProvince($prov)
    {
      $company_db = $this->load->database('company_db', TRUE);
       $query = $company_db->query("SELECT DISTINCT Country, Region2 from aa_embar_locations where Country ='" . $prov . "'");
       //echo $company_db->last_query();
       return $query->result();
      // echo $this->db->last_query();

    }

    public function GetMunicipality($mu)
    {
      $company_db = $this->load->database('company_db', TRUE);
       $query = $company_db->query("SELECT DISTINCT Country,Region2, Region3 from aa_embar_locations where Region2 ='" . $mu . "'");
       //echo $company_db->last_query();
       return $query->result();

    }

    /*public function GetAdress($booksClue, $column){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select($column);
        $company_db->from('tbl_province');
        //$company_db->like('id_prov || \' - \' || province_name', $booksClue);
        //echo $this->db->last_query();
        return $company_db->get()->result_array();
    }*/


      public function createWarehouse($datos, $accion = "create")
       {
           $company_db = $this->load->database('company_db', TRUE);
           if ($accion == "create") {
               
              return $company_db->insert('tbl_warehouse',$datos);
            // echo $company_db->last_query();
           
           }

           elseif($accion == "update"){
             $company_db->where('id', $this->input->post("idWarehouse"));
             return  $company_db->update('tbl_warehouse', $datos); 
            //echo $company_db->last_query();exit;
           }

       }

      public function get_Warehouse($id_warehouse)
      {
        $company_db = $this->load->database('company_db', TRUE);
        $query = $company_db->query("SELECT * FROM tbl_warehouse
          WHERE id=". $id_warehouse . "");

        //echo $company_db->last_query();
         return $query;

      }

    public function deleteWarehouse($id)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $company_db->where('id', $id);
      $company_db->delete('tbl_warehouse');
      //echo $company_db->last_query();exit;
     // return $deleteCustom;
    }

}

/* End of file Warehouse_model.php */
/* Location: ./application/models/Warehouse_model.php */