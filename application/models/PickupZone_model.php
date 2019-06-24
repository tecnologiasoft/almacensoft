<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PickupZone_model extends CI_Model {


  public function ShowPickup_ZoneTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('tbl_pickup_zone');
       $valirable = $this->datatables->generate();
       return $valirable;
    }

  public function getBranch()
  {
        $company_db = $this->load->database('company_db', TRUE);
        $result = $company_db->query("select id, name from tbl_branch");
        //echo $this->db->last_query();
        return $result;
  }

  public function createPickupZone($datos, $accion = "create")
   {
       $company_db = $this->load->database('company_db', TRUE);
       if ($accion == "create") {

          return $company_db->insert('tbl_pickup_zone',$datos);
        // echo $company_db->last_query();

       }

       elseif($accion == "update"){
         $company_db->where('id', $this->input->post("idpickup_zone"));
          $aa= $company_db->update('tbl_pickup_zone', $datos);
        echo $company_db->last_query();exit;
          return $aa;
       }

   }

    public function get_PickupZone($id_pickupzone)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT * FROM tbl_pickup_zone
        WHERE id=". $id_pickupzone . "");

      //echo $company_db->last_query();
       return $query;

    }

	  public function deletePickupZone($id)
	  {
	    $company_db = $this->load->database('company_db', TRUE);
	    $company_db->where('id', $id);
	    $company_db->delete('tbl_pickup_zone');
	    //echo $company_db->last_query();exit;
	   // return $deleteCustom;
	  }

    /*Get pickup_zone details*/
    function get_pickup_zone_data($pickup_zone_id)
    {
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("p.*");
        $company_db->from('tbl_pickup_zone p');
        $company_db->where('p.id', $pickup_zone_id);
        $query = $company_db->get();
        //echo $this->company_db->last_query();die;
        if($query->num_rows() >= 1)
        {
            return $query->row_array();
        }
        else
        {
            return array();
        }
    }

}

/* End of file PickupZone_model.php */
/* Location: ./application/models/PickupZone_model.php */