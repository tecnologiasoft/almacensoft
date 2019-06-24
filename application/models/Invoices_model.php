<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices_model extends My_Model {


  public function ShowInvoicesTable($codigoInvoices='')
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("ih.sub_total as sub_total,ih.id as invoices_id,ih.*, c.email,c.address_line1, CONCAT(c.tele_country_code, ' ', c.telephone_number) as telephone_number, CONCAT(c.cell_country_code , ' ', c.cellphone_number) as cellphone_number, CONCAT(c.fname, ' ', c.lname) as name, c.state, CONCAT(s.fname, ' ', s.lname) as consignee");
        $this->datatables->from('tbl_invoice_header ih');
        $this->datatables->join('tbl_customer c','ih.customer_id = c.Cust_ID');
        $this->datatables->join('tbl_shipto s','ih.shipto_id = s.id');
        if($codigoInvoices != ''){
            $this->datatables->where('ih.customer_id' ,$codigoInvoices);
        }

          /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
       //echo $this->datatables->last_query();exit;
     $valirable = $this->datatables->generate();
      return $valirable;

    }

    function getMaxId_customer(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(Cust_ID) as maxid");
        $company_db->from('tbl_customer');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;

    }
    function getMaxId_shipto(){
        $company_db = $this->load->database('company_db', TRUE);
        $company_db->select("MAX(id) as maxid");
        $company_db->from('tbl_shipto');
        $query = $company_db->get()->result();
        return $query[0]->maxid+1;

    }
    /*function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_driver");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
    /*    return $cust_id;
    }*/

    /* Add data of company in table and return id of it */
    function add_invoices($params){
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->insert('tbl_invoice_header', $params);
        return $this->company_db->insert_id();
    }

    /* Add data of company in table and return id of it */
    function add_invoice_items($params){
        $this->company_db = $this->load->database('company_db', TRUE);
        return $this->company_db->insert_batch('tbl_invoice_item', $params);
    }

     /* Add data of company in table and return id of it */
    function add_customer($params){
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->insert('tbl_customer', $params);
        return $this->company_db->insert_id();
    }

    /* Add data of shipto in table and return id of it */
    function add_shipto($params){
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->insert('tbl_shipto', $params);
        return $this->company_db->insert_id();
    }

    /* Get list of branches */
    function get_driver_list()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("*");
        $this->company_db->from('tbl_driver');
       // $this->company_db->where('void','No');
        /*$this->company_db->where($where);*/
        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    function get_agent_list()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("*");
        $this->company_db->from('agent');
        $this->company_db->where('void','No');
        /*$this->company_db->where($where);*/
        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    /* Get list of warehouses */
    function get_customer_list_search($terms)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("c.*, CONCAT(c.tele_country_code, ' ', c.telephone_number) as telephone_number, CONCAT(c.cell_country_code , ' ', c.cellphone_number) as cellphone_number, CONCAT(c.fname, ' ', c.lname) as name");
        $this->company_db->from('tbl_customer c');
        //$this->company_db->where('c.void', 'No');
        $column_search = array("c.address_line1", "CONCAT(c.tele_country_code, ' ', c.telephone_number)", "CONCAT(c.cell_country_code , ' ', c.cellphone_number)", "CONCAT(c.fname, ' ', c.lname)");

        if(isset($terms) && !empty($terms)) // if datatable send POST for search
        {
            $i = 0;
            foreach ($column_search as $item) // loop column
            {
                if($i===0) // first loop
                {
                    $this->company_db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->company_db->like($item, $terms);
                }
                else
                {
                    $this->company_db->or_like($item, $terms);
                }

                if(count($column_search) - 1 == $i) //last loop
                    $this->company_db->group_end(); //close bracket

                $i++;
            }
        }

        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    /*Get customer pickup data*/
    function get_customer_data($customer_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("c.*");
        $this->company_db->from('tbl_customer c');
        $this->company_db->where('c.Cust_ID', $customer_id);
        $query = $this->company_db->get();
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

    /*Get customer pickup data*/
    function get_customer_shipto($customer_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("s.*");
        $this->company_db->from('tbl_shipto s');
        //$this->company_db->where('s.void', 'No');
        $this->company_db->where('s.customer_id', $customer_id);
        $query = $this->company_db->get();
        //echo $this->company_db->last_query();die;
        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    /*Get customer pickup data*/
    function get_shipto_data($shipto_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("s.*");
        $this->company_db->from('tbl_shipto s');
        $this->company_db->where('s.id', $shipto_id);
        $query = $this->company_db->get();
       // echo $this->company_db->last_query();die;
        if($query->num_rows() >= 1)
        {
            return $query->row_array();
        }
        else
        {
            return array();
        }
    }


    /* Get list of warehouses */
    function get_item_list_search($terms)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("i.*");
        $this->company_db->from('tbl_inventory i');
        //$this->company_db->where('i.void', 'No');
        $column_search = array("CONVERT(i.description USING utf8)", "i.item_number");

        if(isset($terms) && !empty($terms)) // if datatable send POST for search
        {
            $i = 0;
            foreach ($column_search as $item) // loop column
            {
                if($i===0) // first loop
                {
                    $this->company_db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->company_db->like($item, $terms);
                }
                else
                {
                    $this->company_db->or_like($item, $terms);
                }

                if(count($column_search) - 1 == $i) //last loop
                    $this->company_db->group_end(); //close bracket

                $i++;
            }
        }

        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            foreach ($query->result() as $key => $value) {
                $value->description = strtolower($value->description);
            }
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }


/*------------ ----------------*/
    /* Get list of warehouses */
    function get_customer_list()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("c.*");
        $this->company_db->from('tbl_customer c');
       // $this->company_db->where('c.void', 'No');
        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    function get_invoices_items($invoices_id)
    {
        $this->company_db->select("ii.*");
        $this->company_db->from('tbl_invoice_item ii');
        $this->company_db->where('ii.header_id', $invoices_id);
        $query = $this->company_db->get();
        //echo $this->company_db->last_query();die;
        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }
    /* Get list of branches */
    /*function get_driver_list()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("*");
        $this->company_db->from('tbl_driver');
       // $this->company_db->where('void','No');
        /*$this->company_db->where($where);*/
      /*  $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }*/

    /*function get_agent_list()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("*");
        $this->company_db->from('agent');
        $this->company_db->where('void','No');
        $this->company_db->where($where);
        $query = $this->company_db->get();

        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }*/

    /*Get invoices details*/

    /*public function get_invoice($id_invoice)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT ih.*,concat(d.fname,' ',d.lname) as driver_name  FROM tbl_invoice_header ih
          LEFT JOIN tbl_driver d  ON  ih.driver_id = d.id
                                   WHERE ih.id=". $id_invoice . "");

      //echo $company_db->last_query();
       return $query;

    }*/

    public function get_invoice($id_invoice = '')
    {
      $this->company_db = $this->load->database('company_db', TRUE);
      $query = $this->company_db->query("SELECT ih.*,concat(d.fname,' ',d.lname) as driver_name, c.fname, c.lname, c.address_line1, c.address_line2,c.city, c.state, c.zipcode, c.cellphone_number, c.lic_id  FROM tbl_invoice_header ih
        LEFT JOIN  tbl_driver d  ON  ih.driver_id = d.id
        LEFT JOIN tbl_customer c ON ih.customer_id = c.Cust_ID
        WHERE ih.id= ". $id_invoice );

      //echo $this->company_db->last_query();
       return $query;

    }


    /*function get_invoices_data($invoices_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $data['select'] = ['ih.*,concat(d.fname," ",d.lname) as driver_name'];
        $data['table'] = 'tbl_invoice_header ih';
        $data['where'] = ['ih.id' => $invoices_id];
        $data['join'] = [
            'tbl_driver d' => ['ih.driver_id = d.id','LEFT']
        ];
        $response = $this->selectFromJoin($data,true);
        return count($response) == 1 ? $response[0]:$response;
    }*/


    /* Update customer data by id */
    function update_customer($customer_id,$params){
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->update('tbl_customer', $params,array("id"=>$customer_id));
    }

/*------------ ----------------*/




}

/* End of file Invoices_model.php */
/* Location: ./application/models/Invoices_model.php */