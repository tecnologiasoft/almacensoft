<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_maintenance_model extends CI_Model {

	  public function ShowAgentTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('agent');

          /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
       //echo $this->datatables->last_query();exit;
      $valirable = $this->datatables->generate();
      return $valirable;

    }

    function getMaxId(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(id) as maxid");
        $company_db->from('agent');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;
        
    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM agent");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }


    public function createAgent($datos, $accion = "create")
     {
         $company_db = $this->load->database('company_db', TRUE);
         if ($accion == "create") {
             
            return $company_db->insert('agent',$datos);
          // echo $company_db->last_query();
         
         }

         elseif($accion == "update"){
           $company_db->where('id', $this->input->post("idAgent"));
           return  $company_db->update('agent', $datos); 
          //echo $company_db->last_query();exit;
         }

     }

    public function get_Agent($id_agent)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT * FROM agent
        WHERE id=". $id_agent . "");

      //echo $company_db->last_query();
       return $query;

    }

    public function deleteAgent($id)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $company_db->where('id', $id);
      $company_db->delete('agent');
      //echo $company_db->last_query();exit;
     // return $deleteCustom;
    }



}

/* End of file agent_maintenance_model.php */
/* Location: ./application/models/agent_maintenance_model.php */