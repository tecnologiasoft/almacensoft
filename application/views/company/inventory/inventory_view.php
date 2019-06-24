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
											<i class="fas fa-dolly-flatbed" style="color: #265791;"></i>
										</span>
										<div class="col-sm-4">
											<h3 class="kt-portlet__head-title" style="color: #265791;">
												 <?php echo $this->lang->line('title_inventory_list'); ?>
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_inventory_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_inventory'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="inventory">
										<thead>
											<tr>
												<th><?php echo $this->lang->line('label_item_number'); ?></th>
												<th><?php echo $this->lang->line('label_description'); ?></th>
												<th><?php echo $this->lang->line('label_price'); ?></th>
												<th><?php echo $this->lang->line('label_cost'); ?></th>
												<th><?php echo $this->lang->line('label_type'); ?></th>
												<th><?php echo $this->lang->line('label_qty'); ?></th>
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
	#new_inventory_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
 #inventory_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
</style>

<!-- Modal -->
<div class="modal fade" id="new_inventory_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;"> <i class="fas fa-dolly-flatbed" style="color: #265791;"></i> <?php echo $this->lang->line('title_add_new_inventory'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormInventory" role="form" name="FormInventory" class="kt-form kt-form--label-right">
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
									<label for="example-text-input" class="col-4 col-form-label">* <?php echo $this->lang->line('label_item').'#'; ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="item_number" id="item_number" placeholder="<?php echo $this->lang->line('label_item_number'); ?>" value="<?php echo $max_value; ?>" maxlength="128" readonly>
                                          <input type="hidden" name="item_number_hdn" id="item_number_hdn" value="<?php echo $max_value; ?>">
                                          <input class="form-control" type="text" name="cref" value="<?php echo  $cref->id; ?>" id="cref" readonly>

									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">* <?php echo $this->lang->line('label_description'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="description" id="description" placeholder="<?php echo $this->lang->line('label_description'); ?>" value="" tabindex = "1">

									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('field_weight_price_from'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="weight_price_from" id="field_weight_price_from" placeholder="<?php echo $this->lang->line('field_weight_price_from'); ?>" tabindex = "3">

									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<?php echo $this->lang->line('field_weight_price_to'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="weight_price_to" id="weight_price_to" placeholder="<?php echo $this->lang->line('field_weight_price_to'); ?>" value="" tabindex = "4">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line1" class="col-4 col-form-label"> <?php echo $this->lang->line('label_volume_price'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="volume_price" id="volume_price" placeholder="<?php echo $this->lang->line('label_volume_price'); ?>" tabindex = "5">

									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('field_factor_of_volume'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="factor_of_volume" id="factor_of_volume" placeholder="<?php echo $this->lang->line('field_factor_of_volume'); ?>" tabindex = "6">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line2" class="col-4 col-form-label"> <?php echo $this->lang->line('label_has_insurane'); ?>: </label>
									<div class="col-8">

									<div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="has_insurane" value="Yes" type="radio" checked="" tabindex = "7">
	                                             <?php echo $this->lang->line('label_yes'); ?>
	                                             <span></span>
											</label>
											<label class="kt-radio">
												<input name="has_insurane" value="No" type="radio" tabindex = "8">
	                                             <?php echo $this->lang->line('label_no'); ?>
	                                             <span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="city" class="col-4 col-form-label"><?php echo $this->lang->line('label_calculate_price'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="calculate_price" id="calculate_price" placeholder="<?php echo $this->lang->line('label_calculate_price'); ?>" maxlength="64" tabindex = "9">
									</div>
								</div>

								<div class="form-group row">
									<label for="state" class="col-4 col-form-label"><?php echo $this->lang->line('label_insurance_percentage'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="insurance_percentage" id="insurance_percentage" placeholder="<?php echo $this->lang->line('label_insurance_percentage'); ?>"  maxlength="64" tabindex = "10" >
									</div>
								</div>

					        </div>
					</div>
					<div class="col-sm-6">
							<div class="kt-portlet__body">

								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"> <?php echo $this->lang->line('label_air'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="air" value="Yes" type="radio" checked="" tabindex = "12">
	                                             <?php echo $this->lang->line('label_yes'); ?>
	                                             <span></span>
											</label>
											<label class="kt-radio">
												<input name="air" value="No" type="radio" tabindex = "13">
                                               <?php echo $this->lang->line('label_no'); ?>
                                               <span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_type'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="type" value="Service" type="radio" checked="" tabindex = "14">
                                                <?php echo $this->lang->line('label_service'); ?>
                                                <span></span>
											</label>
											<label class="kt-radio">
												<input name="type" value="Inventory" type="radio" tabindex = "15">
                                                <?php echo $this->lang->line('label_inventory'); ?>
                                                <span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"> <?php echo $this->lang->line('label_price'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="price" id="price" placeholder="<?php echo $this->lang->line('label_price'); ?>" tabindex = "16">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label"><?php echo $this->lang->line('label_cost'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="cost" id="cost" placeholder="<?php echo $this->lang->line('label_cost'); ?>" tabindex = "17">
									</div>
								</div>
								<div class="form-group row">
									<label for="website" class="col-4 col-form-label"><?php echo $this->lang->line('label_recorder_point'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="recorder_point" id="recorder_point" placeholder="<?php echo $this->lang->line('label_recorder_point'); ?>" tabindex = "18">
									</div>
								</div>
								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label"><?php echo $this->lang->line('label_qt_oh'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="qty" id="qty" placeholder="<?php echo $this->lang->line('label_qt_oh'); ?>" tabindex = "19">
									</div>
								</div>
								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"> <?php echo $this->lang->line('label_driver_inventory'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="driver_inventory" value="Yes" type="radio" checked="" tabindex = "20">
                                                <?php echo $this->lang->line('label_yes'); ?>
                                                <span></span>
											</label>
											<label class="kt-radio">
												<input name="driver_inventory" value="No" type="radio" tabindex = "21" >
                                             <?php echo $this->lang->line('label_no'); ?>
                                             <span></span>
											</label>
										</div>
									</div>
								</div>


                                <div class="form-group row">
									<label for="agent_code" class="col-4 col-form-label"><?php echo $this->lang->line('label_insurance_price'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="insurance_price" id="insurance_price" placeholder="<?php echo $this->lang->line('label_insurance_price'); ?>" maxlength="64" tabindex = "23">
									</div>
								</div>



					</div>
				</div>
				 <input type="hidden" id="idInventory" name="idInventory" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveInventory" id="saveInventory" class="btn btn-success saveInventory"><?php echo $this->lang->line('label_submit'); ?></button>
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
 <script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableInventory;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#inventory');

		// begin first table
		tableInventory = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getInventory',
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'item_number'},
				{data: 'description'},
				{data: 'price'},
				{data: 'cost'},
				{data: 'type'},
				{data: 'qty'},
				//{data: 'Actions', responsivePriority: -1},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_inventory' data-toggle='modal' data-target='#new_inventory_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_inventory(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableInventory.search($this.val()).draw();
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



      $(document).on('click', '.saveInventory', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Inventory_validate',
                data: $("#FormInventory").serialize(),
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



          $(document).on('click', '.edit_inventory', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('InventoryController/edit_Inventory')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idInventory"]').val(data.id);
	              $('[name="item_number_hdn"]').val(data.item_number);
	              $('[name="description"]').val(data.description);
	              $('[name="price"]').val(data.price);
	              $('[name="cost"]').val(data.cost);
	              $('[name="type"]').val(data.type);
	              $('[name="qty"]').val(data.qty);
	              $('[name="recorder_point"]').val(data.recorder_point);
	              $('[name="driver_inventory"]').val(data.driver_inventory);
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



            function delete_inventory(id)
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('InventoryController/delete_inventory')?>/"+id,
                        type: "POST",
                        dataType: "JSON",
                        success: function(data)
                        {
                            //$('#user_table').bootstrapTable('refresh');
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
    tableInventory.ajax.reload(null,false); //reload datatable ajax
}

</script>

<!-- https://embarquesoft.net/company/customer -->