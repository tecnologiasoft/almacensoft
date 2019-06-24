<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {


  public function ShowEmployeeTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('employee');

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
        $company_db->from('employee');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;

    }

    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM employee");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

   public function createEmployee($datos, $accion = "create")
   {
       $company_db = $this->load->database('company_db', TRUE);
       if ($accion == "create") {

          return $company_db->insert('employee',$datos);
        // echo $company_db->last_query();

       }

       elseif($accion == "update"){
         $company_db->where('id', $this->input->post("idEmployee"));
         return  $company_db->update('employee', $datos);
        //echo $company_db->last_query();exit;
       }

   }


    public function get_employee($id_employee)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT * FROM employee
        WHERE id=". $id_employee . "");

      //echo $company_db->last_query();
       return $query;

    }

    public function deleteEmployee($id)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $company_db->where('id', $id);
      $company_db->delete('employee');
      //echo $company_db->last_query();exit;
     // return $deleteCustom;
    }


}

/* End of file employee_model.php */
/* Location: ./application/models/employee_model.php */