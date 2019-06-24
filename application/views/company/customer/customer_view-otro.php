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

                               <!--begin: Search Form -->
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-form__group kt-form__group--inline">
															<div class="kt-form__label">
																<label>Status:</label>
															</div>
															<div class="kt-form__control">
																<select class="form-control bootstrap-select" id="kt_form_status">
																	<option value="">All</option>
																	<option value="1">Yes</option>
																	<option value="2">No</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
												<a href="#" class="btn btn-default kt-hidden">
													<i class="la la-cart-plus"></i> New Order
												</a>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->

								</div>

								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
									<div class="kt-datatable" id="json_data"></div>

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

"use strict";
// Class definition

var KTDatatableJsonRemoteDemo = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatable = $('.kt-datatable').KTDatatable({


			// datasource definition
			  data: {
			    type: 'remote',
			    source: {
			      read: {
			        url: 'getCustomer',
			        map: function(raw) {
			          // sample data mapping
			          var dataSet = raw;
			          if (typeof raw.data !== 'undefined') {
			            dataSet = raw.data;
			          }
			          return dataSet;
			        },
			      },
			    },
			    pageSize: 10,
			    serverPaging: true,
			    serverFiltering: true,
			    serverSorting: true,
			  },

				// layout definition
				  layout: {
				    scroll: false,
				    footer: false,
				  },

				  // column sorting
				  sortable: true,

				  pagination: true,

				  search: {
				    input: $('#generalSearch'),
				  },

			// columns definition
			columns: [
				{
                    field: "name",
                    title: "<?php echo $this->lang->line('label_name'); ?>",
				}, {
                    field: "address_line1",
                    title: "<?php echo $this->lang->line('label_address_1'); ?>", 
				},{
                    field: "telephone_number",
                    title: "<?php echo $this->lang->line('label_telephone'); ?>",
				},{
                    field: "cellphone_number",
                    title: "<?php echo $this->lang->line('label_cellphone'); ?>",
				},{
                    field: "balance",
                    title: "<?php echo $this->lang->line('label_balance'); ?>",
				},{
					field: 'is_active',
					title: 'is_active',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Yes', 'class': 'kt-badge--brand'},
							2: {'title': 'No', 'class': ' kt-badge--danger'},
				
						};
						//debugger;
						return '<span class="kt-badge ' + status[row.is_active].class + ' kt-badge--inline kt-badge--pill">' + status[row.is_active].title + '</span>';
					
					},
				}, {
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 110,
					autoHide: false,
					overflow: 'visible',
					template: function() {
						return '\
						<div class="dropdown">\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						  	</div>\
						</div>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
					},
				}],

		});

    $('#kt_form_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'is_active');
    //  debugger;
    });

// #column3_search is a <input type="text"> element
$('#myInput').on( 'keyup', function () {
    table.search( this.value ).draw();
} );

    $('#kt_form_status').selectpicker();

	};

	return {
		// public functions
		init: function () {
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	KTDatatableJsonRemoteDemo.init();
});


</script>

<!-- https://embarquesoft.net/company/customer -->