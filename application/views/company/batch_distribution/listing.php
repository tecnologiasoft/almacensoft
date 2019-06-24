<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="row">
            <div class="col-xl-12">


                        <!-- begin:: Content -->
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
                                        <span class="kt-portlet__head-icon">
                                            <i class="fas fa-th-list" style="color: #265791;"></i>
                                        </span>
                                        <h3 class="kt-portlet__head-title" style="color: #265791;">
                                            <?php echo $this->lang->line('title_batch_list'); ?>
                                        </h3>

                                            <div class="col-md-6 kt-margin-b-20-tablet-and-mobile">
                                                <div class="kt-input-icon kt-input-icon--left">
                                                    <input type="text" name="generalSearchTable" class="form-control" placeholder="Search..." id="generalSearchTable">
                                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                        <span><i class="la la-search"></i></span>
                                                    </span>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">

                                                &nbsp;
                                                <!-- Button trigger modal -->
                                               <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_batch_model">
                                                <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_batch'); ?>
                                               </button> -->
                                                <a href="<?php echo base_url('batch_distribution/add');?>" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                                        <span>
                                                            <i class="la la-user-plus"></i> 
                                                            <span>
                                                                <?php echo $this->lang->line('title_add_new_batch'); ?>
                                                            </span>
                                                        </span>
                                                    </a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">

                                    <!--begin: Datatable -->
                                    <table class="table table-striped- table-bordered table-hover table-checkable" id="batch">
                                        <thead>
                                            <tr>
                                                <th><?php echo $this->lang->line('label_batch'); ?></th>
                                                <th><?php echo $this->lang->line('label_zone'); ?></th>
                                                <th><?php echo $this->lang->line('label_driver'); ?></th>
                                                <th><?php echo $this->lang->line('label_date'); ?></th>
                                                <th><?php echo $this->lang->line('label_type'); ?></th>
                                                <th><?php echo $this->lang->line('label_status'); ?></th>
                                                <th><?php echo $this->lang->line('label_actions'); ?></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content -->




            </div>
        </div>
    </div>
</div>

<style>
    #new_driver_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/*  #new_customer_model span #astric {color: red;} */
 #driver_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
 .astric{ color: red!important; }
</style>


<style type="text/css" media="screen">
    .dataTables_filter {
    display: none;
    }
</style>

 <script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
    var tableBatch;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

    var initTable1 = function() {
        var table = $('#batch');

        // begin first table
        tableBatch = table.DataTable({
            responsive: true,
            ajax: {
                url: 'getBatch',
                type: 'POST',
                data: {
                    pagination: {
                        perpage: 50,
                    },
                },
            },
            columns: [
                {data: 'MDist_BatchNum'},
                {data: 'zone'},
                {data: 'driver'},
                {data: 'MDist_Date'},
                {data: 'MDist_BType'},
                {data: 'Description'},
                //{data: 'Actions', responsivePriority: -1},
                {
                   data: function(datos) {
                         var accion = "";
                         accion += '<a href="<?php echo base_url()."batch_distribution/edit/";?>'+datos.MDist_BatchNum+'" class="btn btn-sm btn-clean btn-icon btn-icon-md edit_customer"  value=" + datos.MDist_BatchNum + "  title="Editar" role="button" data-id=\"" + datos.MDist_BatchNum + "\"><i class="la la-edit"></i></a> ';

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.MDist_BatchNum + " onclick='delete_registro(\"" + datos.MDist_BatchNum + "\")' title='Editar' role='button' data-id=\"" + datos.MDist_BatchNum + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
                },
            ],

        });
            $('#generalSearchTable').on('keyup', function(e) {
                var $this = $(this);
                tableBatch.search($this.val()).draw();
            });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxClient.init();
});



        $(document).ready(function($) {

        /*$("#FormCustomer").validate({
            rules:{
        company_name:{
        required:true
            }
        }
        });*/



      $(document).on('click', '.saveDriver', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Driver_validate',
                data: $("#FormDriver").serialize(),
                type: 'POST',
                dataType: 'json'

              }).done(function(data) {

              //console.log('data diplo', data)
              if(data.st == 0)
                {
                  //alert(data.msg);
                  //alert('st 0');
                // $('.validation-error').html(data.msg);
                Swal.fire({
                  type: 'error',
                  title: 'Oops...',
                  text: data.msg,
                  //footer: '<a href>Why do I have this issue?</a>'
                })
                }

              if(data.st == 1)
              {
                /*$('.validation-error').html(data.msg).css('color', 'green');
                $('.validation-error').html(data.msgsuccess).css('color', 'green');
                //alert(data.msg);
                    setTimeout(function(){
                  $("#cerrar_miModal").trigger("click");
                      location.reload();
                   },1500);*/

                Swal.fire({
                  type: 'success',
                  title: 'Oops...',
                  text: data.msg,
                  //footer: '<a href>Why do I have this issue?</a>'
                })
              }

              if(data.st == 2)
              {
                $('.validation-error').html(data.msg);
                $('.validation-error').html(data.msgsuccess).css('color', 'green');
               //console.log(data.msg);
                                Swal.fire({
                  type: 'success',
                  title: 'Oops...',
                  text: data.msg,
                  //footer: '<a href>Why do I have this issue?</a>'
                })
                    setTimeout(function(){
                                location.reload();
                   },1500);
              }

              });
            event.preventDefault();
        });



          $(document).on('click', '.edit_customer', function(e){
            //alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('CustomerController/edit_Customer')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {
                //console.log($('[name="company_name"]').val(data.company_name));
                /*$getDocente.append('<option value="' + data.ID_PROF + '">' + data.NOMBRE_PROF + '</option>')
                $getDocente.trigger('change');*/

              /*$getDocente.attr("disabled", true);
              $('#periodo').prop('disabled', false);
              $('#mes').prop('disabled', false);
              $('#asignatura').prop('disabled', false);
             // $('#carrera').prop('disabled', true);
              $('#nrc').prop('disabled', false);*/

              $('[name="idCustomer"]').val(data.Cust_ID);
              $('[name="customer_id"]').val(data.Cust_ID);
              $('[name="company_name"]').val(data.company_name);
              $('[name="fname"]').val(data.fname);
              $('[name="lname"]').val(data.lname);
              $('[name="address_line1"]').val(data.address_line1);
              $('[name="apartment"]').val(data.apartment);
              $('[name="address_line2"]').val(data.address_line2);
              $('[name="city"]').val(data.city);
              $('[name="state"]').val(data.state);
              $('[name="zipcode"]').val(data.zipcode);
              $('[name="telephone_number"]').val(data.telephone_number);
              $('[name="cellphone_number"]').val(data.cellphone_number);
              $('[name="email"]').val(data.email);
              $('[name="website"]').val(data.website);
              $('[name="lic_id"]').val(data.lic_id);
              $('[name="agent_code"]').val(data.agent_code);
              $('[name="password"]').val(data.password);
             $('.saveCustomer').text('Editar');




              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
              });

          })



});


function delete_registro(id)
{
    if(confirm('Estas seguro que desea Eliminar este cliente?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('CustomerController/delete_registros')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                //$('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function reload_table()
{
    tableCustomer.ajax.reload(null,false); //reload datatable ajax
}

</script>

<!-- https://embarquesoft.net/company/customer -->










