<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	    /*trae el datatables Customer*/
  public function ShowCustomerTable()
    {
        $this->datatables->set_database('company_db');
/*$this->datatables->select("c.Cust_ID as customer_id,c.*, CONCAT(tele_country_code, ' ', telephone_number) as telephone_number,address_line1, CONCAT(cell_country_code , ' ', cellphone_number) as cellphone_number, CONCAT(fname, ' ', lname) as name,sum(ih.balance) as balance")*/
        $this->datatables->select("c.Cust_ID as customer_id,c.*, CONCAT(tele_country_code, ' ', telephone_number) as telephone_number,address_line1, CONCAT(cell_country_code , ' ', cellphone_number) as cellphone_number, CONCAT(fname, ' ', lname) as name, c.is_active")
        ->from('tbl_customer c');
         // $this->datatables->join('tbl_invoice_header ih','c.Cust_ID = ih.customer_id','left');

            /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
       //echo $this->datatables->last_query();exit;
      $valirable = $this->datatables->generate();
      return $valirable;

    }

    /* Get next id from database */
    function get_next_id(){
      $company_db = $this->load->database('company_db', TRUE);
        $next = $company_db->query("SHOW TABLE STATUS LIKE 'tbl_customer'");
        //echo $company_db->last_query();
        $next = $next->row(0);
        /*echo "<pre>";
          var_dump($next);exit;
        echo "</pre>";*/
        return $next->Auto_increment;
    }


    function get_cref(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) Cust_ID FROM tbl_customer");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }

      public function createCustomer($datos, $accion = "create")
       {
        //$queryTemp="";
           $company_db = $this->load->database('company_db', TRUE);
           if ($accion == "create") {

               $query .= $company_db->insert('tbl_customer',$datos);
               $query .= $company_db->query("UPDATE company_ref set "
                       . " Cust_ID= ". ($this->input->post('cref')+1)
                       . " WHERE id = 1 "
               );
              return $query;
           }

           elseif($accion == "update"){
             $company_db->where('Cust_ID', $this->input->post("idCustomer"));
              return  $company_db->update('tbl_customer', $datos);
           // echo $company_db->last_query();exit;
           }

       }

    public function get_customer($id_customer)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT Cust_ID,company_name,fname,lname,address_line1,apartment,lic_picture,address_line2,city,state,zipcode,telephone_number,cellphone_number,email,website,lic_id,
        agent_code,password,language from tbl_customer
        WHERE Cust_ID=". $id_customer . "");


     // echo $company_db->last_query();
       return $query;

    }
/*    public function deleteCustom($estado)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $company_db->where('Cust_ID',$estado);
      $deleteCustom = $company_db->delete('tbl_customer');
      echo $company_db->last_query();exit;
      return $deleteCustom;
    }*/

  public function deleteCustom($id)
  {
    $company_db = $this->load->database('company_db', TRUE);
    $company_db->where('Cust_ID', $id);
   $company_db->delete('tbl_customer');
    //echo $company_db->last_query();exit;
   // return $deleteCustom;
  }

  public function getBranch()
  {
        $company_db = $this->load->database('company_db', TRUE);
        $result = $company_db->query("select id, name from tbl_branch");
        //echo $this->db->last_query();
        return $result;
  }

    /*Upload image*/
    function image_upload($field,$path)
    {
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $filename = $config['file_name'] = strtotime(date("Ymd his"));
        //$config['max_size'] = '2048KB';
        //$config['max_width']  = '2000';
        //$config['max_height']  = '2000';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload($field))
        {
            $w = $this->upload->data();
            $image_name = $w['file_name'];
            $config = array(
            'image_library'  => 'gd2',
            'new_image'      => $path.'thumb/',
            'source_image'   => $path.$w['file_name'],
            'create_thumb'   => false,
            'width'          => "350",
            'height'         => "350",
            'maintain_ratio' => TRUE,
            );
            $this->load->library('image_lib'); // add liberary
            $this->image_lib->initialize($config);
            $this->image_lib->resize();

            return $image_name;
        }
        else
        {
            return false;
        }
    }

    /* model shipto*/

    function get_next_id_shipto(){
      $company_db = $this->load->database('company_db', TRUE);
        $next = $company_db->query("SHOW TABLE STATUS LIKE 'tbl_shipto'");
        //echo $company_db->last_query();
        $next = $next->row(0);
        /*echo "<pre>";
          var_dump($next);exit;
        echo "</pre>";*/
        return $next->Auto_increment;
    }


    function get_cref_shipto(){
      $company_db = $this->load->database('company_db', TRUE);
        $cust_id = $company_db->query("SELECT count(*) id FROM tbl_shipto");
        $cust_id = $cust_id->row(0);
       // echo $company_db->last_query();
        /*echo "<pre>";
          var_dump($cust_id);exit;
        echo "</pre>";*/
        return $cust_id;
    }


      public function createShipto($datos, $accion = "create")
       {
        //$queryTemp="";
           $company_db = $this->load->database('company_db', TRUE);
           if ($accion == "create") {

               $query .= $company_db->insert('tbl_shipto',$datos);
               $query .= $company_db->query("UPDATE company_ref set "
                       . " Cust_ID= ". ($this->input->post('cref')+1)
                       . " WHERE id = 1 "
               );
              return $query;
           }

           elseif($accion == "update"){
             $company_db->where('id', $this->input->post("id_shiptoList"));
              return $company_db->update('tbl_shipto', $datos);
            //echo $company_db->last_query();exit;

           }

       }

    /* Update copany data */
    function update_customer($id,$params)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->where('Cust_ID',$id);
        $this->company_db->update('tbl_customer',$params);
    }


  /*public function ShowShiptoTable($codigoShipto='')
    {
      //var_dump($codigoShipto);exit;
        $this->datatables->set_database('company_db');
        $this->datatables->select("id,company_name,customer_id, fname,lname,address_line1,address_line2,city,state,zipcode,telephone_number,cellphone_number,email,lic_id,
        language")
        ->from('tbl_shipto');

            if ($codigoShipto !='') {
          $this->datatables->where("customer_id", $codigoShipto);

      }
      $valirable = $this->datatables->generate();
      // echo $this->datatables->last_query();exit;
      return $valirable;

    }*/

     public function ShowShiptoTable($codigoShipto='')
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select('id,company_name,customer_id, fname,lname,address_line1,address_line2,city,state,zipcode,telephone_number,cellphone_number,email,lic_id,
        language')
            ->from('tbl_shipto');

        if ($codigoShipto != '') {
            $this->datatables->where('customer_id', $codigoShipto);
           // $this->db->order_by("MODU_CODIGO", 'ASC');
        }

        echo $this->datatables->last_query();
        return $this->datatables->generate();
    }


    public function get_Shipto($id_Shipto)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT id,company_name,fname,lname,address_line1,address_line2,city,state,zipcode,telephone_number,cellphone_number,email,lic_id,
        language from tbl_shipto
        WHERE id=". $id_Shipto . "");


     // echo $company_db->last_query();
       return $query;

    }


    /* Get list of warehouses */
    function get_prov_list_search($terms)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->distinct('Country');
        $this->company_db->select("Country, Region2");
        $this->company_db->from('aa_embar_locations');
        //$this->company_db->where('i.void', 'No');
        $column_search = array("Country", "Region2");

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

    /*Get customer pickup data*/
    function get_province_data($province_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->distinct('Region2');
        $this->company_db->select("al.*");
        $this->company_db->from('aa_embar_locations al');
        $this->company_db->where('al.Region2', $province_id);
        $query = $this->company_db->get();
        //echo $this->company_db->last_query();
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

/* End of file customer_model.php */
/* Location: ./application/models/customer_model.php */