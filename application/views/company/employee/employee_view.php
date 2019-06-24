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
											<i class="far fa-address-book" style="color: #265791;"></i>
										</span>
										<div class="col-sm-4">
											<h3 class="kt-portlet__head-title" style="color: #265791;">
												 <?php echo $this->lang->line('employee_list'); ?>
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_employee_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('add_employee'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="employee">
										<thead>
											<tr>
												<th><?php echo $this->lang->line('label_name'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_telephone'); ?></th>
												<th><?php echo $this->lang->line('label_cellphone'); ?></th>

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
	#new_employee_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
 #employee_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
 .astric{ color: red!important; }
</style>

<!-- Modal -->
<div class="modal fade" id="new_employee_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content  pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;"><i class="far fa-address-book" style="color: #265791;"></i> <?php echo $this->lang->line('add_new_employee'); ?></h5>
        <button type="button" class="close btnEmployeeCancel" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormEmployee" role="form" name="FormEmployee" class="kt-form kt-form--label-right">
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
										<label for="example-text-input" class="col-4 col-form-label"> <?php echo $this->lang->line('emp_code').'#'; ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="item_number" id="item_number" placeholder="<?php echo $this->lang->line('label_item_number'); ?>" value="<?php echo $max_value; ?>" maxlength="128" readonly>
                                            <input type="text" name="item_number_hdn" class="form-control m-input" id="item_number_hdn" value="<?php echo  $cref->id; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="company_name" class="col-4 col-form-label"><span id="astric">*</span><?php echo $this->lang->line('label_first_name'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="first_name" id="first_name" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="" tabindex = "1">

										</div>
									</div>
									<div class="form-group row">
										<label for="fname" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_last_name'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="last_name" id="last_name" placeholder="<?php echo $this->lang->line('label_last_name'); ?>" value="<?=$result['last_name']?$result['last_name']:set_value('last_name')?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="lname" class="col-4 col-form-label">
											<?php echo $this->lang->line('field_address_line_1'); ?>
										</label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="address1" id="address" placeholder="<?php echo $this->lang->line('field_address_line_1'); ?>" >

										</div>
									</div>

									<div class="form-group row">
										<label for="address_line1" class="col-4 col-form-label"> <?php echo $this->lang->line('field_address_line_2'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="address2" id="address2" placeholder="<?php echo $this->lang->line('field_address_line_2'); ?>" >

										</div>
									</div>

									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_city'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="city" id="locality" placeholder="<?php echo $this->lang->line('label_city'); ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_state'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="state" id="administrative_area_level_1" placeholder="<?php echo $this->lang->line('label_state'); ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"> <?php echo $this->lang->line('label_zipcode'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="zipcode" id="postal_code" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_telephone'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="telephone" id="telephone" placeholder="<?php echo $this->lang->line('label_telephone'); ?>">
										</div>
									</div>

									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_cellphone'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="cel" id="cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone'); ?>">
										</div>
									</div>

						        </div>
						</div>
						<div class="col-sm-6">
								<div class="kt-portlet__body">


									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"><?php echo $this->lang->line('label_email'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="email" id="email" placeholder="<?php echo $this->lang->line('label_email'); ?>" maxlength="128" >
										</div>
									</div>
									<div class="form-group row">
										<label for="apartment" class="col-4 col-form-label"><?php echo $this->lang->line('label_country'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="country" id="country" placeholder="<?php echo $this->lang->line('label_country'); ?>">
										</div>
									</div>


									<div class="form-group row">
										<label for="telephone_number" class="col-4 col-form-label"> <?php echo $this->lang->line('label_branch'); ?>: </label>
										<div class="col-8">
	                                        <select class="form-control kt-selectpicker" name="branch" id="branch">
												<option>Mustard</option>
												<option>Ketchup</option>
												<option>Relish</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="telephone_number" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('field_warehouse'); ?>: </label>
										<div class="col-8">
										    <div class="kt-radio-inline">
												<label class="kt-radio">
													<input name="is_warehouse" value="1" type="radio" checked>
			                                       <?php echo $this->lang->line('label_yes'); ?>
			                                       <span></span>
												</label>
												<label class="kt-radio">
												   <input name="is_warehouse" value="0" type="radio">
			                                       <?php echo $this->lang->line('label_no'); ?>
			                                       <span></span>
												</label>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label for="cellphone_number" class="col-4 col-form-label"> <?php echo $this->lang->line('field_birthdate'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="dob" id="dob" placeholder="<?php echo $this->lang->line('field_birthdate'); ?>" value="<?=$result['dob']?$result['dob']:set_value('dob')?>">
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-4 col-form-label"><?php echo $this->lang->line('field_social_security'); ?>: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="social_security" id="social_security" placeholder="<?php echo $this->lang->line('field_social_security'); ?>">
										</div>
									</div>

						</div>
					</div>
					 <input type="hidden" id="idEmployee" name="idEmployee" value="" class="form-control">
                </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary btnEmployeeCancel" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveEmployee" id="saveEmployee" class="btn btn-success saveEmployee"><?php echo $this->lang->line('label_submit'); ?></button>
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

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
		var tableEmployee;
	'use strict';
	var KTDatatablesDataSourceAjaxClient = function() {

		var initTable1 = function() {
			var table = $('#employee');

			// begin first table
			tableEmployee = table.DataTable({
				responsive: true,
				ajax: {
					url: 'getEmployee',
					type: 'POST',
					data: {
						pagination: {
							perpage: 50,
						},
					},
				},
				columns: [
					{data: 'first_name'},
					{data: 'address1'},
					{data: 'tel'},
					{data: 'cel'},
					{
	                   data: function(datos) {
	                         var accion = "";
	                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_employee' data-toggle='modal' data-target='#new_employee_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

	                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_registro(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


	                       return accion;
	                    },
					},
				],

			});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableEmployee.search($this.val()).draw();
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
        $("#telephone").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

        $("#cellphone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

		$('.btnEmployeeCancel').click(function(){
			$('#FormEmployee')[0].reset();
		});

		$(document).ready(function($) {


	      $(document).on('click', '.saveEmployee', function(e){

	                  //alert("hola");
	               //console.log('serialized data', $("#AddDiplo").serialize());
	                $.ajax({
	                url: 'Employee_validate',
	                data: $("#FormEmployee").serialize(),
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



          $(document).on('click', '.edit_employee', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('EmployeeController/edit_employee')?>/" + $data.id,
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

              $('[name="idEmployee"]').val(data.id);
             // $('[name="customer_id"]').val(data.Cust_ID);
              $('[name="fname"]').val(data.fname);
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
            url : "<?php echo site_url('EmployeeController/deleteEmployee')?>/"+id,
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
	    tableEmployee.ajax.reload(null,false); //reload datatable ajax
	}


            var componentForm = {
                //street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name', // city
                administrative_area_level_1: 'long_name', // State
                address: 'long_name', // address
                country: 'long_name', // country
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