
<!-- Modal -->

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container" style="border: 1px solid #265791;">
      <div class="modal-header" style="background-color: #265791;border-bottom: 1px solid #265791;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fas fa-file-invoice-dollar" style="color: #fff;"></i> <?php echo $this->lang->line('title_add_new_invoices'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- <form method="post" id="Forminvoices" role="form" name="Forminvoices" class="kt-form kt-form--label-right"> -->
	  	<?php
         $form_data = array('class' => 'kt-form kt-form--label-right edit_invoices','id' => 'Forminvoices','enctype'=>'multipart/form-data');
         echo form_open('InvoicesController/edit/',$form_data);
        ?>
        <div class="modal-body" style="background-color: #fff;">

		    	<div class="row">
		    		<div class="col-sm-12">

                  <!-- <div class="validation-error"></div> -->
		    		</div>
                </div>
				<div class="row">
				<!--begin::Form-->
					<div class="col-sm-6">
							<!--begin::Portlet customers-->
							<div class="kt-portlet" style="background-color: #F0F1F6;">

								<div class="kt-portlet__body">
									<div class="row">
										<div class="col-12 input-group-sm">

			                                <div class="col-form-label-right d-block w-100 mb-1" style = "display:none;">
			                                    <?php echo $this->lang->line('label_customer'); ?>:
			                                    <span style = "display:none;" id = "save_cancel_add_customer">
			                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "edit_cancel_customer" >
			                                        <?php echo $this->lang->line('label_cancel'); ?>
			                                        </a>

			                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "edit_add_new_customer" style = "margin-right: 11px;">
			                                        <?php echo $this->lang->line('label_save'); ?>
			                                        </a>
			                                    </span>

			                                </div>

	                                         <input type="text" class="form-control m-input" name="edit_customer_id" id="edit_customer_id" placeholder="<?php echo $this->lang->line('label_customer'); ?>" value="<?php echo set_value('edit_customer_id'); ?>">

                                             <!-- <div class="m-typeahead"> -->
				                            <input type="text" class="form-control m-input" name="edit_customer_id" id="edit_customer_id" placeholder="<?php echo $this->lang->line('label_customer'); ?>" value="<?php echo set_value('edit_customer_id'); ?>">

				                            <input type="hidden" name="edit_text_customer_id" id="edit_text_customer_id" value="<?php if(!empty($result['customer_id'])) echo $result['customer_id']; else echo set_value('edit_text_customer_id'); ?>" maxlength="20">
										</div>


										<div id="edit_customer_details" class="col-6 input-group-sm modal-form-block">

	                                       <input type="text" class="form-control m-input " name="edit_customer_fname" id="edit_customer_fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="<?php  if(!empty($result['customer_data']['fname'])) echo $result['customer_data']['fname']; else echo set_value('edit_customer_fname'); ?>" maxlength="64" required="">
                                                                <?php echo form_error('edit_customer_fname'); ?>


                                            <input type="text" class="form-control m-input mt-2" name="edit_customer_address_1" id="edit_customer_address_1" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php  if(!empty($result['customer_data']['address_line1'])) echo $result['customer_data']['address_line1']; else echo set_value('edit_customer_address'); ?>"  required="">
                                            <input type="hidden" name="edit_customer_latitude" id="edit_customer_latitude" value="<?php if(!empty($result['customer_data']['latitude'])) echo $result['customer_data']['latitude']; else echo set_value('edit_customer_latitude'); ?>">
                                            <input type="hidden" name="edit_customer_longitude" id="edit_customer_longitude" value="<?php if(!empty($result['customer_data']['longitude'])) echo $result['customer_data']['longitude']; else echo set_value('edit_customer_longitude'); ?>">
                                                                <?php echo form_error('edit_customer_address'); ?>

                                            <input type="text" class="form-control m-input mt-2" name="edit_customer_address_2" id="edit_customer_address_2" placeholder="<?php echo $this->lang->line('label_address'); ?> *" value="<?php echo $result['customer_data']['address_line2'] ?>" >


                                            <input type="text" class="form-control m-input mt-2" name="edit_customer_city" id="edit_customer_city" placeholder="<?php echo $this->lang->line('label_city'); ?>" value="<?php if(!empty($result['customer_data']['city'])) echo $result['customer_data']['city']; else echo set_value('customer_city'); ?>" maxlength="64"  required="">
                                                                <?php echo form_error('edit_customer_city'); ?>

										</div>

										<div class="col-6 input-group-sm">

                                               <input type="text" class="form-control m-input" name="edit_customer_state" id="edit_customer_state" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="<?php if(!empty($result['customer_data']['state'])) echo $result['customer_data']['state']; else echo set_value('edit_customer_state'); ?>" maxlength="64"  required="">
                                                <?php echo form_error('edit_customer_state'); ?>

                                                <input type="text" class="form-control m-input mt-2" name="edit_customer_zipcode" id="edit_customer_zipcode" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="<?php if(!empty($result['customer_data']['zipcode'])) echo $result['customer_data']['zipcode']; else echo set_value('edit_customer_zipcode'); ?>" maxlength="32"  required="">
                                                <?php echo form_error('edit_customer_zipcode'); ?>

                                                <input type="text" class="form-control m-input mt-2" name="edit_customer_telephone_number" id="edit_customer_telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="<?php if(!empty($result['customer_data']['telephone_number'])) echo $result['customer_data']['telephone_number']; else echo set_value('edit_customer_telephone_number'); ?>" maxlength="12">
                                                <?php echo form_error('edit_customer_telephone_number'); ?>

                                                <input type="text" class="form-control m-input mt-2" name="edit_customer_cellphone_number" id="edit_customer_cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" value="<?php if(!empty($result['customer_data']['cellphone_number'])) echo $result['customer_data']['cellphone_number']; else echo set_value('edit_customer_cellphone_number'); ?>" maxlength="12">
                                                <?php echo form_error('edit_customer_cellphone_number'); ?>

                                                <input type="text" class="form-control m-input  mt-2" name="edit_customer_lic" id="edit_customer_lic" placeholder="<?php echo $this->lang->line('label_lic_id'); ?>" value="<?php echo $result['customer_data']['lic_id']; ?>" maxlength="14">
                                                <?php echo form_error('customer_lic'); ?>

										</div>
									</div>
								</div>

							</div>

							<!--end::Portlet customers-->

					</div>
					<div class="col-sm-6" id="invoice_details">
							<!--begin::Portlet ship to-->
							<div class="kt-portlet" style="background-color: #F0F1F6;">


								<div class="kt-portlet__body">
									<div class="row">

										<div class="col-12 input-group-sm">
	                                       <div class="form-group m-form__group row" id="div_shipto_id" style="margin-bottom: 5px;">
	                                        <div class="col-form-label-right d-block w-100 mb-1">
	                                            <?php echo $this->lang->line('label_ship_to'); ?>:
	                                        <span style = "display:none;" id = "edit_save_cancel_add_shipto">
	                                            <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "edit_cancel_shipto">
	                                            <?php echo $this->lang->line('label_cancel'); ?>
	                                            </a>

	                                            <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm"  id = "edit_add_new_shipto" style = "margin-right: 11px;">
	                                            <?php echo $this->lang->line('label_add'); ?>
	                                            </a>
	                                        </span>
	                                        </div>



	                                            <input type = "text" class ="form-control m-input" name="edit_shipto_id" id="edit_shipto_id" placeholder="<?php echo $this->lang->line('label_ship_to'); ?>" disabled>

	                                            <input type = "hidden" id =  "edit_text_shipto_id" name = "edit_shipto_id" value = "<?php echo $result['shipto_id']; ?>">

	                                            <?php echo form_error('edit_shipto_id'); ?>
	                                        </div>
										</div>

	                                    <div id="edit_shipto_details" class="col-6 input-group-sm">
	                                        <input type="text" class="form-control m-input" name="edit_shipto_fname" id="edit_shipto_fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?>" value="<?php if(!empty($result['shipto_data']['fname'])) echo $result['shipto_data']['fname']; else echo set_value('edit_shipto_fname'); ?>" maxlength="64"  required="">
                                                    <?php echo form_error('edit_shipto_fname'); ?>


                                                    <input type="text" class="form-control m-input mt-2" name="edit_shipto_lname" id="edit_shipto_lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?>" value="<?php if(!empty($result['shipto_data']['lname'])) echo $result['shipto_data']['lname']; else echo set_value('edit_shipto_lname'); ?>" maxlength="64"  required="">
                                                    <?php echo form_error('edit_shipto_lname'); ?>



                                                    <input type="text" class="form-control m-input mt-2" name="edit_shipto_address" id="edit_shipto_address" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php if(!empty($result['shipto_data']['address'])) echo $result['shipto_data']['address']; else echo set_value('edit_shipto_address'); ?>"  required="">
                                                    <input type="hidden" name="edit_shipto_latitude" id="edit_shipto_latitude" value="<?php if(!empty($result['shipto_data']['latitude'])) echo $result['shipto_data']['latitude']; else echo set_value('edit_shipto_latitude'); ?>">
                                                    <input type="hidden" name="edit_shipto_longitude" id="edit_shipto_longitude" value="<?php if(!empty($result['shipto_data']['longitude'])) echo $result['shipto_data']['longitude']; else echo set_value('edit_shipto_longitude'); ?>">
                                                    <?php echo form_error('edit_shipto_address'); ?>


                                               <input type="text" class="form-control m-input mt-2" name="edit_shipto_address_1" id="edit_shipto_address_1" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php if(!empty($result['shipto_data']['address_line1'])) echo $result['shipto_data']['address_line1']; else echo set_value('edit_shipto_address_1'); ?>" >
                                                    <?php echo form_error('edit_shipto_address_1'); ?>


                                                <input type="text" class="form-control m-input mt-2" name="edit_shipto_address_2" id="edit_shipto_address_2" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php echo $result['shipto_data']['address_line2']; ?>" >
                                                <?php echo form_error('shipto_address_1'); ?>
	                                    </div>

	                                    <div class="col-6 input-group-sm">

		                                        <input type="text" class="form-control m-input " name="edit_shipto_sector" id="edit_shipto_sector" placeholder="<?php echo $this->lang->line('label_sector'); ?> *" value="<?php echo  $result['shipto_data']['sector']; ?>" maxlength="64"  required="">
	                                    <?php echo form_error('shipto_sector'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="edit_shipto_province" id="edit_shipto_province" placeholder="<?php echo $this->lang->line('label_province'); ?> *" value="<?php echo  $result['shipto_data']['province']; ?>" maxlength="64"  required="">
	                                        <?php echo form_error('shipto_province'); ?>



	                                        <input type="text" class="form-control m-input mt-2" name="edit_shipto_telephone_number" id="edit_shipto_telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="<?php if(!empty($result['shipto_data']['telephone_number'])) echo $result['shipto_data']['telephone_number']; else echo set_value('edit_shipto_telephone_number'); ?>" maxlength="18" >
	                                                    <?php echo form_error('edit_shipto_telephone_number'); ?>


	                                                    <input type="text" class="form-control m-input mt-2" name="edit_shipto_cellphone_number" id="edit_shipto_cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?>" value="<?php if(!empty($result['shipto_data']['cellphone_number'])) echo $result['shipto_data']['cellphone_number']; else echo set_value('edit_shipto_cellphone_number'); ?>" maxlength="16">
	                                                    <?php echo form_error('edit_shipto_cellphone_number'); ?>


	                                        <input type="text" class="form-control m-input mt-2" name="edit_shipto_lic" id="edit_shipto_lic" placeholder="<?php echo $this->lang->line('label_lic_id'); ?>" value="<?php echo  $result['shipto_data']['lic_id']; ?>" maxlength="18">
	                                        <?php echo form_error('shipto_lic'); ?>

	                                    </div>

									</div>

								</div>
							</div>

							<!--end::Portlet ship to-->
				    </div>
				 <input type="hidden" id="idinvoices" name="idinvoices" value="" class="form-control">
                </div>
                <div class="row">
					<div class="col-sm-12">

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile">
							<div class="kt-portlet__body" style="background-color: #F0F1F6;">
								<div class="row">
		                            <div class="col-xm-3">
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_date'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="edit_date" id="edit_date" placeholder="<?php echo $this->lang->line('label_date'); ?>" value="<?php if(!empty($result['invoice_date'])) echo date('m/d/Y',strtotime($result['invoice_date'])); else echo set_value('edit_date'); ?>" required="">
                                                    <?php echo form_error('edit_date'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        <?php echo $this->lang->line('label_due_date'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="edit_due_date" id="edit_due_date" placeholder="<?php echo $this->lang->line('label_due_date'); ?>" value="<?php if(!empty($result['duedate'])) echo date('m/d/Y',strtotime($result['duedate'])); else echo set_value('edit_due_date'); ?>" >
                                                    <?php echo form_error('edit_due_date'); ?>
		                                    </div>
		                                </div>

		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_user'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="user" id="user" placeholder="<?php echo $this->lang->line('label_user'); ?>" value="<?php echo $this->session->userdata('username'); ?>" required="" disabled>
		                                        <?php echo form_error('user'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        <?php echo $this->lang->line('label_misc'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="misc" id="misc" placeholder="<?php echo $this->lang->line('label_misc'); ?>" value="<?php echo set_value('misc'); ?>" >
		                                        <?php echo form_error('misc'); ?>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="col-sm-3">
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                    * <?php echo $this->lang->line('label_invoice_hash'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="invoice_hash" id="invoice_hash" placeholder="<?php echo $this->lang->line('label_invoice_hash'); ?>" value="<?php echo set_value('invoice_hash'); ?>"  required="">
		                                        <?php echo form_error('invoice_hash'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        <?php echo $this->lang->line('label_agent_invoice'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="agent_invoice" id="agent_invoice" placeholder="<?php echo $this->lang->line('label_agent_invoice'); ?>" value="<?php echo set_value('agent_invoice'); ?>">
		                                        <?php echo form_error('agent_invoice'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        *<?php echo $this->lang->line('label_container'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="container" id="container" placeholder="<?php echo $this->lang->line('label_container'); ?>" value="<?php echo set_value('container'); ?>"  required="">
		                                        <?php echo form_error('container'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        <?php echo $this->lang->line('label_agent'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8">
		                                        <select class="form-control m-input" name="agent" id="agent">
		                                           <option value = ""><?php echo $this->lang->line('label_agent_invoice'); ?></option>
		                                           <?php foreach($agent_list as $value) {?>
		                                           <option value = "<?=$value['id']?>"><?=$value['fname'].' '.$value['lname']?></option>
		                                           <?php } ?>
		                                        </select>
		                                        <?php echo form_error('agent'); ?>
		                                    </div>
		                                </div>

		                            </div>

		                            <div class="col-sm-3">
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_driver'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <select class="form-control" name="driver_id" id="driver_id" placeholder="<?php echo $this->lang->line('label_driver'); ?>"  required data-parsley-trigger="focusin focusout" data-parsley-errors-container="#driver_error">
		                                            <option value=""><?php echo $this->lang->line('label_driver'); ?></option>
		                                            <?php
		                                                if(!empty($driver_list)){
		                                                    foreach ($driver_list as $key => $value) {
		                                            ?>
		                                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['fname']." ".$value['lname']; ?></option>
		                                            <?php
		                                                    }
		                                                }
		                                            ?>
		                                        </select>
		                                        <div id="driver_error"></div>
		                                        <?php echo form_error('driver_id'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_pay_term'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">

		                                        <select class="form-control m-input" name="pay_term" id="pay_term">
		                                            <option value = "USA">USA</option>
		                                            <option value = "RD">RD</option>

		                                        </select>
		                                        <?php echo form_error('pay_term'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_status'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="status" id="status" placeholder="<?php echo $this->lang->line('label_invoice_status'); ?>" value="<?php echo set_value('status'); ?>"  required="">
		                                        <?php echo form_error('status'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        * <?php echo $this->lang->line('label_total_box'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="tot_box" id="tot_box" placeholder="<?php echo $this->lang->line('label_total_box'); ?>" value="<?php echo set_value('tot_box', 0); ?>" maxlength="12" readonly  required="" >
		                                        <?php echo form_error('tot_box'); ?>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="col-sm-3">
			                                <!-- <div class="form-group m-form__group row">
			                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
			                                        * <?php echo $this->lang->line('label_branch'); ?>:
			                                    </label>
			                                    <div class="col-xl-7 col-lg-7">
			                                        <input type="text" class="form-control m-input" name="branch_id" id="branch_id" placeholder="<?php echo $this->lang->line('label_branch_id'); ?>" value="<?php echo set_value('branch_id'); ?>"  required="">
			                                        <?php echo form_error('branch_id'); ?>
			                                    </div>
			                                </div> -->
			                                <div class="form-group m-form__group row">
			                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
			                                        <?php echo $this->lang->line('label_total'); ?>:
			                                    </label>
			                                    <h5><label class="col-xl-8 col-lg-8 col-form-label text-left" id="total">
			                                        $0.00
			                                    </label></h5>
			                                </div>
			                                <div class="form-group m-form__group row">
			                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
			                                        <?php echo $this->lang->line('label_payments'); ?>:
			                                    </label>
			                                    <h5><label class="col-xl-8 col-lg-8 col-form-label text-left" id="payments">
			                                        $0.00
			                                    </label></h5>
			                                </div>
			                                <div class="form-group m-form__group row">
			                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
			                                        <?php echo $this->lang->line('label_balance'); ?>:
			                                    </label>
			                                    <h5><label class="col-xl-8 col-lg-8 col-form-label text-left" id="balance">
			                                        $0.00
			                                    </label></h5>
			                                </div>
		                            </div>
								</div>

							</div>
						</div>
					</div>

                </div>
                <div class="row">

						<!--begin::Portlet-->
						<div class="kt-portlet kt-portlet--responsive-tablet-and-mobile">
							<div class="kt-portlet__body" style="background-color: #F0F1F6;">

                    <div id="invoice_items" class="modal-form-table-view">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group m-form__group row">
                                    <label class="col-xl-4 col-lg-4 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_item'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_qty'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_price'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_discount'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_insurance'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_tax'); ?>
                                    </label>
                                    <label class="col-xl-2 col-lg-2 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_total'); ?>
                                    </label>
                                    <label class="col-xl-1 col-lg-1 text-left col-form-label-right">
                                        <?php echo $this->lang->line('label_actions'); ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="invoice_multiple_items" class="mt-0 modal-form-table-row append_div" style="border-top: 0px;">
                        <div class="form-group m-form__group row alldiv">
                                        <label class="col-xl-4 col-lg-4 text-left ">
                                            <div class="m-typeahead">
                                                <input type="text" class="form-control m-input" name="item[]" id="item_0" placeholder="<?php echo $this->lang->line('label_item'); ?>" maxlength="128" required="" data-index="0" data-index="0">
                                            </div>
                                        </label>
                                        <label class="col-xl-1 col-lg-1 text-left ">
                                            <input type="text" class="form-control m-input num" name="qty[]" id="qty0" placeholder="<?php echo $this->lang->line('label_qty'); ?>" maxlength="8" required="" data-parsley-type="number" min="1" value="1" data-index="0" value  ="0000">
                                        </label>
                                        <label class="col-xl-1 col-lg-1 text-left ">
                                            <input type="text" class="form-control m-input num" name="price[]" id="price0" placeholder="<?php echo $this->lang->line('label_price'); ?>"   maxlength="14" required="" data-parsley-type="number" min="1" value="0.00" data-index="0">
                                        </label>
                                        <label class="col-xl-1 col-lg-1 text-left ">
                                            <input type="text" class="form-control m-input num" name="discount[]" id="discount0" placeholder="<?php echo $this->lang->line('label_discount'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="0">
                                        </label>
                                        <label class="col-xl-1 col-lg-1 text-left ">
                                            <input type="text" class="form-control m-input num" name="insurance[]" id="insurance0" placeholder="<?php echo $this->lang->line('label_insurance'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="0">
                                        </label>
                                        <label class="col-xl-1 col-lg-1 text-left ">
                                            <input type="text" class="form-control m-input num" name="tax[]" id="tax0" placeholder="<?php echo $this->lang->line('label_tax'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="0">
                                        </label>
                                        <label class="col-xl-2 col-lg-2 text-left ">
                                            <input type="text" class="form-control m-input num" name="total[]" id="total0" placeholder="<?php echo $this->lang->line('label_total'); ?>"  maxlength="14" required="" readonly  data-parsley-type="number" min="0" value="0.00" data-index="0">
                                        </label>
                                        <div class="col-xl-1 col-lg-1">
                                                <button type="button" class="btn btn-sm btn-success addMore"><i class="fa fa-plus"></i> </button>
                                            </div>
                        </div>
                    </div>
							</div>
						</div>

						<!--end::Portlet-->

                </div>

        </div>
	      <div class="modal-footer">

                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_sub_total'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="sub_total" id="sub_total" placeholder="<?php echo $this->lang->line('label_sub_total'); ?>" value="<?php echo set_value('sub_total', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_tax'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="final_tax" id="final_tax" placeholder="<?php echo $this->lang->line('label_tax'); ?>" value="<?php echo set_value('final_tax', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_discount'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="final_discount" id="final_discount" placeholder="<?php echo $this->lang->line('label_discount'); ?>" value="<?php echo set_value('final_discount', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_insurance'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="final_insurance" id="final_insurance" placeholder="<?php echo $this->lang->line('label_insurance'); ?>" value="<?php echo set_value('final_insurance', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_payment'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="final_payment" id="final_payment" placeholder="<?php echo $this->lang->line('label_payment'); ?>" value="<?php echo set_value('final_payment', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="form-group m-form__group">
                            <label for="sub_total" class="text-white">
                                <?php echo $this->lang->line('label_balance'); ?>
                            </label>
                            <input type="text" class="form-control m-input" name="final_balance" id="final_balance" placeholder="<?php echo $this->lang->line('label_balance'); ?>" value="<?php echo set_value('final_balance', '0.00'); ?>"  required="" data-parsley-type="number" min="0" readonly>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="edit_invoice_id" value="<?php echo $edit_invoice_id; ?>">
                            <button type="button" class="btn btn-success" onclick="edit_check_submit();">
                                <?php echo $this->lang->line('label_submit'); ?>
                            </button>

	      </div>
    <!-- </form> -->
    <?php echo form_close(); ?>
  </div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/demo/default/components/parsley/dist/parsley.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>


                <!--begin::Page Snippets -->
        <script type="text/javascript">

$(document).on('click','#edit_typeahead_add_new_shipto',function(){

                            $("#edit_shipto_details input[type = 'text']").prop('disabled',false).val('');
                            $("#edit_shipto_fname").focus();
                            $("#edit_shipto_id").val('');
                            $("#edit_save_cancel_add_shipto").show();

                        });





$(document).on('click','#edit_add_new_customer',function(){
var data = {
    customer_fname:$("#edit_customer_fname").val(),
    customer_lname:$("#edit_customer_fname").val(),
    customer_address_line_1:$("#edit_customer_address_1").val(),
    customer_address_line_2:$("#edit_customer_address_2").val(),
    customer_latitude:$("#edit_customer_latitude").val(),
    customer_longitude:$("#edit_customer_longitude").val(),
    customer_city:$("#edit_customer_city").val(),
    customer_state:$("#edit_customer_state").val(),
    customer_zipcode:$("#edit_customer_zipcode").val(),
    customer_telephone_number:$("#edit_customer_telephone_number").val(),
    customer_cellphone_number:$("#edit_customer_cellphone_number").val(),
    customer_lic:$("#edit_customer_lic").val()
};
var url  = "<?php echo site_url('InvoicesController/create_invoice_customer')?>";
ajaxCall(url,data,function(response){
    if(response.status == SUCCESS_CODE){
    $("#edit_text_customer_id").val(response.data.Cust_ID);
    edit_getShiptoList('null');
    }
    getMessage(response.status,response.message);
    return false;
});

return false;
});






$(document).on('click','#edit_add_new_shipto',function(){

    //alert(34);

var data = {

    customer_id:$("#edit_text_customer_id").val(),
    shipto_fname:$("#edit_shipto_fname").val(),
    shipto_lname:$("#edit_shipto_lname").val(),
    shipto_address:$("#edit_shipto_address").val(),
    shipto_address_1:$("#edit_shipto_address_1").val(),
    shipto_address_2:$("#edit_shipto_address_2").val(),
    shipto_latitude:$("#edit_shipto_latitude").val(),
    shipto_longitude:$("#edit_shipto_longitude").val(),
    shipto_province:$("#edit_shipto_province").val(),
    shipto_sector:$("#edit_shipto_sector").val(),
    shipto_telephone_number:$("#edit_shipto_telephone_number").val(),
    shipto_cellphone_number:$("#edit_shipto_cellphone_number").val(),
    shipto_lic:$("#edit_shipto_lic").val(),

};
//console.log(data);

var url  = "<?php echo site_url('InvoicesController/create_invoice_shipto')?>";
ajaxCall(url,data,function(response){
    if(response.status == SUCCESS_CODE){
    //$("#shipto_id").val(response.data.id);
    //$('#shipto_id').val($('#shipto_id option[value="'+response.data.id+'"]').val()).trigger('change');
   // edit_get_customer_data($("#edit_text_customer_id").val());
    $("#edit_text_shipto_id").val(response.data.Cust_ID);
                                //$('#shipto_id').val($('#shipto_id option[value="'+response.data.id+'"]').val()).trigger('change');
   $("#edit_save_cancel_add_shipto").hide();
    }
    getMessage(response.status,response.message);
    return false;
});

return false;
});

$(document).on('click','#edit_cancel_shipto,#edit_cancel_customer',function(){
                            if($(this).attr('id') == 'edit_cancel_customer'){
                                $("#edit_customer_details input[type = 'text']").val('').prop('disabled',true);
                                $("#edit_save_cancel_add_customer").hide();
                                 $("#edit_customer_id").focus();
                            }else{
                            $("#edit_shipto_id").focus();
                            $("#edit_save_cancel_add_shipto").hide();
                            }
                            $("#edit_shipto_details input[type = 'text']").val('').prop('disabled',true);
                        });
                        $(document).on('click','#edit_typeahead_add_new_customer',function(){
                            $("#edit_customer_id").typeahead('close');
                            $("#edit_save_cancel_add_customer").show();
                            $("#edit_customer_details input[type = 'text']").prop('disabled',false).val('');
                            $("#edit_customer_fname").focus();
                            $("#edit_customer_id").val('');
                            $("#edit_shipto_id").off();
                            //$("input[type = 'text']").not("#user,#date,#due_date").val('');
                        });

                        $(document).ready(function(){
                            $('.close').click(function() {
                                //alert("test");
                                location.reload();
                            });
                           $('.form-control .m-input').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           var len = $('#edit_invoice_multiple_items .row').length;
                           $('#edit_item_1').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           $('#edit_item_2').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           $('#edit_item_3').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           $('#edit_item_4').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           $('#edit_item_5').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                           $('#edit_item_6').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                            $('#edit_invoice_multiple_items > * > label.col-xl-4.col-lg-4.text-left > div > span > input').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                            $('#edit_invoice_multiple_items > div:nth-child(2) > label.col-xl-4.col-lg-4.text-left > div > input').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                            $('.m-typeahead > input').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                            $('#edit_invoice_multiple_items > div:nth-child(3) > label.col-xl-4.col-lg-4.text-left > div > input').click(function() {
                                var nameId = $(this).attr("data-index");
                                //alert(nameId);
                               edit_item_popup(nameId);

                            });
                            $('#edit_invoice_multiple_items > * > label:nth-child(2) > input').click(function() {
                               var qtyId = $(this).attr("id");
                                $('input[id='+qtyId+']').on("change", function(e){
                                    edit_calculation($(this).data("index"));
                                });

                            });
                            $('#edit_invoice_multiple_items > * > label:nth-child(3) > input').click(function() {
                               var priceId = $(this).attr("id");
                               $(' input[id='+priceId+']').on("change", function(e){
                                    edit_calculation($(this).data("index"));
                                });

                            });
                            $('#edit_invoice_multiple_items > * > label:nth-child(4) > input').click(function() {
                               var disId = $(this).attr("id");
                               $('input[id='+disId+']').on("change", function(e){
                                    edit_calculation($(this).data("index"));
                                });

                            });
                            $('#edit_invoice_multiple_items > * > label:nth-child(5) > input').click(function() {
                               var insId = $(this).attr("id");
                               $('input[id='+insId+']').on("change", function(e){
                                    edit_calculation($(this).data("index"));
                                });

                            });
                            $('#edit_invoice_multiple_items > * > label:nth-child(6) > input').click(function() {
                               var taxId = $(this).attr("id");
                                $('input[id='+taxId+']').on("change", function(e){
                                    edit_calculation($(this).data("index"));
                                });

                            });

               });


                    jQuery(document).ready(function($) {
	                   $("#edit_date").datepicker({
			                    autoclose: true
			                   }).on('changeDate', function(ev){
					           // set the "toDate" start to not be later than "fromDate" ends:
					            var newDate = new Date(ev.date);
					            newDate.setDate(newDate.getDate()+30);
					            let d = newDate.getDate() < 10 ? '0'+newDate.getDate() : newDate.getDate();
					            let m = newDate.getMonth()+1;
					            m = m < 10 ? '0'+m : m;
					            let y = newDate.getFullYear();
					            //alert(m+'/'+d+'/'+y);
					             $("#edit_due_date").val(m+'/'+d+'/'+y);
					           $('#edit_due_date').datepicker('setStartDate',newDate);
					              })
			                      $("#edit_due_date").datepicker({
			                                    autoclose: true,
			                                }).datepicker("setDate", "+30d");
                    });
            var is_submited = 0;

            /* function for check allow submit form */
            function edit_check_submit(argument) {
                is_submited = 1;
               // $('.edit_invoices').parsley().validate();
                if($('.edit_invoices').parsley().isValid()){
                    /*console.log($('.edit_invoices').serialize());*/
                    $.ajax({
                        url:  "<?php echo base_url(); ?>InvoicesController/edit/",
                        type: "POST",
                        data: $('.edit_invoices').serialize(),
                        success: function(data)
                        {
                            //console.log(data);
                            if(data.code == "1"){
                                location.reload();
                            } else {
                                edit_show_error(data.message);
                            }
                        },
                            error: function(jqXHR, textStatus, errorThrown){
                        },
                            complete: function(){
                        }
                    }); // END OF AJAX CALL
                }

            }


            function edit_getShiptoList(id){

                $('#edit_shipto_id').off();
var e = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        cache: false,
        url: '<?php echo base_url('InvoicesController/get_customer_shipto') ?>/'+id,
        filter: function (data) {
            return data;
        }
    }
});

$("#edit_shipto_id").typeahead(null,{
    name: "best-pictures",
    display: "name",
    valueKey: "id",
    source: e,
    limit: Infinity,
    templates: {

        suggestion: Handlebars.compile("<div style = 'font-weight: bold;'>{{fname}} {{lname}} {{address_line1}} {{address_line2}}</div>"),
        footer:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="edit_typeahead_add_new_shipto">Add New Shipto</a><div>',
        notFound:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="edit_typeahead_add_new_shipto">Add New Shipto</a><div>',
    }
}).on('typeahead:selected', function (e, suggestion, name) {
    $("#edit_shipto_details input[type = 'text']").prop('disabled',false);

    edit_get_shipto_data(suggestion.id)

    console.log(name);
    //console.log($(this).closest("div").find("input[id^=item_]").val());
});

}

function edit_clear_form(){


                            $("#edit_customer_details input[type = 'text']").prop('disabled',true);
                            $("#edit_shipto_details input[type = 'text']").val('').prop('disabled',true);
                            $('input[type = "text"]').attr('data-parsley-error-message',"");
                            $("#edit_driver_id").attr('data-parsley-error-message',"");
                            $("#edit_save_cancel_add_customer").hide();
                            $("#edit_save_cancel_add_shipto").hide();
                            edit_item_popup('0');

                            }

            /*jQuery(document).ready(function() {
                // alert("test 4");
                /* parsley validation */
              /*  $('.edit_invoices').parsley();
                var sum=0;
                sum="<?php echo $result['sub_total']; ?>";
                $('#edit_total').html("$"+sum);
            }); */

            $('.m-scrollable').data('max-height', screen.height*0.6);


            $("#edit_customer_telephone_number, #edit_customer_cellphone_number").on('change', function() {
                if ($("#edit_customer_telephone_number").val().length > 0 ||
                    $("#edit_customer_cellphone_number").val().length > 0)
                {
                    // If any field is filled, remove required attr
                    $("#edit_customer_telephone_number, #edit_customer_cellphone_number").removeAttr("required");
                } else {
                    // if all fields are empty, set attr required
                    $("#edit_customer_telephone_number, #edit_customer_cellphone_number").attr("required", "required");
                }
                // destroy ParsleyForm instance
                $('.edit_invoices').parsley().destroy();

                // bind parsley
                $('.edit_invoices').parsley();

                if(is_submited)
                    $('.edit_invoices').parsley().validate();
            });


            /* input mask */
            var Inputmask = {
                init: function() {
                    $("#edit_customer_telephone_number").inputmask("mask", {
                        mask: "999-999-9999"
                    }), $("#edit_customer_cellphone_number").inputmask("mask", {
                        mask: "999-999-9999"
                    }), $("#edit_shipto_telephone_number").inputmask("mask", {
                        mask: "999-999-9999"
                    }), $("#edit_shipto_cellphone_number").inputmask("mask", {
                        mask: "999-999-9999"
                    })
                }
            };





            jQuery(document).ready(function() {
 //alert("test 2");
                var e = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        'cache': false,
                        url: '<?php echo base_url('InvoicesController/get_customer_list_json') ?>/%QUERY',
                        wildcard: '%QUERY',
                        filter: function (data) {
                            return data;
                        }
                    }
                });
                $("#edit_customer_id").typeahead(null,{
        name: "best-pictures",
        display: "name",
        valueKey: "id",
        source: e,
        limit: Infinity,
        templates: {
            suggestion: Handlebars.compile("<div style = 'font-weight: bold;'>{{name}},&nbsp;&nbsp;&nbsp;{{address_line1}},&nbsp;&nbsp;&nbsp;{{city}},&nbsp;&nbsp;&nbsp;{{telephone_number}})</div>"),
            footer:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="edit_typeahead_add_new_customer">Add New Customer</a><div>',
            notFound:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="edit_typeahead_add_new_customer">Add New Customer</a><div>',
        }
    }).on('typeahead:selected', function (e, suggestion, name) {

        edit_clear_form();
        $("#edit_customer_details input[type = 'text']").prop('disabled',false);

        edit_get_customer_data(suggestion.Cust_ID);


        console.log(name);
        //console.log($(this).closest("div").find("input[id^=item_]").val());
    });
            });

            //$('#customer_id').on('select2:select', function (e) {
            function edit_get_customer_data(id){

                $.ajax({
                    url:  "<?php echo base_url(); ?>InvoicesController/get_customer_data/"+id,
                    type: "GET",
                    success: function(data)
                    {
                        data = JSON.parse(data);
                        console.log(data);
                        if(data.result){
                            $("#edit_text_customer_id").val(data.result.Cust_ID);
                            $("#edit_customer_fname").val(data.result.fname);
                            $("#edit_customer_lname").val(data.result.lname);
                            $("#edit_customer_email").val(data.result.email);
                            $("#edit_customer_address").val(data.result.address_line1);
                            $("#edit_customer_address_1").val(data.result.address_line2);
                            $("#edit_customer_latitude").val(data.result.latitude);
                            $("#edit_customer_longitude").val(data.result.longitude);
                            $("#edit_customer_city").val(data.result.city);
                            $("#edit_customer_state").val(data.result.state);
                            $("#edit_customer_country").val(data.result.country);
                            $("#edit_customer_zipcode").val(data.result.zipcode);
                            $("#edit_customer_borough").val(data.result.borough);
                            $("#edit_customer_telephone_number").val(data.result.telephone_number);
                            $("#edit_customer_cellphone_number").val(data.result.cellphone_number);

                            $("#edit_customer_lic").val(data.result.lic_id);
                            $("#edit_customer_address_1").val(data.result.address_line2);
                            $("#edit_shipto_id").prop('disabled',false);
                            edit_getShiptoList(id);
                        } else {
                            $("#edit_customer_details input[type = 'text']").val('');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        $("#edit_customer_details input[type = 'text']").val('');
                    },
                    complete: function(){
                        if ($("#edit_customer_telephone_number").val().length > 0 ||
                            $("#edit_customer_cellphone_number").val().length > 0)
                        {
                            // If any field is filled, remove required attr
                            $("#edit_customer_telephone_number, #edit_customer_cellphone_number").removeAttr("required");
                        } else {
                            // if all fields are empty, set attr required
                            $("#edit_customer_telephone_number, #edit_customer_cellphone_number").attr("required", "required");
                        }
                    }
                }); // END OF AJAX CALL

                // $.ajax({
                //     url:  "<?php echo base_url(); ?>company/invoices/get_customer_shipto/"+id,
                //     type: "GET",
                //     success: function(data)
                //     {
                //         $("#edit_shipto_id").empty().append(new Option("<?php echo $this->lang->line('label_ship_to'); ?>", ""));
                //         data = JSON.parse(data);
                //         if(data.result){
                //             var first = "";
                //             $.each(data.result, function() {
                //                 $("#edit_shipto_id").append(new Option(this.fname + " " +this.lname , this.id));
                //                 if(first == ""){
                //                    first = this.id;
                //                 }
                //             });
                //         }
                //         $('#edit_shipto_id').val($('#edit_shipto_id option[value="'+first+'"]').val()).trigger('change');

                //         edit_get_shipto_data();
                //     },
                //     error: function(jqXHR, textStatus, errorThrown){

                //     },
                //     complete: function(){
                //     }
                // }); // END OF AJAX CALL
            }

            /* get ship to details */
            // $('#edit_shipto_id').on('select2:select', function (e) {
            //     edit_get_shipto_data();
            // });

            function edit_get_shipto_data(id){
                $.ajax({
                    url:  "<?php echo base_url(); ?>InvoicesController/get_shipto_data/"+id,
                    type: "GET",
                    success: function(data)
                    {
                        data = JSON.parse(data);
                        console.log(data);
                        if(data.result){
                            $("#edit_text_shipto_id").val(data.result.id);
                            $("#edit_shipto_fname").val(data.result.fname);
                            $("#edit_shipto_lname").val(data.result.lname);
                            $("#edit_shipto_address").val(data.result.address);
                            $("#edit_shipto_address_1").val(data.result.address_line1);
                            $("#edit_shipto_address_2").val(data.result.address_line2);
                            $("#edit_shipto_latitude").val(data.result.latitude);
                            $("#edit_shipto_longitude").val(data.result.longitude);
                            $("#edit_shipto_city").val(data.result.city);
                            $("#edit_shipto_state").val(data.result.state);
                            $("#edit_shipto_country").val(data.result.country);
                            $("#edit_shipto_zipcode").val(data.result.zipcode);
                            $("#edit_shipto_telephone_number").val(data.result.telephone_number);
                            $("#edit_shipto_cellphone_number").val(data.result.cellphone_number);
                            $("#edit_shipto_province").val(data.result.province);
                            $("#edit_shipto_sector").val(data.result.sector);
                            $("#edit_shipto_lic").val(data.result.lic_id);
                        } else {
                            $("#edit_text_shipto_id").val("<?php echo $next_shipto_id; ?>");
                            $("#edit_shipto_details input[type = 'text']").prop('disabled',false).val('');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        $("#edit_text_shipto_id").val("<?php echo $next_shipto_id; ?>");
                        $("#edit_shipto_details input[type = 'text']").prop('disabled',false).val('');
                    },
                    complete: function(){
                        if(is_submited){
                            $('.edit_invoices').parsley().validate()
                        }
                    }
                }); // END OF AJAX CALL
            }

            var edit_x = "<?php echo $invoice_item_count; ?>"; //initialize counter for text box
            //var edit_x = 1; //initialize counter for text box
$(document).on('click','.edit_addMore',function(){
    //alert(323);
    //$(this).hide();
     var cla = $(this).parent().parent().attr('class').split(' ');
    //console.log($(this).parent().parent().attr('class'));
     if(cla[2] == 'row'){
      $(this).hide();
    }

      if(cla[3] == 'edit_alldiv'){
       $(this).show();
      }
    var string = edit_add_more_button();
    //console.log(string[1]);
    $('.edit_childRemove').remove();
    $("#edit_invoice_multiple_items").append(string[0]);
    edit_item_popup(string[1]);
    edit_x++;
    //$(this).removeClass('edit_addMore btn-success').addClass('edit_removeMore btn-danger').html('<i class="fa fa-minus"></i>');
    $(this).removeClass('edit_addMore btn-success').addClass('edit_removeMore btn-danger').html('<i class="fa fa-minus"></i>');

    //$("#edit_tot_box").val($('.edit_removeMore').length);

});




$(document).on('click','.edit_removeMore',function(){
    var cla = $(".edit_removeMore").parent().parent().attr('class').split(' ');

     if(cla[2] == 'row'){
       if($('#edit_invoice_multiple_items').children().find('.edit_addMore').length == 1){
         //alert("Plus Button");

       }else{
         //alert("NO Plus Button");
            var newcontent = '<button type="button" class="btn btn-sm  btn-success edit_addMore" data-index="4" id="edit_btn_add_remove_4" onclick="edit_add_more_button();"><i class="fa fa-plus"></i></button><button type="button" class="btn btn-sm btn-danger edit_removeMore" data-index="4" id="edit_btn_add_remove_4" onclick="edit_remove_field(this)"> <i class="fa fa-minus"></i> </button> ';
            var lastchi = $('#edit_invoice_multiple_items div:last').html(newcontent);
        }
    }

    $(this).find('#edit_invoice_multiple_items > * > div.btn-success');
    $(this).closest('.edit_alldiv').remove();
     $(this).removeAttr("onclick");
    if($('.edit_alldiv').length == 1 && $('div#edit_invoice_multiple_items .row').length==1){
        $('.edit_removeMore').addClass('edit_addMore btn-success').removeClass('edit_removeMore btn-danger').html('<i class="fa fa-plus"></i>');
        edit_calculation($(this).data("index"));
        return true;
    }
    $('.edit_manage:last').html('<button type="button" class="btn btn-sm btn-success edit_addMore" ><i class="fa fa-plus"></i>'
                                        +'</button>'
                                        + '<button type="button" class="btn btn-sm btn-danger edit_removeMore edit_childRemove"><i class="fa fa-minus"></i>'
                                        +'</button>');

    if($('.edit_alldiv').length == 0){
        $('.edit_manage:last').html('<button type="button" class="btn btn-sm btn-success edit_addMore" ><i class="fa fa-plus"></i>'
                                        +'</button>'
                                        + '<button type="button" class="btn btn-sm btn-danger edit_removeMore edit_childRemove"><i class="fa fa-minus"></i>'
                                        +'</button>');
    }
    edit_calculation($(this).data("index"));

});

            /*var max_fields_limit = 10; //set limit for maximum input fields*/

            var edit_y=0;
            function edit_add_more_button()
            {
                edit_y=edit_x-1;

                /*if (x < max_fields_limit) { //check conditions*/
                   var returnString = '<div class="form-group m-form__group row edit_alldiv">'
                                                + '<label class="col-xl-4 col-lg-4 text-left ">'
                                                    + '<div class="m-typeahead">'
                                                        + '<input type="text" class="form-control m-input" name="edit_item[]" id="edit_item_'+edit_x+'" placeholder="<?php echo $this->lang->line('label_item'); ?>" maxlength="128" required="" data-index="'+edit_x+'" data-index="0">'
                                                    + '</div>'
                                                + '</label>'
                                                + '<label class="col-xl-1 col-lg-1 text-left ">'
                                                   + '<input type="text" class="form-control m-input num" name="edit_qty[]" id="edit_qty'+edit_x+'" placeholder="<?php echo $this->lang->line('label_qty'); ?>" maxlength="8" required="" data-parsley-type="number" min="1" value="1" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<label class="col-xl-1 col-lg-1 text-left ">'
                                                    + '<input type="text" class="form-control m-input num" name="edit_price[]" id="edit_price'+edit_x+'" placeholder="<?php echo $this->lang->line('label_price'); ?>"   maxlength="14" required="" data-parsley-type="number" min="1" value="0.00" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<label class="col-xl-1 col-lg-1 text-left ">'
                                                    + '<input type="text" class="form-control m-input num" name="edit_discount[]" id="edit_discount'+edit_x+'" placeholder="<?php echo $this->lang->line('label_discount'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<label class="col-xl-1 col-lg-1 text-left ">'
                                                    + '<input type="text" class="form-control m-input num" name="edit_insurance[]" id="edit_insurance'+edit_x+'" placeholder="<?php echo $this->lang->line('label_insurance'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<label class="col-xl-1 col-lg-1 text-left ">'
                                                    + '<input type="text" class="form-control m-input num" name="edit_tax[]" id="edit_tax'+edit_x+'" placeholder="<?php echo $this->lang->line('label_tax'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<label class="col-xl-2 col-lg-2 text-left ">'
                                                    + '<input type="text" class="form-control m-input num" name="edit_total[]" id="edit_total'+edit_x+'" placeholder="<?php echo $this->lang->line('label_total'); ?>"  maxlength="14" required="" readonly  data-parsley-type="number" min="0" value="0.00" data-index="'+edit_x+'">'
                                                + '</label>'
                                                + '<div class="col-xl-1 col-lg-1 edit_manage">'
                                                    + '<button type="button" class="btn btn-sm btn-success edit_addMore" ><i class="fa fa-plus"></i>'
                                                    +'</button>'
                                                    + '<button type="button" class="btn btn-sm btn-danger edit_removeMore edit_childRemove" ><i class="fa fa-minus"></i>'
                                                    +'</button>'
                                                 + '</div>'
                                            + '</div>'; //add input field
                /*}*/
                return [returnString,edit_x];




              //  edit_item_popup(edit_x);

                //edit_x++;
            }

            function edit_remove_field(btn)
            {
                $(btn).parent().parent('div').remove();
                edit_calculation($(btn).data("index"));
            }

            /* reinit item dropdown */
            function edit_item_popup(id){

                $("#edit_item_"+id).off();
                var e = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.obj.whitespace("description"),
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        'cache': false,
                        url: '<?php echo base_url('company/invoices/get_item_list_json') ?>/%QUERY',
                        wildcard: '%QUERY',
                        filter: function (data) {
                            return data;
                        }
                    }
                });
                $("#edit_item_"+id).typeahead(null, {
                    name: "best-pictures",
                    display: "description",
                    /*valueKey: "price"*/
                    source: e,
                    limit: Infinity,
                    templates: {
                        suggestion: Handlebars.compile("<div>{{description}} ({{item_number}})</div>")
                    }
                }).on('typeahead:selected', function (e, suggestion, name) {
                    $('#edit_price'+$(this).data("index")).val(suggestion.price);
                    edit_calculation($(this).data("index"));
                    //console.log($(this).closest("div").find("input[id^=item_]").val());
                });


                $('input[id=edit_qty'+id+'], input[id=edit_price'+id+'], input[id=edit_insurance'+id+'], input[id=edit_discount'+id+'], input[id=edit_tax'+id+']').on("change", function(e){
                    //alert("test");
                    edit_calculation($(this).data("index"));
                });


            }

            /* function for calculation */
            function edit_calculation(id) {
                var total = 0;
                total = parseFloat($('#edit_qty'+id).val()) * parseFloat($('#edit_price'+id).val());
                total = total - parseFloat($('#edit_discount'+id).val());
                total = total + parseFloat($('#edit_insurance'+id).val());
                total = total + parseFloat($('#edit_tax'+id).val());
                $('#edit_total'+id).val(total.toFixed(2));

                var sum =0;
                var total_qty = 0;
                $('input[id^=edit_total]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        sum+=parseFloat(val);
                    }
                });
                $('#edit_total').html("$"+sum.toFixed(2));
                $('#edit_sub_total').val(sum.toFixed(2));

                $('input[id^=edit_qty]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        total_qty+=parseInt(val);
                    }
                });
                $('#edit_tot_box').val(total_qty);
                edit_bottom_calculation();
            }

            $("#edit_sub_total, #edit_final_tax, #edit_final_discount, #edit_final_insurance, #edit_final_payment, #edit_final_balance").on("change", function(){
                edit_bottom_calculation()
            });

            /* function for calculation */
            function edit_bottom_calculation() {
                var sub_total =0;
                $('input[id^=edit_total]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        sub_total+=parseFloat(val);
                    }
                });
                $('#edit_total').html("$"+sub_total.toFixed(2));
                $('#edit_sub_total').val(sub_total.toFixed(2));


                if($("#edit_final_payment").val()){
                    edit_balance = sub_total - $("#edit_final_payment").val();
                }
                //$('#edit_balance').val(edit_balance.toFixed(2));
                $('#edit_balance').html("$"+edit_balance.toFixed(2));

                var final_tax =0;
                $('input[id^=edit_tax]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        final_tax+=parseFloat(val);
                    }
                });
                $('#edit_final_tax').val(final_tax.toFixed(2));

                var final_discount =0;
                $('input[id^=edit_discount]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        final_discount+=parseFloat(val);
                    }
                });
                $('#edit_final_discount').val(final_discount.toFixed(2));

                var final_insurance =0;
                $('input[id^=edit_insurance]').each(function(index, item){
                    var val = $(item).val();
                    if(val){
                        final_insurance+=parseFloat(val);
                    }
                });
                $('#edit_final_insurance').val(final_insurance.toFixed(2));

                var final_balance = ((sub_total + final_tax + final_insurance) - final_discount);
                if($("#edit_final_payment").val()){
                    final_balance = sub_total - $("#edit_final_payment").val();
                }
                $('#edit_final_balance').val(final_balance.toFixed(2));
            }

            /* show any error */
            function edit_show_error(message){
                swal({
                  title: '',
                  html: ''+message,
                  type: 'error',
                      //timer: 4000,
                      confirmButtonColor: '#B92D2E',
                  })
            }


            /*function payment()
            {

                $.ajax({
                        url:  "<?php //echo base_url(); ?>company/invoices/get_payment_form/"+$("input[name = 'edit_invoice_id']").val(),
                        type: "GET",
                        success: function(data)
                        {
                            //console.log(data);

                            $("#another_popup_html").html("");
                            $("#another_popup_html").html(data);
                            $('#another_popup').modal('show');
                            //$("#edit_invoice_model").modal('show');

                        },
                            error: function(jqXHR, textStatus, errorThrown){
                        },
                            complete: function(){
                        }
                    });

            }*/
            /*function note(){


                $.ajax({
                        url:  "<?php echo base_url(); ?>company/invoices/get_claim_form/"+$("input[name = 'edit_invoice_hash']").val(),
                        type: "GET",
                        success: function(data)
                        {
                            $("#another_popup_html").html("");
                             $("#another_popup_html").html(data);
                            $('#another_popup').modal('show');
                        },
                            error: function(jqXHR, textStatus, errorThrown){
                        },
                            complete: function(){
                        }
                    });


            }*/

            /*function mail(email)
            {

                $("#customer_email_send").val(email);
                $("#emailModal").modal('show');
            }*/
        </script>