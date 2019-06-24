<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments_model extends CI_Model {

  public function ShowPaymentsTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("*")
        ->from('common_type');

          /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
       //echo $this->datatables->last_query();exit;
      $valirable = $this->datatables->generate();
      return $valirable;

    }


}

/* End of file payments_model.php */
/* Location: ./application/models/payments_model.php */