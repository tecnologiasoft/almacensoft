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
											<i class="m-menu__link-icon flaticon-users-1" style="color: #265791;"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											<?php echo $this->lang->line('label_customer'); ?>
										</h3>
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
												<button type="button" class="btn btn-primary new_customer" data-toggle="modal" data-target="#new_customer_model">
												  <i class="la la-plus"></i>
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
 #customer_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
  .pac-container{
    z-index: 99999999999999 !important;
    height: 912px;
  }
  /* .pac-containers{
    z-index: 9999999999999999999999 !important;
    height: 912px;
  } */
  #new_List_ship_to_model .modal-footer{margin-top: 50px;}
.swal2-modal{
    z-index:100000000!important;
}
</style>

<!-- Modal customer-->
<div class="modal fade" id="new_customer_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;"><i class="m-menu__link-icon flaticon-users-1" style="color: #265791;"></i> Add Customer </h5>
        <div class="col-4 ship_to">
        	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id="ship_to_model" data-target="#new_ship_to_model">
			  <?php echo $this->lang->line('label_ship_to'); ?>
			</button>
        </div>
        <button type="button" class="close btnCustomerCancel" data-dismiss="modal" aria-label="Close">
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
										<input class="form-control" type="hidden" name="cref" value="<?php echo  $cref->Cust_ID; ?>" id="cref" readonly>
										<input class="form-control" type="hidden" name="idCustomers" value="" id="idCustomers" readonly>
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
										<input class="form-control" name="address_line1" type="text" value="" id="country" placeholder="Address">
                                       <input type="hidden" name="latitude" id="latitude" value="">
                                       <input type="hidden" name="longitude" id="longitude" value="">
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
										 <input type="text" class="form-control m-input" name="city" id="locality" placeholder="Enter city" value="" >
									</div>
								</div>

								<div class="form-group row">
									<label for="state" class="col-4 col-form-label"><span id="astric">*</span> State: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="state" id="administrative_area_level_1" placeholder="Enter state" value="" >
									</div>
								</div>
								<div class="form-group row">
									<label for="zipcode" class="col-4 col-form-label"> Zipcode: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zipcode" id="postal_code" placeholder="Enter zipcode" value="" >
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
										<input class="form-control" name="website" type="text" value="" id="website" placeholder="http://">
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
										<div id="imgCliente"></div>
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
												<input type="radio" name="language" id="language_English" value="English" checked> English
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="language" id="language_Spanish" value="Spanish"> Español
												<span></span>
											</label>
										</div>
									</div>
					</div>
				</div>
				 <input type="hidden" id="idCustomer" name="idCustomer" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btnCustomerCancel" data-dismiss="modal">Close</button>
        <button type="submit" name="saveCustomer" id="saveCustomer" class="btn btn-success saveCustomer">Guardar</button>
      </div>
    </div>
		    </form>
  </div>
</div>


<!-- Modal Datatables List shipto-->
<div class="modal fade" id="new_ship_to_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
style="z-index: 999999999999!important;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List ship_to </h5>
        <div class="col-4 ship_to">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_List_ship_to_model">
             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_shipto'); ?>
			</button>
        	<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new_List_ship_to_model">
        				  <?php //echo $this->lang->line('label_ship_to'); ?>
        				  List ship to
        				</button> -->
        </div>
        <button type="button" class="close btnListshiptoCancel" data-toggle="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="Form_list_Ship_to" role="form" name="Form_list_Ship_to" class="kt-form kt-form--label-right">
		    	<div class="row">
		    		<div class="col-sm-12">

                  <!-- <div class="validation-error"></div> -->
		    		</div>
                </div>
				<div class="row">
				<!--begin::Form-->
					<div class="col-sm-12">
						<div class="kt-portlet__body">


							<!--begin: Datatable -->
							<table class="table table-striped- table-bordered table-hover table-checkable" id="listShipto">
								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Telephone</th>
										<th>Cellphone</th>
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
				 <input type="hidden" id="id_shiptoList" name="id_shiptoList" value="" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btnListshiptoCancel" data-toggle="modal">Close</button>
        <button type="submit" name="save_List_shipto" id="save_List_shipto" class="btn btn-success save_shipto">Guardar</button>
      </div>
    </div>
		    </form>
  </div>
</div>

<!-- Modal ship_to-->
<div class="modal fade new_List_ship_to_model" id="new_List_ship_to_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
style="z-index: 999999999999!important;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add ship_to </h5>
        <div class="col-4 ship_to">
        	<!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new_List_ship_to_model">
        				  <?php //echo $this->lang->line('label_ship_to'); ?>
        				  List ship to
        				</button> -->
        </div>
        <button type="button" class="close btnshiptoCancel" data-toggle="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormShip_to" role="form" name="FormShip_to" class="kt-form kt-form--label-right">
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
									<label for="example-text-input" class="col-4 col-form-label">
										<?php echo $this->lang->line('label_shipto_id'); ?> :
									</label>
									<div class="col-8">
										<input class="form-control" type="text" name="customer_id_shipto" value="<?php echo $next_id_shipto; ?>" id="customer_id_shipto" readonly>
										<input class="form-control" type="text" name="cref_shipto" value="<?php echo  $cref_shipto->id; ?>" id="cref_shipto" readonly>
									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_company'); ?>:
									</label>
									<div class="col-8">
										<input class="form-control" name="company_name_shipto" type="text" value="" id="company_name_shipto" placeholder="Company">
									</div>
								</div>
								<div class="form-group row">
									<label for="country" class="col-4 col-form-label"><span id="astric">*</span> Country: </label>
									<div class="col-8">
                                        <select class="form-control " name="country_shipto" id="country_shipto">
                                        	 <option value="">Seleccione...</option>
                                        	 <option value="100">USA </option>
                                        	 <option value="101">RD</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label">
										<span id="astric">*</span>
										 <?php echo $this->lang->line('label_first_name'); ?>:
										</label>
									<div class="col-8">
										<input class="form-control" name="fname_shipto" type="text" id="fname_shipto" placeholder="<?php echo $this->lang->line('label_first_name'); ?>">
									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_last_name'); ?>: </label>
									<div class="col-8">
										<input class="form-control" name="lname_shipto" type="text" value="" id="lname_shipto" placeholder="Last Name">
									</div>
								</div>


								<!-- <div class="addressGoogle"> -->
									<div class="form-group row">
										<label for="address_line1" class="col-4 col-form-label"><span id="astric">*</span> Address: </label>
										<div class="col-8">
											<input class="form-control" name="address_shipto" type="text" value="" id="address_shipto" placeholder="Address">
										</div>
									</div>
								<!-- </div> -->

                                <!-- <div class="addressLocal">
                                									<div class="form-group row">
                                										<label for="address_line1" class="col-4 col-form-label"><span id="astric">*</span> Address: </label>
                                										<div class="col-8">

                                											 <input type="text" class="form-control m-input" name="address_local_shipto" id="address_local_shipto" placeholder="Adress" value="" >
                                										</div>
                                									</div>
                                								</div> -->


								<div class="form-group row">
									<label for="address_line2" class="col-4 col-form-label"> Address: </label>
									<div class="col-8">
										<input class="form-control" name="address_line2_shipto" type="text" value="" id="address_line2_shipto" placeholder="<?php echo $this->lang->line('label_address_1'); ?>">
									</div>
								</div>


									<div class="form-group row">
										<label for="city" class="col-4 col-form-label"><span id="astric">*</span> City: </label>
										<div class="col-8">
											 <input type="text" class="form-control m-input" name="city_shipto" id="locality_shipto" placeholder="Enter city" value="">
										</div>
									</div>
								<div class="usa">
									<div class="form-group row">
										<label for="state" class="col-4 col-form-label"><span id="astric">*</span> State: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="state_shipto" id="administrative_area_level_1_shipto" placeholder="Enter state" value="" >
										</div>
									</div>
									<div class="form-group row">
										<label for="zipcode" class="col-4 col-form-label"> Zipcode: </label>
										<div class="col-8">
											<input type="text" class="form-control m-input" name="zipcode_shipto" id="postal_code_shipto" placeholder="Enter zipcode" value="" readonly >
										</div>
									</div>
								</div>
								<!-- <div class="rd">
									<div class="form-group row">
										<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Provincia: </label>
										<div class="col-8">

											<select name="provincia_shipto" class="form-control" id="provincia_shipto"></select>
										</div>
									</div>

									<div class="form-group row">
										<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Municipio: </label>
										<div class="col-8">
											<select name="municipio_shipto" class="form-control" id="municipio_shipto"></select>

										</div>
									</div>
								</div> -->
								<div class="form-group row">
									<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Provincia: </label>
									<div class="col-8">

										<input type="text" class="form-control m-input" name="provincia_shipto" id="provincia_shipto" placeholder="Provincia" value="">

									</div>
								</div>

								<!-- <div class="form-group row">
									<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Municipio: </label>
									<div class="col-8">

										<input type="text" class="form-control m-input" name="municipio_shipto" id="municipio_shipto" placeholder="Municipio" value="">
										                                        <input type="hidden" name="text_customer_id" id="text_customer_id" value="">
									</div>
								</div>
								 -->


								<!-- <div class="form-group row">
									<label for="branch" class="col-4 col-form-label">
									<span id="astric">*</span> Branch: </label>
									<div class="col-8">
								                                        <select class="form-control kt-selectpicker" name="branch_shipto" id="branch_shipto">
								                                        	 <option value="">Seleccione...</option>
								                                        	<?php //foreach ($branch_list->result() as $branch): ?>
													<option value="<?php //echo $branch->id ?>">
								                                                    <?php //echo $branch->name ?></option>
								                                        	<?php// endforeach ?>

										</select>
									</div>
								</div> -->

					        </div>
					</div>
					<div class="col-sm-6">
							<div class="kt-portlet__body">

								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label">
										<span id="astric">*</span> Telephone Number: </label>
									<div class="col-8">
										<input class="form-control" name="telephone_number_shipto" type="text" value="" id="telephone_number_shipto" placeholder="Telephone Number">
									</div>
								</div>
								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"><span id="astric">*</span> Cellphone Number: </label>
									<div class="col-8">
										<input class="form-control" name="cellphone_number_shipto" type="text" value="" id="cellphone_number_shipto" placeholder="Cellphone Number">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label">Email: </label>
									<div class="col-8">
										<input class="form-control" name="email_shipto" type="text" value="" id="email_shipto" placeholder="Email">
									</div>
								</div>

								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label">License ID: </label>
									<div class="col-8">
										<input class="form-control" name="lic_id_shipto" type="text" value="" id="lic_id_shipto" placeholder="license Id">
									</div>
								</div>
								<div class="form-group row">
									<label for="upload photo" class="col-4 col-form-label">License Picture: </label>
									<div class="col-8">
										<input type="file" class="form-control m-input" name="lic_picture_shipto" id="lic_picture_shipto" accept="image/*" data-show-preview="false" data-show-upload="false" data-show-caption="true" data-msg-placeholder="License Picture">
									</div>
								</div>



								<div class="form-group row">
										<label for="language" class="col-4 col-form-label"><span id="astric">*</span> Language: </label>
										<div class="kt-radio-inline">
											<label class="kt-radio">
												<input type="radio" name="language_shipto" id="language_English_shipto" value="English" checked> English
												<span></span>
											</label>
											<label class="kt-radio">
												<input type="radio" name="language_shipto" id="language_Spanish_shipto" value="Spanish"> Español
												<span></span>
											</label>
										</div>
									</div>
					</div>
				</div>
				 <!-- <input type="hidden" id="id_shipto" name="id_shipto" value="" class="form-control"> -->
				 <!-- <input type="hidden" id="id_shiptoList" name="id_shiptoList" value="" class="form-control"> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btnshiptoCancel" data-toggle="modal">Close</button>
        <button type="submit" name="save_shipto" id="save_shipto" class="btn btn-success save_shipto">Guardar</button>
      </div>
    </div>
		    </form>
  </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">
	.dataTables_filter {
	display: none;
	}
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
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
	var tablelist_Ship_to;
	var urlCustomer = "<?php echo base_url(); ?>"
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
				/*{
		          data: function(datos) {
		          	if (datos.lic_picture == "") {
		          		 return "<a href='#' <img src='" + urlCustomer + "assets/upload/customer/' class='img-circle img-bordered-sm' width='40px' height='40px' alt='no hay imagenes' /></a>"
		          	}else{
		              return "<a href='#' ><img src='" + urlCustomer + "assets/upload/customer/" + datos.lic_picture + "' class='img-circle img-bordered-sm' width='40px' height='40px' alt='Cliente' /></a>"
		          	}
		          }
				},*/
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

		$('#generalSearchTable').on('keyup', function(e) {
			var $this = $(this);
			tableCustomer.search($this.val()).draw();
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


var Id = 0;
/*datatables listShipTo*/
var KTDatatablesDataShipTo = function() {

	var initTable2 = function() {
		var table = $('#listShipto');


		// begin first table
		tablelist_Ship_to = table.DataTable({
			responsive: true,
              processing: true,
              serverSide: true,
			ajax: {
				url: 'getShipto/' + Id,
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'fname'},
				{data: 'address_line1'},
				{data: 'telephone_number'},
				{data: 'cellphone_number'},

				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_shipto' data-toggle='modal' data-target='#new_List_ship_to_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_registro_Shipto(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});

		/*$('#generalSearchTable').on('keyup', function(e) {
			var $this = $(this);
			tableCustomer.search($this.val()).draw();
		});*/

	};

	return {

		//main function to initiate the module
		init: function() {
			initTable2();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataShipTo.init();
});



        $("#telephone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

        $("#cellphone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

        /*modal*/

        $('#ship_to_model').click(function(event) {
        	var $data = $('.edit_customer').data();
			Id = $data.id;
			//alert($('#idCustomers').val());
			tablelist_Ship_to.ajax.url('getShipto/' + $('#idCustomers').val()).load();
			tablelist_Ship_to.ajax.reload();
        });

		$('.btnshiptoCancel').click(function(){
			//alert("probando");
			//$('#new_ship_to_model').modal('toggle');
			$('#new_List_ship_to_model').modal('hide');
			$('#FormShip_to')[0].reset();

	       $("input[name='address_line1']").attr("id","country");
	       $("input[name='city']").attr("id","locality");
	       $("input[name='state']").attr("id","administrative_area_level_1");
	       $("input[name='zipcode']").attr("id","postal_code");
		});

		$('.btnListshiptoCancel').click(function(){
			//$('#new_ship_to_model').modal('toggle');
			$('#new_ship_to_model').modal('hide');
			$('#Form_list_Ship_to')[0].reset();
		});
		$('.btnCustomerCancel').click(function(){
	    //alert("gsgdfg");
			$('#FormCustomer')[0].reset();
			$("#imgCliente").empty();
		});


		$(document).ready(function($) {


              $(".usa").css("display", "block");
		      $(".rd").css("display", "none");
		      $(".addressLocal").css("display", "none");
		     // $(".addressGoogle").css("display", "block");


		   $(".rd").hide();
		  $('[name="city_shipto"]').blur(function(event) {
		  	if ($('[name="city_shipto"]').val()== '') {

		      $(".rd").css("display", "block");
		  	}
		  });


		  $("#country_shipto").change(function(event) {
		  	//alert("probando");

		    if ($( "#country_shipto" ).val() == "US") {
		 	//alert("prueba");
		      $(".usa").css("display", "block");
		      $(".rd").css("display", "none");
		     // $(".addressGoogle").css("display", "block");
		      $(".addressLocal").css("display", "none");

		      }else if($( "#country_shipto" ).val() == "DO"){
		      	//alert("asd");
		     // $(".rd").css("display", "block");
		      $(".usa").css("display", "none");
		      //$(".addressGoogle").css("display", "none");
		      $(".addressLocal").css("display", "block");
		      //$('input[type="text"]').val('');
		      }

			});

		      //Cargamos Country
		      var getCountry = $("#country_shipto");
		      getCountry.append("<option value=''>Cargando...</option>");
		      $.getJSON("getCountry",function(objetosretorna){
		        getCountry.empty();
		        getCountry.append("<option value=''>Seleccione ...</option>");
		        $.each(objetosretorna, function(i,ObjetoReturn){
		          var seleccion = "";
		          if(country_shipto==ObjetoReturn.cou_id){
		            seleccion = "selected='selected'";
		          }
		          var nuevaFila = "<option value='"+ObjetoReturn.cou_code+"' "+seleccion+">" + ObjetoReturn.cou_name+"</option>";
		          getCountry.append(nuevaFila);
		        });
		      });

		      /*$("#country_shipto").change(function(){
		          var getCountry = $("#country_shipto").val();
		          $('#InfoCarrera').empty();
		          if(getCountry==""){
		            $('#InfoCarrera').append("<option value=''>Seleccione ...</option>");
		           // $('#InfoCarrera').prop('disabled', true);
		          }else{
		            $("#provincia_shipto").append("<option value='0'>Cargando ...</option>");
		            $.getJSON("getProvince",{filtro: $("#country_shipto").val()},function(objetosretorna){
		              $("#provincia_shipto").empty();
		              $("#provincia_shipto").append("<option value=''>Seleccione ...</option>");
		              $.each(objetosretorna, function(i,prov){
		                $("#provincia_shipto").append("<option value='"+prov.Region2+"'>" + prov.Region2+"</option>");
		              });
		            });
		           // $('#InfoCarrera').prop('disabled', false);
		          }

		        });*/

		      /*$("#provincia_shipto").change(function(){
		          var getMuni = $("#provincia_shipto").val();
		          $('#InfoCarrera').empty();
		          if(getMuni==""){
		            $('#municipio_shipto').append("<option value=''>Seleccione ...</option>");
		           // $('#InfoCarrera').prop('disabled', true);
		          }else{
		            $("#municipio_shipto").append("<option value='0'>Cargando ...</option>");
		            $.getJSON("getMunicipality",{filtro: $("#provincia_shipto").val()},function(objetosretorna){
		              $("#municipio_shipto").empty();
		              $("#municipio_shipto").append("<option value=''>Seleccione ...</option>");
		              $.each(objetosretorna, function(i,prov){
		                $("#municipio_shipto").append("<option value='"+prov.Country+"'>" + prov.Region3+"</option>");
		              });
		            });
		           // $('#InfoCarrera').prop('disabled', false);
		          }

		        });*/



		// #myInput is a <input type="text"> element
		$(document).on('click', '.new_customer', function(e){
			$(".ship_to").css("display", "none");
		})

                $("#lic_picture").fileinput({
                    'showUpload':false,
                    'previewFileType': "image",
                    'browseClass': "btn btn-primary",
                    'browseLabel': "Pick Image",
                    'browseIcon': "<i class=\"la la-file-image-o \"></i> ",
                    'browseIcon': "<i class=\"la la-file-image-o \" style=\"color: #fff;\"></i> ",
                    'removeClass': "btn btn-danger",
                    'removeLabel': "Delete",
                    'removeIcon': "<i class=\"la la-trash \"></i> ",
                });

                $("#lic_picture_shipto").fileinput({
                    'showUpload':false,
                    'previewFileType': "image",
                    'browseClass': "btn btn-primary",
                    'browseLabel': "Pick Image",
                    'browseIcon': "<i class=\"la la-file-image-o \" style=\"color: #fff;\"></i> ",
                    'removeClass': "btn btn-danger",
                    'removeLabel': "Delete",
                    'removeIcon': "<i class=\"la la-trash \"></i> ",
                });

      $(document).on('click', '.saveCustomer', function(e){
      			// Get form
			    var form = $('#FormCustomer')[0];

				// Create an FormData object
			    var dataForm = new FormData(form);

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Customer_validate',
                data: dataForm,
                type: 'POST',
                dataType: 'json',
                enctype: 'multipart/form-data',
                //cache: false,
			    contentType: false,
			    processData: false

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
              $('[name="customer_id"]').val(data.Cust_ID)
              $('[name="idCustomers"]').val(data.Cust_ID).trigger('change');
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


				if (data.lic_picture == null) {
					$('#imgCliente').append("<a href='#' ><i class='fas fa-eye-slash'></i> No hay Foto</a>");
					/*$('#imgCliente').append('<a href="#"  data-img="http://placehold.it/400x200" title="Popover Header" >Toggle popover</a>');*/

				}else{

                 /*$('#imgCliente').append("<a href='#' ><img src='" + urlCustomer + "assets/upload/customer/" + data.lic_picture + "' data-toggle='popover' class='img-circle img-bordered-sm' width='40px' height='40px' /></a>");*/

                 $('#imgCliente').append("<a href='#'  data-toggle='popover' data-img='" + urlCustomer + "assets/upload/customer/" + data.lic_picture + "' title='Popover Header' data-placement='top' ><i class='fas fa-eye'></i> Ver Foto</a>");

					/*$('#imgCliente').append('<a href="#"  data-toggle="popover" data-img="http://placehold.it/400x200" title="Popover Header" >Toggle popover</a>');*/
					jQuery(document).ready(function($) {
							 $('[data-toggle="popover"]').popover({
					          //trigger: 'focus',
							  trigger: 'hover',
					          html: true,
					          content: function () {
									return '<img class="img-fluid" src="'+$(this).data('img') + '" />';
					          },
					          title: 'Toolbox'
					    })
					});
               }


              $('#language_' + data.language).prop('checked', true);

             $('.saveCustomer').text('Editar');
             $(".ship_to").css("display", "block");

             $("#locality").attr("id","locality");
	         $("#administrative_area_level_1").attr("id", "administrative_area_level_1");
	         $("#postal_code").attr("id", "postal_code");




              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
              });

          })



		/*jquery shifto*/

      $(document).on('click', '.save_shipto', function(e){
      			// Get form
			    var form = $('#FormShip_to')[0];

				// Create an FormData object
			    var dataForm = new FormData(form);

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Ship_to_validate',
                data: dataForm,
                type: 'POST',
                dataType: 'json',
                enctype: 'multipart/form-data',
               // cache: false,
			    contentType: false,
			    processData: false

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



          $(document).on('click', '.edit_shipto', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();

              $.ajax({
                url : "<?php echo site_url('CustomerController/edit_Shipto')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

              $('[name="id_shiptoList"]').val(data.id);
              $('[name="customer_id_shipto"]').val(data.id);
             // $('[name="customer_id"]').val(data.Cust_ID);
              $('[name="company_name_shipto"]').val(data.company_name);
              $('[name="fname_shipto"]').val(data.fname);
              $('[name="lname_shipto"]').val(data.lname);
              $('[name="address_shipto"]').val(data.address_line1);
              $('[name="address_line2_shipto"]').val(data.address_line2);
              $('[name="city_shipto"]').val(data.city);
              $('[name="state_shipto"]').val(data.state);
              $('[name="zipcode_shipto"]').val(data.zipcode);
              $('[name="telephone_number_shipto"]').val(data.telephone_number);
              $('[name="cellphone_number_shipto"]').val(data.cellphone_number);
              $('[name="email_shipto"]').val(data.email);
              $('[name="website_shipto"]').val(data.website);
              $('[name="lic_id_shipto"]').val(data.lic_id);
              $('#language_shipto_' + data.language).prop('checked', true);

             $('.saveCustomer').text('Editar');
             $(".ship_to").css("display", "block");

		       $("#country").removeAttr("id");
		       $("#locality").removeAttr("id");
		       $("#administrative_area_level_1").removeAttr("id");
		       $("#postal_code").removeAttr("id");

		       $("#address_shipto").attr("id","country");
		       $("#locality_shipto").attr("id","locality");
		       $("#administrative_area_level_1_shipto").attr("id","administrative_area_level_1");
		       $("#postal_code_shipto").attr("id","postal_code");


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
	            country: 'long_name', // country
                locality: 'long_name', // city
                administrative_area_level_1: 'long_name', // State
                postal_code: 'short_name', // Zip code
                  locality_shipto: 'long_name', // city
                administrative_area_level_1_shipto: 'long_name', // State
                postal_code_shipto: 'short_name' // Zip code
              };

            /*geocomplete*/
            $("#country").geocomplete().bind("geocode:result", function(event, result){
                //console.log(result.address_components);

                    for (var i = 0; i < result.address_components.length; i++) {
                        var addressType = result.address_components[i].types[0];
                        if (addressType == "country") {
                            $("#country").val(result.address_components[i]['long_name']);
                        }
                    }


                for (var i = 0; i < result.address_components.length; i++) {
                  var addressType = result.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = result.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }

                $("#latitude").val(result.geometry.location.lat().toFixed(8));
                $("#longitude").val(result.geometry.location.lng().toFixed(8));
            });




		/*--------------ListShipTo-------------*/



               $("#address_shipto").geocomplete().bind("geocode:result", function(event, result){
                    for (var i = 0; i < result.address_components.length; i++) {
                        var addressType = result.address_components[i].types[0];
                        if (addressType == "address_shipto") {
                            $("#address_shipto").val(result.address_components[i]['long_name']);
                        }
                    }

                    for (var i = 0; i < result.address_components.length; i++) {
                      var addressType = result.address_components[i].types[0];
                      if (componentForm[addressType]) {
                        var val = result.address_components[i][componentForm[addressType]];
                        document.getElementById(addressType).value = val;
                      }
                    }

                });

               $("#ship_to_model").click(function(){
				    $("#new_ship_to_model").modal({backdrop: false});
				});
               $(".edit_shipto").click(function(){
				    $(".new_List_ship_to_model").modal({backdrop: false});
				});


jQuery(document).ready(function() {
    var e = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            'cache': false,
            url: '<?php echo base_url('CustomerController/get_prov_list_json') ?>/%QUERY',
            wildcard: '%QUERY',
            filter: function (data) {
                return data;
            }
        }
    });
    $("#provincia_shipto").typeahead(null,{
        name: "best-pictures",
        display: "name",
        valueKey: "Region2",
        source: e,
        limit: Infinity,
        templates: {
        	suggestion: Handlebars.compile("<div style ='font-weight: bold;'>{{Country}},&nbsp;&nbsp;&nbsp;{{Region2}}</div>"),


        }
    }).on('typeahead:selected', function (e, suggestion, name) {


        get_province_data(suggestion.Region2);

        //console.log(name);
        //console.log($(this).closest("div").find("input[id^=item_]").val());
    });
});

	function get_province_data(id){
		//alert("probando");

	    //$("#save_cancel_add_customer , #save_cancel_add_shipto").hide();

	    $.ajax({
	        url:  "<?php echo base_url(); ?>CustomerController/get_province_data/"+id,
	        type: "GET",
	        success: function(data)
	        {
	            data = JSON.parse(data);
	            if(data.result){
              //console.log(data.result.Country);

                    //$('[name="customer_id_shipto"]').val(data.id);
	                $("#provincia_shipto").val(data.result.Region2);
	               // $("#customer_fname").val(data.result.fname);


	               // $("#shipto_id").prop('disabled',false);


	               // getShiptoList(data.result.Cust_ID);
	            } else {

	               // $("#customer_details input[type = 'text']").val('');


	            }
	        },
	        error: function(jqXHR, textStatus, errorThrown){
	           // $("#customer_details input[type = 'text']").val('');

	        },
	        complete: function(){

	        }
	    }); // END OF AJAX CALL

	}


</script>

<!-- https://embarquesoft.net/company/customer -->