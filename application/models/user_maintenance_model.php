<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_maintenance_model extends CI_Model {

	
  public function ShowUserTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('tbl_user');
        $valirable = $this->datatables->generate();
        return $valirable;

    }


    function getMaxId(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(id) as maxid");
        $company_db->from('tbl_user');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;
        
    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_user");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

      public function createUser($datos, $accion = "create")
       {
           $company_db = $this->load->database('company_db', TRUE);
           if ($accion == "create") {
               
              return $company_db->insert('tbl_user',$datos);
            // echo $company_db->last_query();
           
           }

           elseif($accion == "update"){
             $company_db->where('id', $this->input->post("idUser"));
             return  $company_db->update('tbl_user', $datos); 
            //echo $company_db->last_query();exit;
           }

       }

    public function get_User($id_user)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT * FROM tbl_user
        WHERE id=". $id_inventory . "");

      //echo $company_db->last_query();
       return $query;

    }

	  public function deleteUser($id)
	  {
	    $company_db = $this->load->database('company_db', TRUE);
	    $company_db->where('id', $id);
	    $company_db->delete('tbl_user');
	    //echo $company_db->last_query();exit;
	   // return $deleteCustom;
	  }


}

/* End of file user_maintenance_model.php */
/* Location: ./application/models/user_maintenance_model.php */