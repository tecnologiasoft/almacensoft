<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {


  public function ShowInventoryTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("i.id as inventory_id,i.*")
        ->from('tbl_inventory i');

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
        $company_db->from('tbl_inventory');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;
        
    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_inventory");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

  /*      public function createInventory($datos, $accion = "create")
     {
         $company_db = $this->load->database('company_db', TRUE);
         if ($accion == "create") {
             
            $aa= $company_db->insert('tbl_inventory',$datos);

            $company_db->where('cust_id', $this->input->post("cref"));
            $ab= $company_db->update('company_ref', $datos); 
           echo $company_db->last_query();exit;
           return $aa;
           return $ab;
         
         }*/
    
      public function createInventory($datos, $accion = "create")
   {
       $company_db = $this->load->database('company_db', TRUE);
       if ($accion == "create") {
           
          return $company_db->insert('tbl_inventory',$datos);
        // echo $company_db->last_query();
       
       }

       elseif($accion == "update"){
         $company_db->where('id', $this->input->post("idInventory"));
         return  $company_db->update('tbl_inventory', $datos); 
        //echo $company_db->last_query();exit;
       }

   }

    public function get_inventory($id_inventory)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT * FROM tbl_inventory
        WHERE id=". $id_inventory . "");

      //echo $company_db->last_query();
       return $query;

    }

  public function deleteInventory($id)
  {
    $company_db = $this->load->database('company_db', TRUE);
    $company_db->where('id', $id);
    $company_db->delete('tbl_inventory');
    //echo $company_db->last_query();exit;
   // return $deleteCustom;
  }

}

/* End of file inventory_model.php */
/* Location: ./application/models/inventory_model.php */