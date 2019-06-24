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
											<i class="fas fa-list" style="color: #265791;"></i>
										</span>
										<div class="col-sm-4">
											<h3 class="kt-portlet__head-title" style="color: #265791;">
												 <?php echo $this->lang->line('title_agent_list'); ?>
											</h3>											
										</div>
	                                        <div class="col-md-8 kt-margin-b-20-tablet-and-mobile">
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_agent_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_agent'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="AgentMaintenace">
										<thead>
											<tr>
												<th>#</th>
												<th><?php echo $this->lang->line('label_name'); ?></th>
												<th><?php echo $this->lang->line('label_email'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_telephone'); ?></th>
												<th><?php echo $this->lang->line('label_cellphone'); ?></th>
												<th><?php echo $this->lang->line('label_agent_company'); ?></th>
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
  .pac-container{
    z-index: 99999999999999 !important;
    height: 912px;
  }
	#new_agent_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
 #AgentMaintenace_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
</style>

<!-- Modal -->
<div class="modal fade" id="new_agent_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;"><i class="fas fa-list" style="color: #265791;"></i> <?php echo $this->lang->line('title_add_agent'); ?></h5>
        <button type="button" class="close btnAgentCancel" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormAgent" role="form" name="FormAgent" class="kt-form kt-form--label-right">
		    	<div class="row">
		    		<div class="col-sm-12">

                  <!-- <div class="validation-error"></div> -->
		    		</div>
                </div>
				<div class="row">
				<!--begin::Form-->
					<div class="col-sm-6">
							<div class="kt-portlet__body">
								<div class="form-group row">
									<label for="example-text-input" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_item').'#'; ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="item_number" id="item_number" value="<?php echo $max_value; ?>" placeholder="<?php echo $this->lang->line('label_item_number'); ?>" maxlength="128" readonly>
                                       <input type="hidden" name="item_number_hdn" id="item_number_hdn" value="<?php echo  $cref->id; ?>">
                                       
                                          <input class="form-control" type="text" name="cref" value="<?php echo  $cref->id; ?>" id="cref" readonly>
                                        
									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_agent_company'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="agent_company" id="agent_company" placeholder="<?php echo $this->lang->line('label_agent_company'); ?>"  maxlength="255" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label"><?php echo $this->lang->line('label_first_name'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="fname" id="fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="" maxlength="64" >
									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<span id="astric">*</span> <?php echo $this->lang->line('label_last_name'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="lname" id="lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?>" value="" maxlength="64">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line1" class="col-4 col-form-label"> <span id="astric">*</span> <?php echo $this->lang->line('label_address'); ?>: </label>
									<div class="col-8">
										

										<input type="text" class="form-control m-input" name="address" id="address" placeholder="<?php echo $this->lang->line('label_address'); ?>" required>
                                        <input type="hidden" name="latitude" id="latitude" value="<?php echo set_value('latitude'); ?>">
                                        <input type="hidden" name="longitude" id="longitude" value="<?php echo set_value('longitude'); ?>">

									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_address'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="address_2" id="address_2" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="" maxlength="256">
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_city'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="city" id="locality" placeholder="<?php echo $this->lang->line('label_city'); ?>" value="">
                                   
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_state'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="state" id="administrative_area_level_1" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="">
                                    
									</div>
								</div>
								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_zipcode'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zipcode" id="postal_code" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="" maxlength="64">
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_cellphone_number'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="cellphone_number" id="cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" value="" maxlength="16">
									</div>
								</div>

					        </div>
					</div>
					<div class="col-sm-6">
							<div class="kt-portlet__body">

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_telephone_number'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="telephone_number" id="telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="" maxlength="16">
									</div>
								</div>
								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"><?php echo $this->lang->line('label_email'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="email" id="email" placeholder="<?php echo $this->lang->line('label_email'); ?>" maxlength="128" >
									</div>
								</div>
								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_header'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="header" id="header" placeholder="<?php echo $this->lang->line('label_header'); ?>" value="" maxlength="255">
                                 
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_percentage'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="percentage" id="percentage" placeholder="<?php echo $this->lang->line('label_percentage'); ?>" value="" maxlength="255">
                                 
									</div>
								</div>
								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_agent_module'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												 <input name="agent_module" value="Yes" type="radio" checked = "checked">
		                                          <?=lang('label_yes')?>
		                                          <span></span>
											</label>
											<label class="kt-radio">
												<input name="agent_module" value="No" type="radio">
	                                            <?=lang('label_no')?>
	                                            <span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"> <span id="astric">*</span><?php echo $this->lang->line('label_comment'); ?>: </label>
									<div class="col-8">
										<textarea class="form-control m-input" name="comment" id="comment" placeholder="<?=$this->lang->line('label_comment')?>"><?php echo set_value('comment')?set_value('comment'):$result['comment']; ?></textarea>
									</div>
								</div>

					</div>
				</div>
				 <input type="hidden" id="idAgent" name="idAgent" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary btnAgentCancel" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveAgent" id="saveAgent" class="btn btn-success saveAgent"><?php echo $this->lang->line('label_submit'); ?></button>
      </div>
    </div>
		    </form>
  </div>
</div>
<style type="text/css" media="screen">
	.dataTables_filter {
	display: none;
	}
</style>

<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableAgent;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#AgentMaintenace');

		// begin first table
		tableAgent = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getAgent',
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'id'},
				{data: 'fname'},
				{data: 'email'},
				{data: 'address_1'},
				{data: 'telephone'},
				{data: 'cellphone'},
				{data: 'agent_company'},
				//{data: 'Actions', responsivePriority: -1},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_agent' data-toggle='modal' data-target='#new_agent_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_agent(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableAgent.search($this.val()).draw();
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

        $("#telephone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

        $("#cellphone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

		$('.btnAgentCancel').click(function(){
			$('#FormAgent')[0].reset();
		});

		$(document).ready(function($) {

		/*$("#FormCustomer").validate({
			rules:{
		company_name:{
		required:true
			}
		}
		});*/

      $(document).on('click', '.saveAgent', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'agent_validate',
                data: $("#FormAgent").serialize(),
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



          $(document).on('click', '.edit_agent', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('AgentMaintenanceController/edit_agent')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idAgent"]').val(data.id);
	              $('[name="agent_company"]').val(data.agent_company);
	              $('[name="item_number_hdn"]').val(data.item_number);
	              $('[name="description"]').val(data.description);
	              $('[name="price"]').val(data.price);
	              $('[name="cost"]').val(data.cost);
	              $('[name="type"]').val(data.type);
	              $('[name="qty"]').val(data.qty);
	              $('[name="recorder_point"]').val(data.recorder_point);
	              $('[name="driver_agent"]').val(data.driver_agent);
	              $('[name="air"]').val(data.air);
	              $('[name="volume_price"]').val(data.zipcode);
	              $('[name="has_insurane"]').val(data.has_insurane);
	              $('[name="insurance_price"]').val(data.insurance_price);
	              $('[name="insurance_percentage"]').val(data.insurance_percentage);
	              $('[name="calculate_price"]').val(data.calculate_price);
	              $('[name="scanner_type"]').val(data.scanner_type);
	              $('[name="weight_price_from"]').val(data.weight_price_from);
	              $('[name="weight_price_to"]').val(data.weight_price_to);
	              $('[name="factor_of_volume"]').val(data.factor_of_volume);
	           
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


            
            function delete_agent(id) 
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('AgentMaintenanceController/delete_agent')?>/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            //$('#agent_table').bootstrapTable('refresh');
                            //$(".m_datatable").mDatatable().ajax.reload();
                            //DatatableRemoteAjaxDemo.init();
                            reload_table();
                        },
                            error: function(jqXHR, textStatus, errorThrown){                
                        },
                            complete: function(){
                        }
                    }); // END OF AJAX CALL
                    
                }
            }


function reload_table()
{
    tableAgent.ajax.reload(null,false); //reload datatable ajax
}


            var componentForm = {
                    //country: 'long_name', // country
	                locality: 'long_name', // city
	                administrative_area_level_1: 'long_name', // State
	                postal_code: 'short_name' // Zip code
              };
            /*geocomplete*/
            $("#address").geocomplete().bind("geocode:result", function(event, result){
                //console.log(result.address_components);

                    for (var i = 0; i < result.address_components.length; i++) {
                        var addressType = result.address_components[i].types[0];
                        if (addressType == "address") {
                            $("#address").val(result.address_components[i]['long_name']);
                        }
                    }


                for (var i = 0; i < result.address_components.length; i++) {
                  var addressType = result.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = result.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }

                /*$("#latitude").val(result.geometry.location.lat().toFixed(8));
                $("#longitude").val(result.geometry.location.lng().toFixed(8));*/
            });

</script>

<!-- https://embarquesoft.net/company/customer -->