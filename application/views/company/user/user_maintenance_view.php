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
											<i class="fas fa-users" style="color: #265791;"></i>
										</span>
										<div class="col-sm-4">
											<h3 class="kt-portlet__head-title" style="color: #265791;">
												 <?php echo $this->lang->line('title_user_list'); ?>
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_user_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_user'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="UserMaintenace">
										<thead>
											<tr>
												<th>#</th>
												<th><?php echo $this->lang->line('label_name'); ?></th>
												<th><?php echo $this->lang->line('label_user_name'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_telephone'); ?></th>
												<th><?php echo $this->lang->line('label_cellphone'); ?></th>
												<th><?php echo $this->lang->line('label_container'); ?></th>
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
	#new_user_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
 #UserMaintenace_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
</style>

<!-- Modal -->
<div class="modal fade" id="new_user_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;">
        	<i class="fas fa-user-tie" style="color: #265791;"></i>
        	<?php echo $this->lang->line('title_add_new_user'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormUser" role="form" name="FormUser" class="kt-form kt-form--label-right">
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
										<input type="text" class="form-control m-input" name="item_number" id="item_number" value="<?php echo $next_id; ?>" placeholder="<?php echo $this->lang->line('label_item_number'); ?>" readonly>
                                       <input type="text" class="form-control m-input" name="item_number_hdn" id="item_number_hdn" value="<?php echo  $cref->id; ?>" readonly>

									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">* <?php echo $this->lang->line('label_first_name'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="fname" id="fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>"  maxlength="64">

									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label"><?php echo $this->lang->line('label_last_name'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="lname" id="lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?>"  maxlength="64">

									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<?php echo $this->lang->line('label_address_line_1'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="address" id="address" placeholder="<?php echo $this->lang->line('label_address_line_1'); ?>" value="<?php echo set_value('address')?set_value('address'):$result['address'] ?>">
                                        <input type="hidden" name="latitude" id="latitude" value="<?php echo set_value('latitude'); ?>">
                                        <input type="hidden" name="longitude" id="longitude" value="<?php echo set_value('longitude'); ?>">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line1" class="col-4 col-form-label"> <?php echo $this->lang->line('label_address_line_2'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="address_line_2" id="address_line_2" placeholder="<?php echo $this->lang->line('label_address_line_2'); ?>" maxlength="256">

									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_city'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="city" id="city" placeholder="<?php echo $this->lang->line('label_city'); ?>" value="<?php echo set_value('city')?set_value('city'):$result['city']; ?>" maxlength="64" >
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_state'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="state" id="state" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="<?php echo set_value('state')?set_value('state'):$result['state']; ?>" maxlength="64">
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_zipcode'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zipcode" id="zipcode" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="<?php echo set_value('zipcode')?set_value('zipcode'):$result['zipcode']; ?>" maxlength="64">
									</div>
								</div>
								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_cellphone_number'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="cellphone_number" id="cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" maxlength="16">
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_telephone_number'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="telephone_number" id="telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" maxlength="16">
									</div>
								</div>

					        </div>
					</div>
					<div class="col-sm-6">
							<div class="kt-portlet__body">

							<div class="form-group row">
								<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_email'); ?>: </label>
								<div class="col-8">
									<input type="email" class="form-control m-input" name="email" id="email" placeholder="<?php echo $this->lang->line('label_email'); ?>"  maxlength="128">
								</div>
							</div>

							<div class="form-group row">
									<label for="label_country" class="col-4 col-form-label"> <?php echo $this->lang->line('label_country'); ?>: </label>
									<div class="col-8">
                                        <select class="form-control kt-selectpicker" name="branch" id="branch">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
										</select>
									</div>
							</div>

							<div class="form-group row">
									<label for="label_country" class="col-4 col-form-label"> <span id="astric">*</span><?php echo $this->lang->line('label_branch'); ?>: </label>
									<div class="col-8">
                                        <select class="form-control kt-selectpicker" name="branch" id="branch">
													<option>Mustard</option>
													<option>Ketchup</option>
													<option>Relish</option>
										</select>
									</div>
							</div>

								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_driver'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="driver" value="Yes" type="radio"
		                                       <?php echo $result['driver'] == "Yes" ? "checked":"" ?>>
		                                       <?php echo $this->lang->line('label_yes'); ?>
		                                       <span></span>
											</label>
											<label class="kt-radio">
												<input name="driver" value="No" type="radio"
		                                       <?php echo ($result['driver'] == "No" ? "checked":(isset($result['driver']) ? "":"checked")); ?>>
		                                       <?php echo $this->lang->line('label_no'); ?>
		                                       <span></span>
											</label>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_warehouse'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="warehouse" value="Yes" type="radio"
		                                       <?php echo $result['warehouse'] == "Yes" ? "checked":"" ?>>
		                                       <?php echo $this->lang->line('label_yes'); ?>
		                                       <span></span>
											</label>
											<label class="kt-radio">
												<input name="warehouse" value="No" type="radio"
		                                       <?php echo ($result['warehouse'] == "No" ? "checked":(isset($result['warehouse']) ? "":"checked")); ?>>
		                                       <?php echo $this->lang->line('label_no'); ?>
                                                <span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"> <span id="astric">*</span><?php echo $this->lang->line('label_username'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="username" id="username" placeholder="<?php echo $this->lang->line('label_username'); ?>" value="<?php echo set_value('username')?set_value('username'):$result['username']; ?>" maxlength="64" >
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label"><?php echo $this->lang->line('label_password'); ?>: </label>
									<div class="col-8">
										<input type="password" class="form-control m-input" name="password" id="password" placeholder="<?php echo $this->lang->line('label_password'); ?>" value="<?php echo set_value('password'); ?>" maxlength="64" >
									</div>
								</div>
								<div class="form-group row">
									<label for="website" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_start_time'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="start_time" id="start_time" placeholder="<?php echo $this->lang->line('label_start_time'); ?>" value="<?php echo set_value('start_time')?set_value('start_time'):$result['start_time']; ?>" maxlength="16">
									</div>
								</div>
								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label"><?php echo $this->lang->line('label_end_time'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="end_time" id="end_time" placeholder="<?php echo $this->lang->line('label_end_time'); ?>" value="<?php echo set_value('end_time'); ?>" maxlength="16">
									</div>
								</div>

								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_ip'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="ip" id="ip" placeholder="<?php echo $this->lang->line('label_ip'); ?>" maxlength="16">
									</div>
								</div>




					</div>
				</div>
				 <input type="hidden" id="idUser" name="idUser" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveUser" id="saveUser" class="btn btn-success saveUser"><i class="far fa-save"></i> <?php echo $this->lang->line('label_submit'); ?></button>
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
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script> -->

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableUser;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#UserMaintenace');

		// begin first table
		tableUser = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getUser',
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
				{data: 'user_name'},
				{data: 'address'},
				{data: 'telephone_number'},
				{data: 'cellphone_number'},
				{data: 'container'},
				//{data: 'Actions', responsivePriority: -1},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_user' data-toggle='modal' data-target='#new_user_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_user(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableUser.search($this.val()).draw();
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



      $(document).on('click', '.saveUser', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'user_validate',
                data: $("#FormUser").serialize(),
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



          $(document).on('click', '.edit_user', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('userController/edit_user')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="iduser"]').val(data.id);
	              $('[name="item_number_hdn"]').val(data.item_number);
	              $('[name="description"]').val(data.description);
	              $('[name="price"]').val(data.price);
	              $('[name="cost"]').val(data.cost);
	              $('[name="type"]').val(data.type);
	              $('[name="qty"]').val(data.qty);
	              $('[name="recorder_point"]').val(data.recorder_point);
	              $('[name="driver_user"]').val(data.driver_user);
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



            function delete_user(id)
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('UserMaintenanceController/delete_user')?>/"+id,
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
    tableUser.ajax.reload(null,false); //reload datatable ajax
}

</script>

<!-- https://embarquesoft.net/company/customer -->