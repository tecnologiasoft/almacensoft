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
                      <i class="fas fa-truck-pickup" style="color: #265791;"></i>
                    </span>
                    <h3 class="kt-portlet__head-title" style="color: #265791;">
                      <?php echo $this->lang->line('title_batch_list'); ?>
                    </h3>
                  </div>
                </div>
                <br>
                <div class="col-sm-12">

                  <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_batch'); ?></label>
                          <div class="col-8">
                            <input type="text" class="form-control m-input" name="id" id="id" placeholder="<?php echo $this->lang->line('label_id'); ?>" value="<?php echo $result['MDist_BatchNum']?$result['MDist_BatchNum']:set_value('date')?>">
                                                             <?php echo form_error('batch'); ?>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_zone'); ?></label>
                          <div class="col-8">
                              <select class="form-control m-input" name="zone" id="zone" placeholder="<?php echo $this->lang->line('label_zone'); ?>"  data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">
                                  <option value=""><?php echo $this->lang->line('label_zone'); ?></option>

                                  <?php
                                  if(!empty($zone_list)){
                                      foreach ($zone_list as $key => $value) {
                                          ?>
                                          <option value="<?php echo $value['id']; ?>" <?php echo $value['id']==$result['MDist_Zone'] ? "selected":"";?>><?php echo $value['zone']; ?></option>
                                          <?php
                                           }
                                        }
                                  ?>
                              </select>

                                <div id="driver_error">
                                    <?php echo form_error('zone'); ?>
                                </div>
                          </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group row">
                        <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_status'); ?></label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control m-input" name="status" id="status" placeholder="<?php echo $this->lang->line('label_status'); ?>"  data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">
                                <option value=""><?php echo $this->lang->line('label_status'); ?></option>

                                <?php
                                if(!empty($status_list)){
                                    foreach ($status_list as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value['Status_ID']; ?>" <?php echo $value['Status_ID']==$result['MDist_Driver'] ? "selected":"";?>><?php echo $value['Description']; ?></option>
                                        <?php
                                         }
                                      }
                                ?>
                            </select>
                            <div id="driver_error">
                                <?php echo form_error('zone'); ?>
                            </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_driver'); ?></label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <select class="form-control m-input" name="driver" id="driver" placeholder="<?php echo $this->lang->line('label_driver'); ?>"  data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">
                                <option value=""><?php echo $this->lang->line('label_driver'); ?></option>

                                <?php
                                if(!empty($driver_list)){
                                    foreach ($driver_list as $key => $value) {
                                        ?>
                                        <option value="<?php echo $value['id']; ?>" <?php echo $value['id']==$result['MDist_Driver'] ? "selected":"";?>><?php echo $value['name']; ?></option>
                                        <?php
                                         }
                                      }
                                ?>
                            </select>
                            <div id="driver_error">
                                <?php echo form_error('zone'); ?>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_date'); ?></label>
                          <div class="col-8">
                            <input type="text" class="form-control m-input" name="date" id="date" placeholder="<?php echo $this->lang->line('label_date'); ?>" value="<?php echo $result['MDist_Date']?$result['MDist_Date']:set_value('date')?>">
                                                          <?php echo form_error('date'); ?>
                          </div>
                      </div>



                        <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_type'); ?></label>
                          <div class="col-8">
                              <select class="form-control m-input" name="type" id="type" placeholder="<?php echo $this->lang->line('label_type'); ?>"  data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">

                                  <option value = ""><?php echo $this->lang->line('label_select').' '.$this->lang->line('label_type')?></option>

                                   <option value = "Invoice" <?php echo $result['MDist_BType'] == 'Invoice'?"selected":""; ?>><?php echo $this->lang->line('label_invoice'); ?></option>

                                   <option value = "Container" <?php echo $result['MDist_BType'] == 'Container'?"selected":""; ?>><?php echo $this->lang->line('label_container'); ?></option>

                              </select>
                              <div id="driver_error">
                                  <?php echo form_error('type'); ?>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_exchange_rate'); ?></label>
                          <div class="col-8">
                             <input type="text" class="form-control m-input exchange_rate" name="exchange_rate" id="exchange_rate" placeholder="<?php echo $this->lang->line('label_exchange_rate'); ?>" value="<?php echo $result['MDist_Exchange_Rate']?$result['MDist_Exchange_Rate']:set_value('MDist_Exchange_Rate')?>">
                              <div id="driver_error">
                                  <?php echo form_error('type'); ?>
                              </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_comment'); ?></label>
                          <div class="col-8">
                              <textarea class="form-control m-input" rows="2" name="comment" id="comment" placeholder="<?php echo $this->lang->line('label_comment'); ?>"><?php if(!empty($result['MDist_Comment'])) echo $result['MDist_Comment']; else echo set_value('MDist_Comment'); ?></textarea>
                             <?php echo form_error('comment'); ?>
                          </div>
                        </div>

                    </div>
                  </div>

                </div>

                <div class="kt-portlet__body">

                                  <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                                      <div class="row align-items-center">
                                          <div class="col-xl-8 order-2 order-xl-1">
                                              <div class="form-group m-form__group row align-items-center">
                                                  <div class="col-md-4">
                                                      <div class="kt-input-icon kt-input-icon--left">
                                                        <!-- <input type="text" name="generalSearchTable" class="form-control" placeholder="Search..." id="generalSearchTable"> -->
                                                        <input type="text" class="form-control m-input" placeholder="<?php echo $this->lang->line('label_search'); ?>" id="m_form_search">
                                                        <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                          <span><i class="la la-search"></i></span>
                                                        </span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <div class="m-input-icon m-input-icon--left">
                                                          <input type="text" class="form-control m-input" placeholder="<?php echo $this->lang->line('label_invoice_date'); ?>" id="m_form_date">
                                                           <span class="m-input-icon__icon m-input-icon__icon--left">
                                                              <span>
                                                                  <i class="la la-calendar"></i>
                                                              </span>
                                                          </span>
                                                      </div>
                                                  </div>

                              
                                                  <div class="col-md-4">
                                                      <div class="m-input-icon m-input-icon--left">
                                                          <button type="submit" class="btn btn-warning btnTran" value="update">
                                                            <?php echo $this->lang->line('label_submit'); ?>
                                                          </button>
                                                      </div>
                                                  </div>

                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!--end: Search Form -->


                  <!--begin: Datatable -->
                <div class="m_datatable"></div>

                  <!--end: Datatable -->
                </div>
              </div>
            </div>

            <!-- end:: Content -->




      </div>
    </div>
  </div>
</div>
 <script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<style>
 #new_pickup_model.modal.show .modal-dialog {
    max-width: 70% !important;
}

 #pickup_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
  .dataTables_filter {
  display: none;
  }

.show-pickup-info label{
    font-weight: 600;
    color: #265791;
}
.show-pickup-info p {
    /* padding: 5px 10px; */
    background-color: #fff;
    min-height: 31px;
}

</style>



<script>

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!

            var yyyy = today.getFullYear();
            if(dd<10){

                dd='0'+dd;
            }
            if(mm<10){
                mm='0'+mm;
            }
            var today = mm+'/'+dd+'/'+yyyy;

            var m_datatables = null;
            var DatatableRemoteAjaxDemo = function() {
            var t = function() {
            var t = $(".m_datatable").KTDatatable({
                data: {
                    type: "remote",
                    source: {
                        read: {
                            url: "<?php echo base_url('batch_distribution/ajax_list_invoice')?>",
                            method: 'GET',
                            params: {
                                invoice_date: today
                            }
                        }
                    },
                    pageSize: 10,
                    saveState: {
                        cookie: false,
                        webstorage: false
                    },
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true
                },
                layout: {
                    theme: "default",
                    class: "",
                    scroll: false,
                    footer: false
                },
                sortable: true,
                pagination: true,
                columns: [{
                    field: "id",
                    title: "#",
                    //sortable: !1,
                    selector: false,
                    textAlign: "center",
                    width: 50,
                    template: function(t) {
                        return '\t\t\t\t\t\t\t\t\t\t\t<span  style="width: 138px; display:none;">'+t.id+'</span><span class="mdist_id" style="width: 138px;"><?php echo $result['MDist_id']; ?></span><span class="statusDelivery" style="width: 138px; display:none;"><?php echo $result['MDist_Delivered']; ?></span><span class="statusPaid" style="width: 138px; display:none;"><?php echo $result['MDist_TPaid']; ?></span>'
                    }
                }, {
                    field: "invoice_number",
                    title: "<?php echo $this->lang->line('label_invoice'); ?>",
                    /*template: function(t) {

                        return '\t\t\t\t\t\t\t\t\t\t\t<span style="width: 138px;">'+t.invoice_number+'</span><input class="montoBalance" name="mdist_tbalance" value="'+t.invoice_number+'" id="mdist_tbalance" type="text">'
                    }*/
                }, {
                    field: "name",
                    title: "<?php echo $this->lang->line('label_customer'); ?>",
                }, {
                    field: "nameShipto",
                    title: "<?php echo $this->lang->line('label_consignee'); ?>",
                }, {
                    field: "total_packages",
                    title: "<?php echo $this->lang->line('label_boxes'); ?>",
                }, {
                    field: "balance",
                    title: "<?php echo $this->lang->line('label_balance'); ?>",

                },{
                    field: "invoice_date",
                    title: "<?php echo $this->lang->line('label_date'); ?>",
                }, {
                    field: "MDist_Exchange_Rate",
                    title: "<?php echo $this->lang->line('label_exchange_balance'); ?>",
                    template: function() {
                       // return '\t\t\t\t\t\t\t\t\t\t\t<input class="montoBalance" name="'+t.balance+'" value="'+t.balance+'" type="text">'
                        return '\t\t\t\t\t\t\t\t\t\t\t<span class="simboloMoneda" style="width: 138px;"></span><span class="exchange_balance" style="width: 138px;"></span>'
                    }
                },{

                    field: "chk_status",
                    title: "<label class=' m-checkbox m-checkbox--bold text-white'><input type = 'checkbox' name='chk' class='chk_delivery'><?php echo $this->lang->line('label_label_delivered'); ?><span></span></label>",
                    template: function(t) {
                      var statusDelivery = $(".statusDelivery").text();
                      var mdist_id = $(".mdist_id").text();
                      var checked = (statusDelivery == "1") ? "checked" : "";
                      //alert(dist_id);
                       // return '\t\t\t\t\t\t\t\t\t\t\t<input class="montoBalance" name="'+t.balance+'" value="'+t.balance+'" type="text">'
                        return "\t\t\t\t\t\t\t\t\t\t\t<label class=' m-checkbox m-checkbox--bold text-white'><input type='checkbox' value="+mdist_id+" "+checked+" name='chk_delivery[]' class='chk_delivery'><span></span></label>"
                    }

                },{

                    field: "chk_status",
                    title: "<label class=' m-checkbox m-checkbox--bold text-white'><input type = 'checkbox' name = 'chk' class = 'chk_paid'><?php echo $this->lang->line('label_paid'); ?><span></span></label>",
                    template: function(t) {
                      var statusPaid = $(".statusPaid").text();
                      var mdist_id = $(".mdist_id").text();
                      var checkedPaid = (statusPaid == "1") ? "checked" : "";
                      //alert(dist_id);
                       // return '\t\t\t\t\t\t\t\t\t\t\t<input class="montoBalance" name="'+t.balance+'" value="'+t.balance+'" type="text">'
                        return "\t\t\t\t\t\t\t\t\t\t\t<label class=' m-checkbox m-checkbox--bold text-white'><input type='checkbox' value="+mdist_id+" "+checkedPaid+" name='chk_paid[]' class='chk_paid'><span></span></label>"
                    }
                },
                {
                    field: "Actions",
                    width: 110,
                    title: "<?php echo $this->lang->line('label_actions'); ?>",
                    sortable: !1,
                    overflow: "visible",
                    template: function(t) {
                      var mdist_id = $(".mdist_id").text();
                        /*\t\t\t\t\t\t<a href="<?php //echo base_url()."company/pickup/view/";?>'+t.id+'" class="m-portlet__nav-link btn m-btn m-btn--hover-success m-btn--icon m-btn--icon-only m-btn--pill">\t\t\t\t\t\t\t<i class="la la-eye"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t</a>*/
                        return '\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t<a href="javascript:;" onclick="delete_batch('+mdist_id+')" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" >\t\t\t\t\t\t\t<i class="la la-trash"></i>\t\t\t\t\t\t</a>'
                    }
                }
                ]
            }),
                    e = t.getDataSourceQuery();
                    m_datatables = t;
                    $("#m_form_search").on("keyup", function(e) {
                        var a = t.getDataSourceQuery();
                        a.generalSearch = $(this).val().toLowerCase(), t.setDataSourceQuery(a), t.load()
                    }).val(e.generalSearch),

                    /*$("#m_form_status").on("change", function() {
                        var e = t.getDataSourceQuery();
                        e.Status = $(this).val().toLowerCase(), t.setDataSourceQuery(e), t.load()
                    }).val(void 0 !== e.Status ? e.Status : ""), */

                    $("#m_form_date").on("change", function() {
                        var e = t.getDataSourceQuery();
                        e.invoice_date = $(this).val().toLowerCase(), t.setDataSourceQuery(e), t.load()
                    }).val(void 0 !== e.invoice_date ? e.invoice_date : today)

                    /*$("#m_form_type").on("change", function() {
                        var e = t.getDataSourceQuery();
                        e.Type = $(this).val().toLowerCase(), t.setDataSourceQuery(e), t.load()
                    }).val(void 0 !== e.Type ? e.Type : ""), */

                   // $("#m_form_status, #m_form_type").selectpicker()
                };
                return {
                    init: function() {
                        t()
                    }
                }
            }();
            jQuery(document).ready(function() {
                DatatableRemoteAjaxDemo.init();
               // m_datatables.search("<?php //echo $result['MDist_TInvNUm']; ?>");
                //var t2 = $('.table_ejemplo').mDatatable();
            });






            /* date picker */
            var BootstrapDatepicker = function() {
                var t = function() {
                    $("#m_form_date").datepicker({
                        todayHighlight: !0,
                        orientation: "bottom left",
                        templates: {
                            leftArrow: '<i class="la la-angle-left"></i>',
                            rightArrow: '<i class="la la-angle-right"></i>'
                        },
                        autoclose: true,
                        /*format: "yyyy-mm-dd"*/
                        format: "mm/dd/yyyy",
                        setDate: new Date()
                    })
                };
                return {
                    init: function() {
                        t()
                    }
                }
            }();
            jQuery(document).ready(function() {
                BootstrapDatepicker.init()
            });

            /* select 2 */
            var Select2 = {
                init: function() {
                    $("#zone").select2();
                    $("#status").select2();
                    $("#driver").select2();
                    $("#type").select2();
                 /*   $("#driver_id").select2();
                    $("#zone").select2();
                    $("#model_branch_id").select2();*/
                }
            };
            jQuery(document).ready(function() {
                Select2.init()
            });


   /*$(document).ready(function(){

            $('#date').datepicker({
                time: false,
                clearButton: true
            });

     $("#m_form_search").on("keyup", function(e) {

        setTimeout(function(){
                    // var montoBalance = $(".montoBalance").val();
          var montoBalance = $("span.balance").text();
          var simboloMoneda = $("span.simboloMoneda").text("$ ");

          var exchange_rate = $(".exchange_rate").val();
          //alert(exchange_rate);
          var exchangeBalance =  parseFloat(montoBalance) * parseFloat(exchange_rate);

 /*         console.log('montoBalance', montoBalance);
          console.log('exchange_rate', exchange_rate);*/
     // var exchangeBalance = parseFloat(montoBalance) * parseFloat(exchange_rate);
         /* $('span.exchange_balance').text( exchangeBalance);
        }, 1500);

      });

     $(".m_datatable").css("display", "none");
     $(".table_ejemplo").css("display", "block");
     $('.btnTran').attr('disabled', 'disabled');

     $("#m_form_search").on("keyup", function(e) {
       if ($(this).val() == "" ) {
     // console.log("AA");
          $(".table_ejemplo").css("display", "block");
          $(".m_datatable").css("display", "none");
           $('.btnTran').attr('disabled', 'disabled');

       }else if($(this).val() != ""){
        $(".m_datatable").css("display", "block");
        $(".table_ejemplo").css("display", "none");
        /*$(".table_ejemplo .m-datatable__pager m-datatable--paging-loaded clearfix").css("display", "none");*/

        /*$('.btnTran').attr('disabled', false);

       }

     });
   });*/



            function delete_batch(id)
            {
                swal({
                    title: "<?php echo $this->lang->line('label_are_you_sure') ?>",
                    text: "<?php echo $this->lang->line('label_you_want_to_delete_pickup') ?>",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "<?php echo $this->lang->line('label_confirm') ?>",
                }).then(function () {
                    $.ajax({
                        url:  "<?php echo base_url(); ?>company/batch_distribution/delete_batch/"+id,
                        type: "GET",
                        success: function(data)
                        {
                            //$('#user_table').bootstrapTable('refresh');
                            //$(".m_datatable").mDatatable().ajax.reload();
                            //DatatableRemoteAjaxDemo.init();
                            m_datatables.reload();
                        },
                            error: function(jqXHR, textStatus, errorThrown){
                        },
                            complete: function(){
                        }
                    }); // END OF AJAX CALL

                });
            }

            $(document).on('change','.chk_delivery',function(){
                //debugger;
                var p = new Array;

                idValue = $(this).val();

                if($(this).attr('name') == 'chk'){
                   /* $(".chk_status").each(function(e){
                        if($(this).data('id') != undefined){
                        p.push($(this).data('id'));
                        }
                    })*/

                    var data = {idStatus:idValue,id:p,status:$('.chk_delivery').is(':checked') ? '1' : '0',type:'status'};
                }else{
                    var data = {idStatus:idValue,id:[$(this).data('id')],status:$(this).is(':checked') ? '1' : '0',type:'status'};
                }

                var url = SITE_URL+'company/batch_distribution/update_status';

                toastr.success("Guardado Exitosamente");
                   // alert("response");
                ajaxCall(url, data, function(response){
                    //m_datatables.reload();
                    //console.log(response);
                    return false;


                });


            });

            $(document).on('change','.chk_paid',function(){
                //debugger;
                var p = new Array;

                idValue = $(this).val();

                if($(this).attr('name') == 'chk'){
                   /* $(".chk_status").each(function(e){
                        if($(this).data('id') != undefined){
                        p.push($(this).data('id'));
                        }
                    })*/

                    var data = {idPaid:idValue,id:p,checkedPaid:$('.chk_paid').is(':checked') ? '1' : '0',type:'checkedPaid'};
                }else{
                    var data = {idPaid:idValue,id:[$(this).data('id')],checkedPaid:$(this).is(':checked') ? '1' : '0',type:'checkedPaid'};
                }

                var url = SITE_URL+'company/batch_distribution/update_status_paid';

                toastr.success("Guardado Exitosamente");
                   // alert("response");
                ajaxCall(url, data, function(response){
                    //m_datatables.reload();
                    //console.log(response);
                    return false;


                });


            });












</script>


















<!-- ------------------------------------------------------------------------------------------ -->





