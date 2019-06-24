<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pickup_model extends My_Model {



  public function ShowPickupTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("p.id as customer_id,p.*, CONCAT(p.tele_country_code, ' ', p.telephone_number) as telephone_number, CONCAT(p.cell_country_code, ' ', p.cellphone_number) as cellphone_number, CONCAT(p.fname, ' ', p.lname) as name, c.balance")
        ->from('tbl_pickup p');
        $this->datatables->join('tbl_customer c','c.Cust_ID = p.customer_id', 'left');
        //$this->datatables->where('p.void','No');

          /*if ($codigoAct != '') {
          //$this->datatables->where("c.id", $codigoAct);

      }*/
      $valirable = $this->datatables->generate();
      // echo $this->datatables->last_query();exit;
      return $valirable;

    }


    public function update_history_from_managment($post){


       if($post['type'] == 'status'){

            $status_key =  'status';
            $key_value = $post['status'];

        }
        if($post['type'] == 'driver'){

            $status_key = 'driver_id';
            $key_value = $post['driver_id'];

        }
        if($post['type'] == 'date'){

            $status_key = 'pickup_date';
            $key_value =  date('Y-m-d',strtotime($post['move_date']));
        }
      /*  dd($post['id']);
        die;*/
        $data['select'] = ['*'];
        $data['table'] = 'tbl_history';
        $data['where_in'] = ['primery_key' => $post['id']];
        $data['where'] = ['tbl' => 'tbl_pickup'];
        $response = $this->selectRecords($data);



        if($response){

            foreach($response as $value){

               if($value->data){
                   $array = json_decode($value->data,TRUE);

                   foreach($array as $key => $v){
                    $bb = array_key_exists($status_key,$v);

                    if($bb){

                            $array[$key][$status_key] = $key_value;
                            $array[$key]['is_update'] = $key_value;


                        }

                   }

                   $array[] = ['updated_by' => $this->username, 'is_update' => 'false'];
                   $array[] = ['updated_date' => date('d-m-Y h:i:s'), 'is_update' => 'false'];
               }







           $json = json_encode($array);



            }
        }else{
            $array[] = ['updated_by' => $this->username, 'is_update' => 'false'];
            $array[] = ['updated_date' => date('d-m-Y h:i:s'), 'is_update' => 'false'];
            $array[] = [$status_key=>$key_value,'is_update' => 'true'];
            $json = json_encode($array);

        }


        if($json){
            $data['insert'] = ['user_id' => $this->id,'tbl' => 'tbl_pickup','primery_key' => $value->primery_key,'data' => $json];
            $data['table'] = 'tbl_history';
            $js = $this->insertRecord($data);

             }


    }

    /* Get list of branches */
    function get_driver_list()
    {
    	$this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("*");
        $this->company_db->from('tbl_driver');
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

    /* Get list of branches */
    function get_zone_list()
    {
        $this->company_db->select("*");
        $this->company_db->from('tbl_pickup_zone');
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

   function update_status($post){
    $this->$company_db = $this->load->database('company_db', TRUE);
      //$this->update_history_from_managment($post);

    /*$message = '';
    if($post['type'] == 'status'){
        $data['update'] = ['status' => $post['status']];
    }
    if($post['type'] == 'driver'){
        $data['update'] = ['driver_id' => $post['driver_id']];
        $message  = $this->lang->line('text_driver_update_success');
    }*/
    if($post['type'] == 'status'){

        //$data['update'] = ['pickup_date' => date('Y-m-d',strtotime($post['move_date']))];

       // $lds = implode(',',$post['id']);
      $sql= "UPDATE tbl_pickup SET update_count = ". $post['status']. " WHERE tbl_pickup.id = ". $post["idStatus"];
       // $sql=  "update tbl_pickup set update_count =" . $status . " where id in($lds)";
        $this->company_db->query($sql);

      //  $message  = $this->lang->line('pickup_date_moved_successfully');
    }
    /*$data['where_in'] = ['id' => $post['id']];
    $data['table'] = 'tbl_pickup';*/
    //$this->updateRecords($data);

/*    $res['status'] = SUCCESS_CODE;
    $res['data'] = '';
    $res['message'] = $message;*/
    //apiResponse($res);

   }

   function update_driver($post){
    $this->$company_db = $this->load->database('company_db', TRUE);
    if($post['type'] == 'driver'){

      $sql= "UPDATE tbl_pickup SET driver_id = ". $post['driver']. " WHERE tbl_pickup.id = ". $post["idDriver"];
      
        $this->company_db->query($sql);

    }

   }

    public function get_pickup($id_pickup)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT p.*, c.Cust_ID, c.fname as name,c.lname as lastname, c.company_name, c.apartment,c.zipcode, c.telephone_number,c.address_line2,c.address_line1 ,c.balance, c.cellphone_number  FROM tbl_pickup p
                                   LEFT JOIN tbl_customer c ON p.customer_id = c.Cust_ID
                                   WHERE p.id=". $id_pickup . "");

      //echo $company_db->last_query();
       return $query;

    }


     public function ShowListShiptoTable($codigoListShipto='')
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select('id,company_name,customer_id, fname,lname,address_line1,address_line2,city,state,province,zipcode,telephone_number,cellphone_number,email,lic_id,
        language')
            ->from('tbl_shipto');

        if ($codigoListShipto != '') {
            $this->datatables->where('customer_id', $codigoListShipto);
           // $this->db->order_by("MODU_CODIGO", 'ASC');
        }

       // echo $this->datatables->last_query();
        return $this->datatables->generate();
    }


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

    public function get_Shipto($id_Shipto)
    {
      $company_db = $this->load->database('company_db', TRUE);
      $query = $company_db->query("SELECT id,company_name,fname,lname,address_line1,address_line2,city,state,zipcode,telephone_number,cellphone_number,email,lic_id,
        language from tbl_shipto
        WHERE id=". $id_Shipto . "");


     // echo $company_db->last_query();
       return $query;

    }




}

/* End of file Pickup_model.php */
/* Location: ./application/models/Pickup_model.php */