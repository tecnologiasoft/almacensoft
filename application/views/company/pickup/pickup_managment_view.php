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
											<?php echo $this->lang->line('title_pickup_managment'); ?>
										</h3>
									</div>
								</div>
								<br>
								<div class="col-sm-12">

									<div class="row">
										<div class="col-sm-3">
												<div class="form-group row">
													<label for="m_form_search" class="col-4 col-form-label">Search: </label>
													<div class="col-8">
														<input class="form-control" name="m_form_search" type="text" value="" id="m_form_search" placeholder="Search">
													</div>
												</div>
												<div class="form-group row">
													<label for="report_type" class="col-4 col-form-label">Reports: </label>
													<div class="col-8">
														<select class="form-control" id="report_type">
				                                           <option value="">Select report</option>
				                                           <option value="1">Detail report</option>
				                                           <option value="2">Basic report</option>
														</select>
													</div>
												</div>
										</div>

										<div class="col-sm-3">
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Date A</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control m-input" type="text" value="" id="from_date" placeholder="<?php echo $this->lang->line('label_date').' A'; ?>" readonly>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Date B</label>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control m-input" type="text" value="" id="to_date" placeholder="<?php echo $this->lang->line('label_date').' B'; ?>" readonly>
												</div>
											</div>
										</div>

										<div class="col-sm-3">

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_driver'); ?></label>
                                                <div class="col-8">
                                                <select class="form-control m-input" id="driver_list">
                                                       <option value = ""><?php echo $this->lang->line('label_select').' '.$this->lang->line('label_driver'); ?></option>
                                                       <?php foreach($driver_list as $value){ ?>
                                                        <option value = "<?php echo $value['lname']; ?>"><?php echo $value['fname'].' '.$value['lname'];  ?></option>
                                                       <?php } ?>
                                                    </select>
                                                </div>
                                            </div>



												<div class="form-group row">
													<label for="example-text-input" class="col-4 col-form-label"><?php echo $this->lang->line('label_zone'); ?></label>
													<div class="col-8">
                                                        <select class="form-control m-input" id="zone">
                                                           <option value = ""><?php echo $this->lang->line('label_select').' '.$this->lang->line('label_zone'); ?></option>
                                                           <?php foreach($zone_list as $value){ ?>
                                                            <option value = "<?php echo $value['zone']; ?>"><?php echo $value['zone'];  ?></option>
                                                           <?php } ?>
                                                        </select>
													</div>
												</div>
										</div>
										<div class="col-sm-3">
												<div class="form-group row">
													<label for="report_type" class="col-4 col-form-label">order: </label>
													<div class="col-8">
														<select class="form-control" id="report_type">
				                                           <option value="zipcode">Zipcode</option>
				                                           <option value="city">City</option>
														</select>
													</div>
												</div>

												<div class="form-group row">
													<label for="report_type" class="col-4 col-form-label">view: </label>
													<div class="col-8">
                                                            <select class="form-control m-input" id="pickup_status">

                                                                <option value = ""><?php echo $this->lang->line('label_select').'  '.$this->lang->line('label_status'); ?></option>
                                                                <option value = "Done"><?php echo $this->lang->line('label_done'); ?></option>
                                                                <option value = "Not Done"><?php echo $this->lang->line('label_not_done'); ?></option>
                                                                <option value = ""><?php echo $this->lang->line('label_all'); ?></option>
                                                                <option value = "Assigned"><?php echo $this->lang->line('label_assigned'); ?></option>
                                                                <option value = "Not Assigned"><?php echo $this->lang->line('label_not').' '.$this->lang->line('label_assigned'); ?></option>

                                                            </select>
													</div>
												</div>

										</div>
									</div>

								</div>

								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="pickup">
										<thead>
											<tr>
												<th>#</th>
												<th><?php echo $this->lang->line('label_name'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_city'); ?></th>
												<th><?php echo $this->lang->line('label_telephone'); ?></th>
												<th><?php echo $this->lang->line('label_cellphone'); ?></th>
												<th><?php echo $this->lang->line('label_pickup_date'); ?></th>
												<th width="10%">
													<label class='kt-checkbox kt-checkbox--bold kt-checkbox--brand'><input type = 'checkbox' name = 'chk' class = 'chk_status'><?php echo $this->lang->line('label_done'); ?><span></span></label>
												</th>
												<th width="10%">
													<label class='kt-checkbox kt-checkbox--bold kt-checkbox--brand'><input type = 'checkbox' name = 'chk' class = 'chk_print' checked><?php echo $this->lang->line('label_print'); ?><span></span></label>
												</th>
												<th width="10%">
													<label class='kt-checkbox kt-checkbox--bold kt-checkbox--brand'><input type = 'checkbox' name = 'chk' class = 'chk_driver'><?php echo $this->lang->line('field_driver'); ?><span></span></label>
												</th>

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


<!-- Modal -->
<div class="modal fade" id="new_pickup_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container" style="border: 1px solid #265791;">
      <div class="modal-header" style="background-color: #265791;border-bottom: 1px solid #265791;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fas fa-file-invoice-dollar" style="color: #fff;"></i> <?php echo $this->lang->line('title_add_new_invoices'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body" style="background-color: #fff;">

			<!--begin::Portlet-->
			<div class="kt-portlet">
				<div class="kt-portlet__body">
					<ul class="nav nav-pills nav-fill" role="tablist">
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#" data-target="#kt_tabs_1_1"><?php echo $this->lang->line('label_customer_details'); ?><div id="title_customer_details" style="color: #265791;"></div></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" id="ListShipto" href="#kt_tabs_1_2"><?php echo $this->lang->line('label_ship_to'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#kt_tabs_1_3"><?php echo $this->lang->line('label_pickup'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#kt_tabs_1_4">Disabled</a>
						</li>
					</ul>
					<div class="tab-content">

						<div class="tab-pane" id="kt_tabs_1_1" role="tabpanel">
		                    <form method="post" id="FormPickupCusomer" role="form" name="FormPickupCusomer" class="kt-form kt-form--label-right">
								<!--begin::Portlet-->
								<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile" style="border: 1px solid #dce2ec;">
									<div class="kt-portlet__head" style="background-color: #F0F1F6;">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												<?php echo $this->lang->line('title_add_new_pickup'); ?>
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body" style="background-color: #265791;">
										<div class="row">


	                                            <div class="m-portlet__body">
	                                                <div class="row">
	                                                    <div class="col-lg-3 ">
	                                                        <div class="row">
	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_customer_id'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_id" id="customer_id" placeholder="<?php echo $this->lang->line('label_customer_id'); ?>" value="" maxlength="20" readonly>
	                                                            </div>

	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_telephone'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_telephone_number" id="customer_telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="<?php if(!empty($customer_details['telephone_number'])) echo $customer_details['telephone_number']; else echo set_value('customer_telephone_number'); ?>">
	                                                            </div>

	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_cellphone'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_cellphone_number" id="customer_cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" value="<?php if(!empty($customer_details['cellphone_number'])) echo $customer_details['cellphone_number']; else echo set_value('customer_cellphone_number'); ?>">
	                                                            </div>

	                                                             <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                    <?php echo $this->lang->line('label_office_phone'); ?>:
	                                                                </label>
	                                                                <div class="col-lg-7 input-group-sm">
	                                                                    <input type="text" class="form-control m-input" name="customer_office_phone_number" id="customer_office_phone_number" placeholder="<?php echo $this->lang->line('label_office_phone_number'); ?>" value="<?php if(!empty($customer_details['office_phone_number'])) echo $customer_details['office_phone_number']; else echo set_value('customer_office_phone_number'); ?>">
	                                                                </div>



	                                                        </div>


	                                                    </div>

	                                                    <div class="col-lg-3 mb-3">
	                                                        <div class="row">

	                                                        <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_company'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="company_name" id="company_name" placeholder="<?php echo $this->lang->line('label_company'); ?>" value="<?php if(!empty($customer_details['company_name'])) echo $customer_details['company_name']; else echo set_value('company_name'); ?>" maxlength="128">
	                                                                <?php echo form_error('company_name'); ?>
	                                                            </div>



	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_first_name'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_fname" id="customer_fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="<?php if(!empty($customer_details['fname'])) echo $customer_details['fname']; else echo set_value('customer_fname'); ?>" maxlength="64">
	                                                            </div>

	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_last_name'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_lname" id="customer_lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?>" value="<?php if(!empty($customer_details['lname'])) echo $customer_details['lname']; else echo set_value('customer_lname'); ?>" maxlength="64">
	                                                            </div>

	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_address_1'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_address_line_1" id="customer_address_line_1" placeholder="<?php echo $this->lang->line('label_address_1'); ?>" value="<?php if(!empty($customer_details['address_line1'])) echo $customer_details['address_line1']; else echo set_value('customer_address_line_1'); ?>">
	                                                            </div>





	                                                        </div>
	                                                    </div>

	                                                    <div class="col-lg-3">
	                                                        <div class="row">

	                                                        <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('apartment'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="apartment" id="apartment" placeholder="<?php echo $this->lang->line('apartment'); ?>" value="<?php if(!empty($customer_details['apartment'])) echo $customer_details['apartment']; else echo set_value('apartment'); ?>"  maxlength ="255">
	                                                                <?php echo form_error('apartment'); ?>

	                                                            </div>


	                                                        <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_address_2'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_address_line_2" id="customer_address_line_2" placeholder="<?php echo $this->lang->line('label_address_2'); ?>" value="<?php if(!empty($customer_details['address_line2'])) echo $customer_details['address_line2']; else echo set_value('customer_address_line_2'); ?>">
	                                                            </div>



	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_city'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_city" id="city" placeholder="<?php echo $this->lang->line('label_city'); ?>" value="<?php if(!empty($customer_details['city'])) echo $customer_details['city']; else echo set_value('customer_city'); ?>">
	                                                            </div>

	                                                            <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                    <?php echo $this->lang->line('label_state'); ?>:
	                                                                </label>
	                                                                <div class="col-lg-7 input-group-sm">
	                                                                    <input type="text" class="form-control m-input" name="customer_state" id="state" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="<?php if(!empty($customer_details['state'])) echo $customer_details['state']; else echo set_value('customer_state'); ?>">
	                                                                </div>


	                                                        </div>
	                                                    </div>

	                                                    <div class="col-lg-3 mb-3">
	                                                        <div class="row">


	                                                        <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_zipcode'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_zipcode" id="zipcode" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="<?php if(!empty($customer_details['zipcode'])) echo $customer_details['zipcode']; else echo set_value('customer_zipcode'); ?>">
	                                                            </div>


	                                                        <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                <?php echo $this->lang->line('label_balance'); ?>:
	                                                            </label>
	                                                            <div class="col-lg-7 input-group-sm">
	                                                                <input type="text" class="form-control m-input" name="customer_balance" id="customer_balance" placeholder="<?php echo $this->lang->line('label_balance'); ?>" value="<?php if(!empty($customer_details['balance'])) echo $customer_details['balance']; else echo set_value('customer_balance'); ?>">
	                                                            </div>



	                                                                <label class="col-lg-5 col-form-label text-white mb-3 text-right">
	                                                                    <?php echo $this->lang->line('label_language'); ?>:
	                                                                </label>
	                                                                <div class="col-lg-7 input-group-sm">
	                                                                    <div class="m-radio-inline">
	                                                                        <label class="m-radio m-radio--bold m-radio--state-success text-white">
	                                                                            <input name="customer_language" value="English" type="radio" <?php if($customer_details['language'] == "English") echo "checked"; ?>>
	                                                                            English
	                                                                            <span></span>
	                                                                        </label>
	                                                                        <label class="m-radio m-radio--bold m-radio--state-success text-white">
	                                                                            <input name="customer_language" value="Spanish" type="radio" <?php if($customer_details['language'] == "Spanish") echo "checked"; ?>>
	                                                                            Español
	                                                                            <span></span>
	                                                                        </label>
	                                                                    </div>
	                                                                </div>

	                                                                <div class="col-lg-2 text-right" style = "margin-left: 173px;">
	                                                                <input type = "hidden" name = "customer_id" value = "<?php echo $result['customer_id']; ?>">
	                                                                    <button type="button" class="btn btn-success text-right" value="update" id  = "update_customer_info">Submit</button>
	                                                                </div>

	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>



										</div>

									</div>
								</div>

							</form>
						</div><!-- end tab1 -->

						<div class="tab-pane" id="kt_tabs_1_2" role="tabpanel">

							<div class="col-sm-12">
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#new_List_ship_to_model">
							             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_shipto'); ?>
										</button>
							</div>
							<!--begin::Portlet-->
							<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile" style="border: 1px solid #dce2ec;">
								<div class="kt-portlet__head" style="background-color: #F0F1F6;">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											<?php echo $this->lang->line('title_add_new_pickup'); ?>
										</h3>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="TablelistShipto">
										<thead>
											<tr>
												<th>#</th>
												<th><?php echo $this->lang->line('label_first_name'); ?></th>
												<th><?php echo $this->lang->line('label_last_name'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_telephone'); ?></th>
												<th><?php echo $this->lang->line('label_cellphone'); ?></th>
												<th>Use</th>
												<th><?php echo $this->lang->line('label_province'); ?></th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>

									<!--end: Datatable -->

									<!-- Modal ship_to-->
									<div class="modal fade new_List_ship_to_model" id="new_List_ship_to_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg" role="document">
										    <div class="modal-content pac-container">
										      <div class="modal-header" style="background-color: #265791;border-bottom: 1px solid #265791;">
										        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;"><?php echo $this->lang->line('label_add_shipto'); ?> </h5>

										        <button type="button" class="close btnshiptoCancel" data-toggle="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										      </div>
										      <div class="modal-body">

												    <form method="post" id="FormShip_to" role="form" name="FormShip_to" class="kt-form kt-form--label-right">
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

																		<div class="form-group row">
																			<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Provincia: </label>
																			<div class="col-8">

																				<input type="text" class="form-control m-input" name="provincia_shipto" id="provincia_shipto" placeholder="Provincia" value="">

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
										                </div>
                                                        <input type="hidden" id="id_shiptoList" name="id_shiptoList" value="" class="form-control">
													      <div class="modal-footer">
													        <button type="button" class="btn btn-secondary btnshiptoCancel" data-toggle="modal">Close</button>
													        <button type="submit" name="save_shipto" id="save_shipto" class="btn btn-success save_shipto">Guardar</button>
													      </div>
												    </form><!--end: form -->
										      </div>
										    </div>
									   </div>
									</div>
								</div>

							</div>
							<!--end::Portlet-->
						</div><!-- end tab2 -->

						<div class="tab-pane active" id="kt_tabs_1_3" role="tabpanel">

                            <form method="post" id="Formpickup" role="form" name="Formpickup" class="kt-form kt-form--label-right">

								<!--begin::Portlet-->
								<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile" style="border: 1px solid #dce2ec;">
									<div class="kt-portlet__head"  style="background-color: #F0F1F6;">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												<?php echo $this->lang->line('label_pickup_address'); ?>
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body">
										<div class="row">
                                                <div class="col-lg-3"> <!--column1-->
                                                   <div class = "row">
                                                        <label class="form_label col-lg-5 col-form-label col-form-label-right  text-right mb-3">
                                                            <?php echo $this->lang->line('label_pickup_id'); ?>:
                                                        </label>
                                                        <div class="col-lg-7 ">
                                                            <input type="text" class="form-control m-input" name="pickup_id" id="pickup_id" placeholder="<?php echo $this->lang->line('label_pickup_id'); ?>" value="<?php if(!empty($result['id'])) echo $result['id']; else echo set_value('pickup_id'); ?>" maxlength="20" readonly >
                                                            <?php echo form_error('pickup_id'); ?>
                                                        </div>

                                                        <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                <?php echo $this->lang->line('label_telephone'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 ">
                                                                <input type="text" class="form-control m-input" name="telephone_number" id="telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="<?php if(!empty($customer_pickup_details['telephone_number'])) echo $customer_pickup_details['telephone_number']; elseif(!empty($result['telephone_number'])) echo $result['telephone_number']; else echo set_value('telephone_number'); ?>" data-parsley-trigger="focusin focusout" data-parsley-required-if="#cellphone_number" data-parsley-validate-if-empty="true">
                                                                <?php echo form_error('telephone_number'); ?>
                                                            </div>

                                                            <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                <?php echo $this->lang->line('label_cellphone'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 ">
                                                                <input type="text" class="form-control m-input" name="cellphone_number" id="cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" value="<?php if(!empty($customer_pickup_details['cellphone_number'])) echo $customer_pickup_details['cellphone_number']; elseif(!empty($result['cellphone_number'])) echo $result['cellphone_number']; else echo set_value('cellphone_number'); ?>" data-parsley-trigger="focusin focusout"    data-parsley-required-if="#telephone_number" data-parsley-validate-if-empty="true">
                                                                <?php echo form_error('cellphone_number'); ?>
                                                            </div>
                                                    </div>
                                                </div><!--end column1-->

                                                <div class="col-lg-3">
                                                   <div class="row">
                                                           <label class="form_label col-lg-5 col-form-label col-form-label-right  text-right mb-3">
                                                                *<?php echo $this->lang->line('label_first_name'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="fname" id="fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="<?php if(!empty($customer_pickup_details['fname'])) echo $customer_pickup_details['fname']; elseif(!empty($result['fname'])) echo $result['fname']; else echo set_value('fname'); ?>" maxlength="64"  required data-parsley-trigger="focusin focusout">
                                                                <?php echo form_error('fname'); ?>
                                                            </div>


                                                                <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                    *<?php echo $this->lang->line('label_last_name'); ?>:
                                                                </label>
                                                                <div class="col-lg-7 input-group-sm">
                                                                    <input type="text" class="form-control m-input" name="lname" id="lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?>" value="<?php if(!empty($customer_pickup_details['lname'])) echo $customer_pickup_details['lname']; elseif(!empty($result['lname'])) echo $result['lname']; else echo set_value('lname'); ?>" maxlength="64"  required data-parsley-trigger="focusin focusout">
                                                                    <?php echo form_error('lname'); ?>
                                                                </div>

                                                                <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                <?php echo $this->lang->line('label_address_1'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="address_line_1" id="address_line_1" placeholder="<?php echo $this->lang->line('label_address_1'); ?>" value="<?php if(!empty($customer_pickup_details['address_line1'])) echo $customer_pickup_details['address_line1']; elseif(!empty($result['address_line1'])) echo $result['address_line1']; else echo set_value('address_line_1'); ?>"  maxlength ="255">
                                                                <input type="hidden" name="latitude" id="latitude" value="<?php if(!empty($customer_pickup_details['latitude'])) echo $customer_pickup_details['latitude']; else echo set_value('latitude'); ?>">
                                                                    <input type="hidden" name="longitude" id="longitude" value="<?php if(!empty($customer_pickup_details['longitude'])) echo $customer_pickup_details['longitude']; else echo set_value('longitude'); ?>">
                                                                <?php echo form_error('address_line_1'); ?>

                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="row">
                                                            <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                <?php echo $this->lang->line('apartment'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="apartment" id="apartment" placeholder="<?php echo $this->lang->line('apartment'); ?>" value="<?php if(!empty($customer_pickup_details['apartment'])) echo $customer_pickup_details['apartment']; elseif(!empty($result['apartment'])) echo $result['apartment']; else echo set_value('apartment'); ?>"  maxlength ="255">
                                                                <?php echo form_error('apartment'); ?>

                                                            </div>

                                                             <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                <?php echo $this->lang->line('label_address_2'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="address_line_2" id="address_line_2" placeholder="<?php echo $this->lang->line('label_address_2'); ?>" value="<?php if(!empty($customer_pickup_details['address_line2'])) echo $customer_pickup_details['address_line2']; elseif(!empty($result['address_line2'])) echo $result['address_line2']; else echo set_value('address_line_2'); ?>"  maxlength ="255">
                                                                <?php echo form_error('address_line_2'); ?>
                                                            </div>


                                                                 <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                *<?php echo $this->lang->line('label_city'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="city" id="pickup_city" placeholder="<?php echo $this->lang->line('label_city'); ?>" value="<?php if(!empty($customer_pickup_details['city'])) echo $customer_pickup_details['city']; elseif(!empty($result['city'])) echo $result['city']; else echo set_value('city'); ?>"  required data-parsley-trigger="focusin focusout">

                                                                <?php echo form_error('city'); ?>
                                                            </div>
                                                        </div>
                                                </div>


                                                <div class="col-lg-3">
                                                    <div class="row">
                                                        <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                            *<?php echo $this->lang->line('label_state'); ?>:
                                                        </label>
                                                        <div class="col-lg-7 input-group-sm">
                                                            <input type="text" class="form-control m-input" name="state" id="pickup_state" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="<?php if(!empty($customer_pickup_details['state'])) echo $customer_pickup_details['state']; elseif(!empty($result['state'])) echo $result['state']; else echo set_value('state'); ?>" required data-parsley-trigger="focusin focusout">
                                                            <?php echo form_error('state'); ?>
                                                        </div>


                                                        <label class="form_label text-right col-lg-5 col-form-label col-form-label-right mb-3">
                                                                *<?php echo $this->lang->line('label_zipcode'); ?>:
                                                            </label>
                                                            <div class="col-lg-7 input-group-sm">
                                                                <input type="text" class="form-control m-input" name="zipcode" id="pickup_zipcode" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="<?php if(!empty($customer_pickup_details['zipcode'])) echo $customer_pickup_details['zipcode']; elseif(!empty($result['zipcode'])) echo $result['zipcode']; else echo set_value('zipcode'); ?>"  required data-parsley-trigger="focusin focusout">
                                                                <?php echo form_error('zipcode'); ?>
                                                            </div>
                                                    </div>
                                                    <input type="hidden" id="idPickup" name="idPickup">
                                                </div>



										</div><!--end row general-->
									</div>
								</div>

								<!--end::Portlet-->
								<!--begin::Portlet-->
								<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile" style="border: 1px solid #dce2ec;">
									<div class="kt-portlet__head"  style="background-color: #F0F1F6;">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												<?php echo $this->lang->line('label_pickup_details'); ?>
											</h3>
										</div>
									</div>
									<div class="kt-portlet__body">
										<div class="row">
                                                <div class="col-lg-12"> <!--column1-->
                                                   <div class = "row">

	                                                    <div class="form-group m-form__group row">
	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            * <?php echo $this->lang->line('label_item_1'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="item_1" id="item_1" placeholder="<?php echo $this->lang->line('label_item_1'); ?>" value="<?php echo set_value('item_1')?set_value('item_1'):$result['item_1']; ?>" maxlength="32"  required data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('item_1'); ?>
	                                                        </div>
	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_item_2'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="item_2" id="item_2" placeholder="<?php echo $this->lang->line('label_item_2'); ?>" value="<?php echo set_value('item_2')?set_value('item_2'):$result['item_2']; ?>" maxlength="32"  data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('item_2'); ?>
	                                                        </div>
	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            * <?php echo $this->lang->line('label_pickup_date'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="pickup_date" id="pickup_date" placeholder="<?php echo $this->lang->line('label_pickup_date'); ?>" value="<?php echo set_value('pickup_date')?set_value('pickup_date'):date('m/d/Y',strtotime($result['pickup_date'])); ?>" maxlength="32"  required data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('pickup_date'); ?>
	                                                        </div>
	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_pickup_time'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="pickup_time" id="pickup_time" placeholder="<?php echo $this->lang->line('label_pickup_time'); ?>" value="<?php echo set_value('pickup_time')?set_value('pickup_time'):$result['pickup_time']; ?>" maxlength="32"  data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('pickup_time'); ?>
	                                                        </div>
	                                                    </div>

                                                    </div>
                                                </div><!--end column1-->

                                                <div class="col-lg-12"><!--column2-->
                                                   <div class="row">
	                                                    <div class="form-group m-form__group row col-lg-12">
	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_driver'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <select class="form-control m-input" name="driver_id" id="driver_id" placeholder="<?php echo $this->lang->line('label_driver'); ?>"  data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">
	                                                                <option value=""><?php echo $this->lang->line('label_driver'); ?></option>

	                                                                <?php
	                                                                if(!empty($driver_list)){
	                                                                    foreach ($driver_list as $key => $value) {
	                                                                        ?>
	                                                                        <option value="<?php echo $value['id']; ?>" <?php echo $value['id']==$result['driver_id'] ? "selected":"";?>><?php echo $value['fname']." ".$value['lname']; ?></option>
	                                                                        <?php
	                                                                    }
	                                                                }
	                                                                ?>
	                                                            </select>
	                                                            <div id="driver_error">
	                                                                <?php echo form_error('driver_id'); ?>
	                                                            </div>
	                                                        </div>

	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_total_box'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="boxes" id="boxes" placeholder="<?php echo $this->lang->line('label_total_box'); ?>" value="<?php echo set_value('boxes')?set_value('boxes'):$result['boxes']; ?>" maxlength="10"  data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('boxes'); ?>
	                                                        </div>

	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_total_barrel'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <input type="text" class="form-control m-input" name="barrels" id="barrels" placeholder="<?php echo $this->lang->line('label_total_barrel'); ?>" value="<?php echo set_value('barrels')?set_value('barrels'):$result['barrels']; ?>" maxlength="10"  data-parsley-trigger="focusin focusout">
	                                                            <?php echo form_error('barrels'); ?>
	                                                        </div>


	                                                        <label class="col-lg-1 col-form-label col-form-label-right">
	                                                            <?php echo $this->lang->line('label_comment'); ?>:
	                                                        </label>
	                                                        <div class="col-lg-2 input-group-sm">
	                                                            <textarea class="form-control m-input" rows="2" name="comment" id="comment" placeholder="<?php echo $this->lang->line('label_comment'); ?>"><?php if(!empty($result['comment'])) echo $result['comment']; else echo set_value('comment'); ?></textarea>
	                                                            <?php echo form_error('comment'); ?>
	                                                        </div>
	                                                    </div>
                                                    </div>
                                                </div><!--column2-->


                                                <div class="col-lg-12">
                                                    <div class="row">
			                                               <div class="form-group m-form__group row col-lg-12" >

			                                                    <label class="col-lg-1 col-form-label col-form-label-right">
			                                                            <?php echo $this->lang->line('label_user'); ?>:
			                                                    </label>
			                                                        <div class="col-lg-2" style = "margin-top:8px;">
			                                                            <!-- <?php $user_info->name ?> -->
			                                                            <?php echo $this->session->userdata('username'); ?>
			                                                        </div>

			                                                        <label class="col-lg-1 col-form-label col-form-label-right">
			                                                            <?php echo $this->lang->line('label_created_date'); ?>:
			                                                        </label>
			                                                        <div class="col-lg-2" style = "margin-top:8px;">
			                                                            <?=$result['insertdate']?>
			                                                        </div>

				                                                    <label class="col-lg-1 col-form-label col-form-label-right">
				                                                            <?php echo $this->lang->line('label_zone'); ?>:
				                                                    </label>
			                                                        <div class="col-lg-2">
			                                                            <select class="form-control m-input" name="zone" id="zone" placeholder="<?php echo $this->lang->line('label_zone'); ?>">
			                                                                <option value=""><?php echo $this->lang->line('label_zone'); ?></option>
			                                                                <?php
			                                                                if(!empty($zone_list)){
			                                                                    foreach ($zone_list as $key => $value) {
			                                                                        ?>
			                                                                        <option value="<?php echo $value['id']; ?>" <?php echo $value['id']==$result['zone'] ? "selected":"";?>><?php echo $value['description']; ?></option>
			                                                                        <?php
			                                                                    }
			                                                                }
			                                                                ?>
			                                                            </select>
			                                                            <?php echo form_error('zone'); ?>
			                                                        </div>

			                                                        <label class="col-lg-1 col-form-label col-form-label-right">
			                                                            * <?php echo $this->lang->line('label_status'); ?>:
			                                                        </label>
			                                                        <div class="col-lg-2">
			                                                            <select class = "form-control" name = "status" required data-parsley-trigger="focusin focusout">
			                                                               <option value = ""><?=$this->lang->line('label_select').' '.$this->lang->line('label_status')?></option>
			                                                               <option value = "Done" <?php echo $result['status'] == 'Done'?"selected":""; ?>><?php echo $this->lang->line('label_done'); ?></option>
			                                                               <option value = "Not Done" <?php echo $result['status'] == 'Not Done'?"selected":""; ?>><?php echo $this->lang->line('label_not_done'); ?></option>
			                                                               <option value = "Cancel" <?php echo $result['status'] == 'Cancel'?"selected":""; ?>><?php echo $this->lang->line('label_cancel'); ?></option>
			                                                               <option value = "Rescheduled" <?php echo $result['status'] == 'Rescheduled'?"selected":""; ?>><?php echo $this->lang->line('label_rescheduled'); ?></option>
			                                                            </select>

			                                                            <?php echo form_error('status'); ?>
			                                                        </div>
			                                                    </div>
                                                        </div>
                                                </div>


                                                <div class="col-lg-12">
                                                    <div class="pl-3 pr-3 mt-2">
                                                        <div class="" style="background-color: #dce2ec; border:1px solid #b4bfd2; padding: 15px 15px 5px 15px; border-radius: 4px;">

                                                        <div class="row show-pickup-info">
                                                                <div class="col-md-12">
                                                                    <h5 style="font-weight: 500; font-family: Roboto;">
                                                                    <?php echo $this->lang->line('label_shipto_details') ?></h5>
                                                                    <hr/>
                                                                </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-right">
                                                                        <label><?php echo $this->lang->line('label_first_name');?>: </label>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <p id = "shipto_fname"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-right">
                                                                        <label><?php echo $this->lang->line('label_last_name');?>: </label>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                     <p id = "shipto_lname"></p>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-3 text-right">
                                                                        <label><?php echo $this->lang->line('label_address_1');?>: </label>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                    <p id = "shipto_address"></p>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-right">
                                                                        <label><?php echo $this->lang->line('label_telephone'); ?>: </label>
                                                                    </div>
                                                                    <div class="col-md-7" id = "">
                                                                    <p id = "shipto_telephone"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-md-5 text-right">
                                                                        <label> <?php echo $this->lang->line('label_cellphone'); ?>: </label>
                                                                    </div>
                                                                    <div class="col-md-7" id = "">
                                                                     <p id = "shipto_cellphone"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-3 text-right">
                                                                        <label><?php echo $this->lang->line('label_province'); ?>: </label>
                                                                    </div>
                                                                    <div class="col-md-9" id = "">
                                                                        <p id = "shipto_province"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group m-form__group row">
                                                        <div class="col-lg-5"></div>
                                                        <div class="col-lg-7">
                                                            <button type="submit" class="btn btn-success" value="update">
                                                                <?php echo $this->lang->line('label_submit'); ?>
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary">
                                                                <?php echo $this->lang->line('label_reset'); ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>


										</div><!--end row general-->
									</div>
								</div><!--end::Portlet-->

							</form>

						</div><!-- end tab3 -->

						<div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						</div><!-- end tab4 -->

					</div>
				</div>
			</div>

			   <!--end::Portlet-->


        </div>
	      <div class="modal-footer">


	      </div>

   </div>
  </div>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
             <!-- script file for File input -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
<script>
		var tablePickup;
		var tablelistShip_to;
	'use strict';
	var KTDatatablesDataSourceAjaxClient = function() {

		var initTable1 = function() {
			var table = $('#pickup');

			// begin first table
			tablePickup = table.DataTable({
				responsive: true,
				ajax: {
					url: 'getPickup',
					type: 'POST',
					data: {
						pagination: {
							perpage: 50,
						},
					},
				},
				columns: [
				    {
                  data: "id",
                  width: "4%"
                    },
					{data: 'name'},
					{data: 'address'},
					{data: 'city'},
					{data: 'telephone_number'},
					{data: 'cellphone_number'},
					{data: 'pickup_date'},
	                {
	                    render: function(valor, type, objeto, meta) {
	                	var status = (objeto.update_count == "1") ? "checked" : "";
	                        return "<label class='kt-checkbox kt-checkbox--solid kt-checkbox--brand'> <input type='checkbox' id='chk_status_" + objeto.id + "' name='chk_status[]' class='chk_status' value=" + objeto.id + " " + status + "> <span class='text'></span> </label>";
	                    },
	                    orderable: false,
	                    searchable: false,
                        className: "text-center",
                        width: "5%"
	                },
					{

                    render: function(valor, type, objeto, meta) {
                    	//var print = (objeto.update_count == "1") ? "checked" : "";
                        return "<label class='kt-checkbox kt-checkbox--solid kt-checkbox--brand'> <input type='checkbox' id='chk_print_" + objeto.id + "' name='chk_print[]' class='chk_print' value=" + objeto.id + " checked> <span class='text'></span> </label>";
                    },
                    orderable: false,
                    searchable: false,
                    className: "text-center",
                    width: "5%"

				    },
					{

	                    render: function(valor, type, objeto, meta) {
	                    	var driver = (objeto.driver_id == "1") ? "checked" : "";
	                        return "<label class='kt-checkbox kt-checkbox--solid kt-checkbox--brand'> <input type='checkbox' id='chk_driver_" + objeto.id + "' name='chk_driver[]' class='chk_driver' value=" + objeto.id + " "+ driver +"> <span class='text'></span> </label>";
	                    },
	                    orderable: false,
	                    searchable: false,
                        className: "text-center",
                        width: "5%"

				    },
					{
	                   data: function(datos) {
	                         var accion = "";
	                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_Pickup' data-toggle='modal' data-target='#new_pickup_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

	                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_registro(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


	                       return accion;
	                    },
					},
				],

			});
			$('#m_form_search').on('keyup', function(e) {
				var $this = $(this);
				tablePickup.search($this.val()).draw();
			});

	        $('#driver_list').on('change', function(e) {
	 	           var $this = $(this);
				tablePickup.search($this.val()).draw();
	        });

	        $('#zone').on('change', function(e) {
	 	           var $this = $(this);
				tablePickup.search($this.val()).draw();
	        });

	        $('#pickup_status').on('change', function(e) {
	        	//alert($('#pickup_status').val());
	 	        var $this = $(this);
				tablePickup.search($this.val()).draw();
	        });
	        $('#to_date').on('change', function(e) {
	        	//alert($('#pickup_status').val());
	 	        var $this = $(this);
				tablePickup.search($this.val()).draw();
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

	  $('#from_date').datepicker();
	  $('#to_date').datepicker();

	});



                $(document).ready(function(){


                    // set default dates
                    var start = new Date();
                    // set end date to max one year period:
                    var end = new Date(new Date().setYear(start.getFullYear()+1));

                    $('#from_date').datepicker({

                        autoclose: true,
                        endDate   : end,
                        format: "mm/dd/yyyy"

                    // update "toDate" defaults whenever "fromDate" changes
                    }).on('changeDate', function(){
                        // set the "toDate" start to not be later than "fromDate" ends:
                        $('#to_date').datepicker('setStartDate', new Date($(this).val()));
                    });

                    $('#to_date').datepicker({
                        autoclose: true,
                        endDate   : end,
                        format: "mm/dd/yyyy"

                    // update "fromDate" defaults whenever "toDate" changes
                    }).on('changeDate', function(){
                        // set the "fromDate" end to not be later than "toDate" starts:
                        $('#from_date').datepicker('setEndDate', new Date($(this).val()));
                    });

                });

	/*--------- ShipTo ----------*/

var Id = 0;
/*datatables listShipTo*/
var KTDatatablesDataShipTo = function() {

	var initTable2 = function() {
		var table = $('#TablelistShipto');


		// begin first table
		tablelistShip_to = table.DataTable({
			responsive: true,
              processing: true,
              serverSide: true,
			ajax: {
				url: 'getListShipto/' + Id,
				//url: 'getListShipto',
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
				{data: 'lname'},
				{data: 'address_line1'},
				{data: 'telephone_number'},
				{data: 'cellphone_number'},
				{
	                    render: function(valor, type, objeto, meta) {
	                        return "<label class='kt-radio kt-radio--solid kt-radio--brand'> <input type='radio' data-id=" + objeto.id + " name='use_shipto' class='use_shipto' value=" + objeto.id + "> <span class='text'></span> </label> <input type='hidden' id='shipto_id' name='shipto_id' value=" + objeto.id + ">";
	                    },
	                    orderable: false,
	                    searchable: false,
                        className: "text-center",
                        width: "5%"
			    },
				{data: 'province'},

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

        $('#ListShipto').click(function(event) {
        	//alert("prueba");


        	var $data = $(this).data();
			Id = $data.id;
			//alert($('#idCustomers').val());
			tablelistShip_to.ajax.url('getListShipto/' + $('#idPickup').val()).load();
			tablelistShip_to.ajax.reload();
        });
	/*--------- End ShipTo ----------*/



            $(document).on('change','input[name = "chk"]',function(){
                var className = $(this).attr('class');
                if($(this).is(':checked')){
                    $('.'+className).prop('checked',true);
                }else{
                    $('.'+className).prop('checked',false);
                }
            });


                $(document).ready(function(){


                    // set default dates
                    var start = new Date();
                    // set end date to max one year period:
                    var end = new Date(new Date().setYear(start.getFullYear()+1));

                    $('#from_date').datepicker({

                        autoclose: true,
                        endDate   : end,
                        format: "mm/dd/yyyy"

                    // update "toDate" defaults whenever "fromDate" changes
                    }).on('changeDate', function(){
                        // set the "toDate" start to not be later than "fromDate" ends:
                        $('#to_date').datepicker('setStartDate', new Date($(this).val()));
                    });

                    $('#to_date').datepicker({
                        autoclose: true,
                        endDate   : end,
                        format: "mm/dd/yyyy"

                    // update "fromDate" defaults whenever "toDate" changes
                    }).on('changeDate', function(){
                        // set the "fromDate" end to not be later than "toDate" starts:
                        $('#from_date').datepicker('setEndDate', new Date($(this).val()));
                    });

                });


            $(document).on('change','.chk_status',function(){
                //debugger;
                var p = new Array;

				idValue = $(this).val();

                if($(this).attr('name') == 'chk'){
                   /* $(".chk_status").each(function(e){
                        if($(this).data('id') != undefined){
                        p.push($(this).data('id'));
                        }
                    })*/

                    var data = {idStatus:idValue,id:p,status:$('.chk_status').is(':checked') ? '1' : '0',type:'status'};
                }else{
                    var data = {idStatus:idValue,id:[$(this).data('id')],status:$(this).is(':checked') ? '1' : '0',type:'status'};
                }

                var url = SITE_URL+'PickupController/update_status';

                toastr.success("Guardado Exitosamente");
                   // alert("response");
                ajaxCall(url, data, function(response){
                    //m_datatables.reload();
                    //console.log(response);
                    return false;


                });


            });

            $(document).on('change','.chk_driver',function(){
                //debugger;
                var p = new Array;

				idValue = $(this).val();

                if($(this).attr('name') == 'chk'){
                   /* $(".chk_status").each(function(e){
                        if($(this).data('id') != undefined){
                        p.push($(this).data('id'));
                        }
                    })*/

                    var data = {idDriver:idValue,id:p,driver:$('.chk_status').is(':checked') ? '1' : '0',type:'driver'};
                }else{
                    var data = {idDriver:idValue,id:[$(this).data('id')],driver:$(this).is(':checked') ? '1' : '0',type:'driver'};
                }

                //var url = SITE_URL+'PickupController/update_driver';

               // toastr.success("Guardado Exitosamente");
                   // alert("response");
                   $.ajax({
                   	url: SITE_URL+'PickupController/update_driver',
                    type: "POST",
                   	dataType: 'json',
                    data: data,

                   })
                   .done(function(response) {
                   	 toastr.success("Guardado Exitosamente");
                   	console.log(response);
                   	return false;

                   })
                   .fail(function() {
                   	console.log("error");
                   })
                   .always(function() {
                   	console.log("complete");
                   });

               /* ajaxCall(url, data, function(response){
                    //m_datatables.reload();
                    //console.log(response);
                    return false;


                });*/


            });



          $(document).on('click', '.edit_Pickup', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('PickupController/edit_Pickup')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idPickup"]').val(data.id);
	              $('[name="pickup_id"]').val(data.id);
	              $('[name="fname"]').val(data.fname);
	              $('[name="lname"]').val(data.lname);
	              $('[name="telephone_number"]').val(data.telephone_number);
	              $('[name="cellphone_number"]').val(data.cellphone_number);
	              $('[name="address_line_1"]').val(data.address);
	              $('[name="apartment"]').val(data.apartment);
	              $('[name="address_line_2"]').val(data.address_line2);
	              $('[name="pickup_city"]').val(data.city);
	              $('[name="state"]').val(data.state);
	              $('[name="zipcode"]').val(data.zipcode);
	              $('[name="item_1"]').val(data.item_1);
	              $('[name="item_2"]').val(data.item_2);
	              $('[name="boxes"]').val(data.boxes);
	              $('[name="barrels"]').val(data.barrels);
	              $('[name="comment"]').val(data.comment);
	              $('[name="customer_id"]').val(data.Cust_ID);
	              $('[name="company_name"]').val(data.company_name);
	              $('[name="apartment"]').val(data.apartment);
	              $('[name="customer_zipcode"]').val(data.zipcode);
	              $('[name="customer_telephone_number"]').val(data.telephone_number);
	              $('[name="customer_fname"]').val(data.name);
	              $('[name="address_line_2"]').val(data.address_line1);
	              $('[name="address_line_2"]').val(data.address_line2);
	              $('[name="customer_balance"]').val(data.balance);
	              $('[name="customer_cellphone_number"]').val(data.cellphone_number);
	              $('[name="customer_lname"]').val(data.lastname);
	              $('[name="customer_city"]').val(data.city);
	              $('[name="customer_state"]').val(data.state);
	              $('#title_customer_details').text(data.name + data.lastname);



              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
              });

          })

        /*modal*/
        /*$(document).on('click','.use_shipto',function(){
			//$('[name="use_shipto"]').click(function () {
				var prueba = $('[name="shipto_id"]').val();
				prueba.attr('checked', true);
				//alert($(".use_shipto").attr('checked', true));
			});*/

$(document).on('click',"input[name = 'use_shipto']",function(){
    var $row = $(this).closest("tr");        // Finds the closest row <tr>

    $("#shipto_fname").text($row.find("td:nth-child(2)").text()); // Finds the 2nd <td> element

    $("#shipto_lname").text($row.find("td:nth-child(3)").text()); // Finds the 2nd <td> element

    $("#shipto_address").text($row.find("td:nth-child(4)").text()); // Finds the 2nd <td> element


    $("#shipto_telephone").text($row.find("td:nth-child(5)").text()); // Finds the 2nd <td> element




    $("#shipto_cellphone").text($row.find("td:nth-child(6)").text()); // Finds the 2nd <td> element


    $("#shipto_province").text($row.find("td:nth-child(7)").text()); // Finds the 2nd <td> element


})

$(document).on('click','.use_shipto',function(){

    $("#shipto_id").val($(this).attr('data-id'));

   //var aa=  $("#shipto_id").val();

     //$('[name="use_shipto"]').prop("checked", true);
    //alert(aa);
   // $('[name="use_shipto"]').val($(this).attr('checked'));

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


      $(document).on('click', '#update_customer_info', function(e){

                 // alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'customer_update_in_pickup',
                data: $("#FormPickupCusomer").serialize(),
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
              });
            event.preventDefault();
        });



      $(document).on('click', '.save_shipto', function(e){
      			// Get form
			    var form = $('#FormShip_to')[0];

				// Create an FormData object
			    var dataForm = new FormData(form);

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Ship_to_Pickup_validate',
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




              })
              .fail(function() {
                console.log("error");
              })
              .always(function() {
                console.log("complete");
              });

          })


</script>

<!-- https://embarquesoft.net/company/customer -->