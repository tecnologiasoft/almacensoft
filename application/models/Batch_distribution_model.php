<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batch_distribution_model extends My_model {

/*    var $column_search = array("d.MDist_BatchNum","d.MDist_Zone", "d.MDist_status", "d.MDist_Date", "d.MDist_BType", "d.MDist_Driver"); //set column field database for datatable searchable
    var $order = array('d.MDist_BatchNum' => 'DESC'); // default order*/

    var $column_search_invoice = array("ih.id", "ih.customer_id","ih.invoice_number", "CONCAT(c.fname, ' ', c.lname)", "CONCAT(sh.fname, ' ', sh.lname)", "ih.balance","ih.invoice_date", "total_packages"); //set column field database for datatable searchable
    var $order_invoice = array('ih.id' => 'DESC'); // default order

  public function ShowBatchTable()
    {
        $this->datatables->set_database('company_db');
        $this->datatables->select("d.MDist_BatchNum, d.MDist_Zone, pz.zone, d.MDist_status,st.Description, d.MDist_Date, d.MDist_BType, d.MDist_Exchange_Rate,  d.MDist_Comment, d.MDist_Driver, CONCAT(dr.fname, ' ', dr.lname) as driver");
        $this->datatables->from('tbl_MDist_Batch d');
        $this->datatables->join('tbl_pickup_zone pz', 'd.MDist_Zone = pz.id');
        $this->datatables->join('tbl_driver dr', 'd.MDist_Driver = dr.id');
        $this->datatables->join('tbl_packagestatus st', 'd.MDist_status = st.Status_ID');

      // echo $this->company_db->last_query();exit;
      return $this->datatables->generate();

    }

    /* Get list of branches */
    function getZone()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
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


    function getType()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
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

    function getStatus()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("Status_ID, Description");
        $this->company_db->from('tbl_packagestatus');
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

    function getDriver()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("id, CONCAT(fname, ' ', lname) as name");
        $this->company_db->from('tbl_driver');
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


    /* Add data of company in table and return id of it */
    function add_Tran($datos){
        $this->company_db = $this->load->database('company_db', TRUE);
       // print_r($params);exit();
        //$this->company_db->set('MDist_TDate', 'NOW()', FALSE);
        $this->company_db->insert('tbl_mdist_tran', $datos);
        return $this->company_db->insert_id();
    }

    /* Add data of company in table and return id of it */
    function add_Batch($params){
        $this->company_db = $this->load->database('company_db', TRUE);
       // print_r($params);exit();
        $this->company_db->set('data_created', 'NOW()', FALSE);
        $this->company_db->insert('tbl_mdist_batch', $params);
       // echo $this->company_db->last_query();exit;
        return $this->company_db->insert_id();
    }

    /*Get driver details*/
    function get_driver_data($batch_id)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("t.MDist_id, d.MDist_BatchNum,d.MDist_Zone, d.MDist_status, d.MDist_Date, d.MDist_BType, d.MDist_Driver,d.MDist_Exchange_Rate, t.MDist_TBalance as balance, d.MDist_Comment,t.MDist_Batch,t.MDist_Delivered,
            t.MDist_TInvNUm,t.MDist_TCustID,CONCAT(c.fname, ' ', c.lname) as name,  t.MDist_ShipTo, CONCAT(sh.fname, ' ', sh.lname) as nameShipto,t.MDist_ShipTo,t.MDist_TBox,t.MDist_TDate,t.MDist_Exchange_Balance");
        $this->company_db->from('tbl_mdist_batch d');
        $this->company_db->join('tbl_mdist_tran t', 'd.MDist_BatchNum = t.MDist_Batch', 'LEFT');
        $this->company_db->join('tbl_customer c', 't.MDist_TCustID = c.id', 'LEFT');
        $this->company_db->join('tbl_shipto sh', 't.MDist_ShipTo = sh.id', 'LEFT');

        $this->company_db->where('d.MDist_BatchNum', $batch_id);
        $query = $this->company_db->get();
       // echo $this->company_db->last_query();exit;
        if($query->num_rows() >= 1)
        {
            return $query->row_array();
        }
        else
        {
            return array();
        }
    }

  function get_driver_datas($batch_id)
    {
        $this->company_db->select("t.MDist_id, d.MDist_BatchNum,d.MDist_Zone, d.MDist_status, d.MDist_Date, d.MDist_BType, d.MDist_Driver,d.MDist_Exchange_Rate, t.MDist_TBalance as balance, d.MDist_Comment,t.MDist_Batch,t.MDist_Delivered,
            t.MDist_TInvNUm,t.MDist_TCustID,CONCAT(c.fname, ' ', c.lname) as name,  t.MDist_ShipTo, CONCAT(sh.fname, ' ', sh.lname) as nameShipto,t.MDist_ShipTo,t.MDist_TBox,t.MDist_TDate,t.MDist_Exchange_Balance");
        $this->company_db->from('tbl_mdist_batch d');
        $this->company_db->join('tbl_mdist_tran t', 'd.MDist_BatchNum = t.MDist_Batch', 'LEFT');
        $this->company_db->join('tbl_customer c', 't.MDist_TCustID = c.id', 'LEFT');
        $this->company_db->join('tbl_shipto sh', 't.MDist_ShipTo = sh.id', 'LEFT');

        $this->company_db->where('d.MDist_BatchNum', $batch_id);
        $query = $this->company_db->get();
       // echo $this->company_db->last_query();exit;
        if($query->num_rows() >= 1)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }
    /* Update copany data */
    function update_driver($id,$params)
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->set('data_update', 'NOW()', FALSE);
        $this->company_db->where('MDist_BatchNum',$id);
        $this->company_db->update('tbl_mdist_batch',$params);
    }

    // driver Models
    function _get_datatables_query_invoice()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->company_db->select("ih.id, ih.customer_id, sh.id as ShiptoId,ih.invoice_number,c.id as customer_id, CONCAT(c.fname, ' ', c.lname) as name, CONCAT(sh.fname, ' ', sh.lname) as nameShipto,ih.invoice_date, ih.balance, total_packages");
        $this->company_db->from('tbl_invoice_header ih');
        $this->company_db->join('tbl_customer c', 'ih.customer_id = c.id');
        $this->company_db->join('tbl_shipto sh', 'ih.shipto_id = sh.id');
        $this->company_db->where('ih.invoice_number',$_REQUEST['datatable']['query']['generalSearch']);
        //$this->company_db->where('ih.id',$id);
        //$this->company_db->where('c.void','No');

        //$this->company_db->last_query();exit;
        $i = 0;

        if(isset($_REQUEST['datatable']['query']['generalSearch']) && !empty($_REQUEST['datatable']['query']['generalSearch'])) // if datatable send POST for search
        {
            foreach ($this->column_search_invoice as $item) // loop column
            {
                if($i===0) // first loop
                {
                    $this->company_db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->company_db->like($item, $_REQUEST['datatable']['query']['generalSearch']);
                }
                else
                {
                    $this->company_db->or_like($item, $_REQUEST['datatable']['query']['generalSearch']);
                }

                if(count($this->column_search_invoice) - 1 == $i) //last loop
                    $this->company_db->group_end(); //close bracket

                $i++;
            }
        }

        /*if(!empty($_REQUEST['datatable']['query']['invoice_number'])) // Active or Inactive check
        {
            $this->company_db->where('invoice_number',$_REQUEST['datatable']['query']['invoice_number']);
        }*/

        $invoice_date = "";


        if(!empty($_REQUEST['datatable']['query']['invoice_date'])) // Active or Inactive check
        {

            $invoice_date = $_REQUEST['datatable']['query']['invoice_date'];
            $splitDate = explode('___',$invoice_date);


            if(count($splitDate) == 2){

            $this->company_db->where('invoice_date >=',date("Y-m-d",strtotime($splitDate[0])));
            $this->company_db->where('invoice_date <=',date("Y-m-d",strtotime($splitDate[1])));

            }else{

                $this->company_db->where('invoice_date =',date("Y-m-d",strtotime($invoice_date)));

            }
        }else{
            if(isset($_REQUEST['datatable']['invoice_date']) && !empty($_REQUEST['datatable']['invoice_date'])){

                //$this->company_db->where('invoice_date =',date("Y-m-d",strtotime($_REQUEST['datatable']['invoice_date'])));

            }
        }

    }


    /*Get user records pagination*/
    function get_datatables_invoice()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $offset = ($_REQUEST['datatable']['pagination']['page'] - 1)*$_REQUEST['datatable']['pagination']['perpage'];
        $this->_get_datatables_query_invoice();
        if($_REQUEST['datatable']['pagination']['perpage'] != -1)
        $this->company_db->limit($_REQUEST['datatable']['pagination']['perpage'], $offset);
        $query = $this->company_db->get();
        /*$this->_get_datatables_query();
        $query2 = $this->company_db->get();*/
       /* echo "<pre>";
        var_dump($query);exit;
        echo "</pre>";*/

        $this->session->set_userdata('last_pickup_report_query',$this->company_db->last_query());


        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
              //var_dump($row);exit;
                //$balance = $row->balance;

                //var_dump($balance);exit;



              //  $now = strtotime(str_replace('/', '-', $_REQUEST['datatable']['pickup_date'])); // or your date as well

                $row->invoice_number = "<span class='invoice'>$row->invoice_number</span>
                                    <span></span>";
                $row->name = "<div style='display:none' class='customer'>$row->customer_id</div><span>$row->name</span>";

                $row->nameShipto = "<div style='display:none' class='nameShipto'>$row->ShiptoId</div><span>$row->nameShipto</span>";

                $row->total_packages = "<span class='total_packages'>$row->total_packages</span><span></span>";

                $row->balance = "<span class='balance'>$row->balance</span><span></span>";

                $row->invoice_date = "<span class='invoice_date'>$row->invoice_date</span><span></span>
                                    ";
              // var_dump($row);exit;

                /*$your_date = strtotime($row->pickup_date);
                $datediff = $now - $your_date;

                $days = round($datediff / (60 * 60 * 24));
                if($days > 2)
                    $row->pickup_date = "<label class='text-danger'>".date("m/d/Y", strtotime($row->pickup_date))."</label>";
                else if($days > 1)
                    $row->pickup_date = "<label class='text-warning'>".date("m/d/Y", strtotime($row->pickup_date))."</label>";
                else
                    $row->pickup_date = date("m/d/Y", strtotime($row->pickup_date));*/

                    $row->chk_status = "<label class='m-checkbox m-checkbox--solid m-checkbox--brand'><input type='checkbox' id='chk_status_$row->id' value = '$row->id' class = 'chk_status' name='chk_status[]' data-id ='$row->id'>
                    <span></span></label>
                    ";
                /*if($row->status != "Done"){
                } else {
                    $row->chk_status = "<label class='m-checkbox m-checkbox--solid m-checkbox--brand'><input type='checkbox' id='chk_status_$row->id' value = '$row->id' class = 'chk_status' name='chk_status[]' data-id ='$row->id' checked>
                    <span></span></label>";
                }*/

                $row->chk_print = "<label class='m-checkbox m-checkbox--solid m-checkbox--brand'>
                                    <input type='checkbox' class = 'chk_print' name='chk_print[]' data-id ='$row->id' checked>
                                    <span></span>
                                            </label>";

              /*  if($row->driver_id != '0'){

                $row->chk_driver = "<label class='m-checkbox m-checkbox--solid m-checkbox--brand'><input type='checkbox' class = 'chk_driver'  name='chk_driver[]' data-id ='$row->id' checked>
                                    <span></span></label>";

                }else{

                    $row->chk_driver = "<label class='m-checkbox m-checkbox--solid m-checkbox--brand'><input type='checkbox' class = 'chk_driver'  name='chk_driver[]' data-id ='$row->id'>
                                        <span></span></label>
                                        ";
                }*/


            }

            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function count_filtered_invoice()
    {
        $this->company_db = $this->load->database('company_db', TRUE);
        $this->_get_datatables_query_invoice();
        $query = $this->company_db->get();
        return $query->num_rows();
    }





}

/* End of file Batch_distribution_model.php */
/* Location: ./application/models/Batch_distribution_model.php */