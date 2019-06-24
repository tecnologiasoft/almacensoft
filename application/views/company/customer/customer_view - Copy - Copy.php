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
											<i class="m-menu__link-icon flaticon-users-1"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											<?php echo $this->lang->line('label_customer'); ?>
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="la la-download"></i> Export
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__section kt-nav__section--first">
																<span class="kt-nav__section-text">Choose an option</span>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-print"></i>
																	<span class="kt-nav__link-text">Print</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-copy"></i>
																	<span class="kt-nav__link-text">Copy</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-excel-o"></i>
																	<span class="kt-nav__link-text">Excel</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-text-o"></i>
																	<span class="kt-nav__link-text">CSV</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon la la-file-pdf-o"></i>
																	<span class="kt-nav__link-text">PDF</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
												&nbsp;
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_customer_model">
												  <?php echo $this->lang->line('title_add_new_customer'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="customer">
										<thead>
											<tr>
												<th>Name</th>
												<th>Address1</th>
												<th>Telephone</th>
												<th>Cellphone</th>
												<th>balance</th>
												<th>Action</th>

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
	#new_customer_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */

  .pac-container{
    z-index: 99999999999999 !important;
  }
</style>

<!-- Modal -->
<div class="modal fade" id="new_customer_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormCustomer" role="form" name="FormCustomer" class="kt-form kt-form--label-right">
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
									<label for="example-text-input" class="col-4 col-form-label">Customer ID: </label>
									<div class="col-8">
										<input class="form-control" type="text" name="customer_id" value="<?php echo $next_id; ?>" id="customer_id" readonly>
										<input class="form-control" type="text" name="cref" value="<?php echo  $cref->Cust_ID; ?>" id="cref" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">Company: </label>
									<div class="col-8">
										<input class="form-control" name="company_name" type="text" value="" id="company_name" placeholder="Company">
									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label"><span id="astric">*</span> First Name: </label>
									<div class="col-8">
										<input class="form-control" name="fname" type="text" value="" id="fname" placeholder="First Name">
									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label"><span id="astric">*</span> Last Name: </label>
									<div class="col-8">
										<input class="form-control" name="lname" type="text" value="" id="lname" placeholder="Last Name">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line1" class="col-4 col-form-label"><span id="astric">*</span> Address: </label>
									<div class="col-8">
										<input class="form-control" name="address_line1" type="text" value="" id="address" placeholder="Address">
									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"><span id="astric">*</span> Apartment: </label>
									<div class="col-8">
										<input class="form-control" name="apartment" type="text" value="" id="apartment" placeholder="Apartment">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line2" class="col-4 col-form-label"> Address: </label>
									<div class="col-8">
										<input class="form-control" name="address_line2" type="text" value="" id="address_line2" placeholder="Address">
									</div>
								</div>

								<div class="form-group row">
									<label for="city" class="col-4 col-form-label"><span id="astric">*</span> City: </label>
									<div class="col-8">
										 <input type="text" class="form-control m-input" name="city" id="locality" placeholder="Enter city" value="" readonly>
									</div>
								</div>

								<div class="form-group row">
									<label for="state" class="col-4 col-form-label"><span id="astric">*</span> State: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="state" id="administrative_area_level_1" placeholder="Enter state" value="" readonly >
									</div>
								</div>
								<div class="form-group row">
									<label for="zipcode" class="col-4 col-form-label"> Zipcode: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zipcode" id="postal_code" placeholder="Enter zipcode" value="" readonly >
									</div>
								</div>
								<div class="form-group row">
									<label for="branch" class="col-4 col-form-label"><span id="astric">*</span> Branch: </label>
									<div class="col-8">
                                        <select class="form-control kt-selectpicker" name="branch" id="branch">
                                        	 <option value="">Seleccione...</option>
                                        	<?php foreach ($branch_list->result() as $branch): ?>
													<option value="<?php echo $branch->id ?>">
                                                    <?php echo $branch->name ?></option>
                                        	<?php endforeach ?>

										</select>
									</div>
								</div>

					        </div>
					</div>
					<div class="col-sm-6">
							<div class="kt-portlet__body">

								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label">
										<span id="astric">*</span> Telephone Number: </label>
									<div class="col-8">
										<input class="form-control" name="telephone_number" type="text" value="" id="telephone_number" placeholder="Telephone Number">
									</div>
								</div>
								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"><span id="astric">*</span> Cellphone Number: </label>
									<div class="col-8">
										<input class="form-control" name="cellphone_number" type="text" value="" id="cellphone_number" placeholder="Cellphone Number">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label">Email: </label>
									<div class="col-8">
										<input class="form-control" name="email" type="text" value="" id="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<label for="website" class="col-4 col-form-label">Website: </label>
									<div class="col-8">
										<input class="form-control" name="website" type="text" value="" id="website" placeholder="Website">
									</div>
								</div>
								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label">License ID: </label>
									<div class="col-8">
										<input class="form-control" name="lic_id" type="text" value="" id="lic_id" placeholder="license Id">
									</div>
								</div>
								<div class="form-group row">
									<label for="upload photo" class="col-4 col-form-label">License Picture: </label>
									<div class="col-8">
										<input type="file" class="form-control m-input" name="lic_picture" id="lic_picture" accept="image/*" data-show-preview="false" data-show-upload="false" data-show-caption="true" data-msg-placeholder="License Picture">
									</div>
								</div>


                                <div class="form-group row">
									<label for="agent_code" class="col-4 col-form-label">Agent Code: </label>
									<div class="col-8">
										<input class="form-control" name="agent_code" type="text" value="" id="agent_code" placeholder="Agent Code">
									</div>
								</div>
								<div class="form-group row">
									<label for="password" class="col-4 col-form-label">Password: </label>
									<div class="col-8">
										<input class="form-control" name="password" type="password" value="" id="password" placeholder="Password">
									</div>
								</div>

								<div class="form-group row">
										<label for="language" class="col-4 col-form-label"><span id="astric">*</span> Language: </label>
										<div class="kt-radio-inline">
											<label class="kt-radio">
												<input type="radio" name="radio2"> English
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="radio2"> Español
												<span></span>
											</label>
										</div>
									</div>
					</div>
				</div>
				 <input type="hidden" id="idCustomer" name="idCustomer" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="saveCustomer" id="saveCustomer" class="btn btn-success saveCustomer">Guardar</button>
      </div>
    </div>
		    </form>
  </div>
</div>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
         <!-- script file for File input -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>

<!-- google maps api -->

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableCustomer;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#customer');

		// begin first table
		tableCustomer = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getCustomer',
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'name'},
				{data: 'address_line1'},
				{data: 'telephone_number'},
				{data: 'cellphone_number'},
				{data: 'balance'},
				//{data: 'Actions', responsivePriority: -1},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_customer' data-toggle='modal' data-target='#new_customer_model'  value=" + datos.Cust_ID + "  title='Editar' role='button' data-id=\"" + datos.Cust_ID + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.Cust_ID + " onclick='delete_registro(\"" + datos.Cust_ID + "\")' title='Editar' role='button' data-id=\"" + datos.Cust_ID + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

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

		$(document).ready(function($) {

                $("#lic_picture").fileinput({
                    'showUpload':false,
                    'previewFileType': "image",
                    'browseClass': "btn btn-success",
                    'browseLabel': "Pick Image",
                    'browseIcon': "<i class=\"la la-file-image-o \"></i> ",
                    'removeClass': "btn btn-danger",
                    'removeLabel': "Delete",
                    'removeIcon': "<i class=\"la la-trash \"></i> ",
                });


      $(document).on('click', '.saveCustomer', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Customer_validate',
                data: $("#FormCustomer").serialize(),
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


	            var componentForm = {
                locality: 'long_name', // city
                administrative_area_level_1: 'long_name', // State
                postal_code: 'short_name' // Zip code
              };

            /*geocomplete*/
            $("#address").geocomplete().bind("geocode:result", function(event, result){
                //console.log(result.address_components);

                for (var component in componentForm) {
                  document.getElementById(component).value = '';
                  document.getElementById(component).disabled = false;
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