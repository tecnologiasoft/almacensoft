<link href="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
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
											<i class="fas fa-file-invoice-dollar" style="color: #265791;"></i>
										</span>
										<div class="col-sm-4">
											<h3 class="kt-portlet__head-title" style="color: #265791;">
												 <?php echo $this->lang->line('title_invoices_list'); ?>
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
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_invoices_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_invoices'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="invoices">
										<thead>
											<tr>
												<th><?php echo $this->lang->line('label_customer'); ?></th>
												<th><?php echo $this->lang->line('label_address'); ?></th>
												<th><?php echo $this->lang->line('label_consignee'); ?></th>
												<th><?php echo $this->lang->line('label_state'); ?></th>
												<th><?php echo $this->lang->line('label_invoice_number'); ?></th>
												<th><?php echo $this->lang->line('label_balance'); ?></th>
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

  }

	#new_invoices_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
 #invoices_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
 #new_invoices_model.modal.show .modal-dialog {
    max-width: 70% !important;
}

#Forminvoices .m-form__group{
	    margin-bottom: 1rem!important;
}
#Forminvoices .col-form-label {
	padding-right: 1px;
	padding-right: 1px;
}
#invoice_details, #invoice_items, #invoice_status, #invoice_multiple_items ,#edit_invoice_multiple_items{
    margin-top: 5px;
    padding: 5px;
    border: 1px solid #265791;
}
.modal-form-table-view{
    background-color: #265791;
    border-radius: 4px 4px 0px 0px;
    /* margin-top: 15px !important; */
}
#invoice_items .col-form-label-right {
    margin-bottom: 1rem!important;
    color: #fff;
    font-weight: bold;
}

#Forminvoices .modal-footer {
    background-color: #265791;
}


#edit_invoice_model .modal-header{
	display: block;
}

#edit_invoice_model .modal-header .modal-title{
	display: inline-block;
}

#edit_invoice_model .modal-header  .close{
	margin: 20px 20px 0px 0px;
}
</style>

<!-- Modal -->
<div class="modal fade" id="new_invoices_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container" style="border: 1px solid #265791;">
      <div class="modal-header" style="background-color: #265791;border-bottom: 1px solid #265791;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;"><i class="fas fa-file-invoice-dollar" style="color: #fff;"></i> <?php echo $this->lang->line('title_add_new_invoices'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form method="post" id="Forminvoices" role="form" name="Forminvoices" class="kt-form kt-form--label-right">
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
			                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "cancel_customer" >
			                                        <?php echo $this->lang->line('label_cancel'); ?>
			                                        </a>

			                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "add_new_customer" style = "margin-right: 11px;">
			                                        <?php echo $this->lang->line('label_save'); ?>
			                                        </a>
			                                    </span>

			                                </div>

	                                         <input type="text" class="form-control m-input" name="customer_id" id="customer_id" placeholder="<?php echo $this->lang->line('label_customer'); ?>" style="border: 1px solid red;" value="<?php echo set_value('label_customer'); ?>">
			                                        <input type="hidden" name="text_customer_id" id="text_customer_id" value="<?php echo set_value('text_customer_id'); ?>" maxlength="20">

                                                 <input type="hidden" name="max_value_customer" id="max_value_customer" value="" maxlength="20">
										</div>


										<div id="customer_details" class="col-6 input-group-sm">

	                                        <input type="text" class="form-control m-input " name="customer_fname" id="customer_fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?> *" value="<?php echo set_value('customer_fname'); ?>" maxlength="64" required="">
	                                        <?php echo form_error('customer_fname'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="customer_lname" id="customer_lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?> *" value="<?php echo set_value('customer_lname'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('customer_lname'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="customer_address_1" id="customer_address_1" placeholder="<?php echo $this->lang->line('label_address'); ?> *" value="<?php echo set_value('customer_address'); ?>"  required="">

	                                        <input type="hidden" name="customer_latitude" id="customer_latitude" value="<?php echo set_value('customer_latitude'); ?>">

	                                        <input type="hidden" name="customer_longitude" id="customer_longitude" value="<?php echo set_value('customer_longitude'); ?>">
	                                        <?php echo form_error('customer_address'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="customer_address_2" id="customer_address_2" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php echo set_value('customer_address'); ?>" maxlength="64">
	                                        <?php echo form_error('customer_address'); ?>


	                                        <input type="text" class="form-control m-input m-input mt-2" name="customer_city" id="customer_city" placeholder="<?php echo $this->lang->line('label_city'); ?> *" value="<?php echo set_value('customer_city'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('customer_city'); ?>

										</div>

										<div class="col-6 input-group-sm">

	                                        <input type="text" class="form-control m-input  " name="customer_state" id="customer_state" placeholder="<?php echo $this->lang->line('label_state'); ?> *" value="<?php echo set_value('customer_state'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('customer_state'); ?>

	                                        <input type="text" class="form-control m-input  mt-2" name="customer_zipcode" id="customer_zipcode" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="<?php echo set_value('customer_zipcode'); ?>" maxlength="32"  required="">
	                                        <?php echo form_error('customer_zipcode'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="customer_telephone_number" id="customer_telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?> *" value="<?php echo set_value('customer_telephone_number'); ?>" maxlength="14">
	                                        <?php echo form_error('customer_telephone_number'); ?>

	                                        <input type="text" class="form-control m-input  mt-2" name="customer_cellphone_number" id="customer_cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?> *" value="<?php echo set_value('customer_cellphone_number'); ?>" maxlength="14"
	                                        >
	                                        <?php echo form_error('customer_cellphone_number'); ?>

	                                        <input type="text" class="form-control m-input  mt-2" name="customer_lic" id="customer_lic" placeholder="<?php echo $this->lang->line('label_lic_id'); ?>" value="<?php echo set_value('customer_lic'); ?>" maxlength="14">
	                                        <?php echo form_error('customer_lic'); ?>

										</div>
									</div>
								</div>

							</div>

							<!--end::Portlet customers-->

					</div>
					<div class="col-sm-6">
							<!--begin::Portlet ship to-->
							<div class="kt-portlet" style="background-color: #F0F1F6;">


								<div class="kt-portlet__body">
									<div class="row">

										<div class="col-12 input-group-sm">
                                <div class="col-form-label-right d-block w-100 mb-1">
                                    <?php echo $this->lang->line('label_ship_to'); ?>:
                                    <span style = "display:none;" id = "save_cancel_add_shipto">
                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm" id = "cancel_shipto">
                                        <?php echo $this->lang->line('label_cancel'); ?>
                                        </a>

                                        <a href = "javascript:void(0);" class = "btn btn-info float-right btn-sm"  id = "add_new_shipto" style = "margin-right: 11px;">
                                        <?php echo $this->lang->line('label_save'); ?>
                                        </a>
                                    </span>
                                </div>
				                                <input type = "text" class ="form-control m-input" name="shipto_id" id="shipto_id" placeholder="<?php echo $this->lang->line('label_ship_to'); ?>" disabled>
				                                <input type = "hidden" id =  "text_shipto_id" name = "shipto_id">
										</div>

	                                    <div id="shipto_details" class="col-6 input-group-sm">
	                                        <input type="text" class="form-control m-input" name="shipto_fname" id="shipto_fname" placeholder="<?php echo $this->lang->line('label_first_name'); ?> *" value="<?php echo set_value('shipto_fname'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('shipto_fname'); ?>


	                                        <input type="text" class="form-control m-input mt-2" name="shipto_lname" id="shipto_lname" placeholder="<?php echo $this->lang->line('label_last_name'); ?> *" value="<?php echo set_value('shipto_lname'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('shipto_lname'); ?>



	                                        <input type="text" class="form-control m-input mt-2" name="shipto_address" id="shipto_address" placeholder="<?php echo $this->lang->line('label_address'); ?> *" value="<?php echo set_value('shipto_address'); ?>"  required="">
	                                        <input type="hidden" name="shipto_latitude" id="shipto_latitude" value="<?php echo set_value('shipto_latitude'); ?>">
	                                        <input type="hidden" name="shipto_longitude" id="shipto_longitude" value="<?php echo set_value('shipto_longitude'); ?>">
	                                        <?php echo form_error('shipto_address'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="shipto_address_1" id="shipto_address_1" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php echo set_value('shipto_address_1'); ?>" >
	                                        <?php echo form_error('shipto_address_1'); ?>


	                                        <input type="text" class="form-control m-input mt-2" name="shipto_address_2" id="shipto_address_2" placeholder="<?php echo $this->lang->line('label_address'); ?>" value="<?php echo set_value('shipto_address_1'); ?>" >
	                                        <?php echo form_error('shipto_address_1'); ?>
	                                    </div>

	                                    <div class="col-6 input-group-sm">

	                                        <input type="text" class="form-control m-input" name="shipto_sector" id="shipto_sector" placeholder="<?php echo $this->lang->line('label_sector'); ?> *" value="<?php echo set_value('label_sector'); ?>" maxlength="64"  required="">

	                                        <input type="text" class="form-control m-input mt-2" name="shipto_province" id="shipto_province" placeholder="<?php echo $this->lang->line('label_province'); ?> *" value="<?php echo set_value('shipto_province'); ?>" maxlength="64"  required="">
	                                        <?php echo form_error('shipto_province'); ?>

	                                        <input type="text" class="form-control m-input mt-2" name="shipto_telephone_number" id="shipto_telephone_number" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?> *" value="<?php echo set_value('shipto_telephone_number'); ?>" maxlength="18">
	                                        <?php echo form_error('shipto_telephone_number'); ?>


	                                        <input type="text" class="form-control m-input mt-2" name="shipto_cellphone_number" id="shipto_cellphone_number" placeholder="<?php echo $this->lang->line('label_cellphone_number'); ?> *" value="<?php echo set_value('shipto_cellphone_number'); ?>" maxlength="16"
	                                        >
	                                        <?php echo form_error('shipto_cellphone_number'); ?>


	                                        <input type="text" class="form-control m-input mt-2" name="shipto_lic" id="shipto_lic" placeholder="<?php echo $this->lang->line('label_lic_id'); ?>" value="<?php echo set_value('shipto_telephone_number'); ?>" maxlength="18">
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
		                                        <input type="text" class="form-control m-input" name="date" id="date" placeholder="<?php echo $this->lang->line('label_date'); ?>" value="<?php echo set_value('date'); ?>" required="">
		                                        <?php echo form_error('date'); ?>
		                                    </div>
		                                </div>
		                                <div class="form-group m-form__group row">
		                                    <label class="col-xl-4 col-lg-4 col-form-label col-form-label-right">
		                                        <?php echo $this->lang->line('label_due_date'); ?>:
		                                    </label>
		                                    <div class="col-xl-8 col-lg-8 input-group-sm">
		                                        <input type="text" class="form-control m-input" name="due_date" id="due_date" placeholder="<?php echo $this->lang->line('label_due_date'); ?>" value="<?php echo set_value('due_date'); ?>" >
		                                        <?php echo form_error('due_date'); ?>
		                                    </div>
		                                </div>
		                                <script>
		                                       $(document).ready(function(){



		                                           $("#date").datepicker({

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
		                                     $("#due_date").val(m+'/'+d+'/'+y);

		                                   $('#due_date').datepicker('setStartDate',newDate);
		                                      })




		                                      $("#due_date").datepicker({
		                                                            autoclose: true,
		                                                        }).datepicker("setDate", "+30d");


		                                       });
		                                </script>
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

                <button type="button" class="btn btn-success save_invoices">
                    <?php echo $this->lang->line('label_submit'); ?>
                </button>

	      </div>
    </form>
  </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="edit_invoice_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

</div>
<!--end::Modal-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js-bootstrap-css/1.2.1/typeaheadjs.min.css" media="all" rel="stylesheet" type="text/css" />
<style type="text/css" media="screen">
	.dataTables_filter {
	display: none;
	}
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>

 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableinvoices;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#invoices');

		// begin first table
		tableinvoices = table.DataTable({
			responsive: true,
              processing: true,
              serverSide: true,
			ajax: {
				url: 'getInvoices',
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
				{data: 'consignee'},
				{data: 'state'},
				{data: 'invoice_number'},
				{data: 'balance'},
				//{data: 'Actions', responsivePriority: -1},
				{
                   data: function(datos) {
                         var accion = "";

                         accion += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md  edit_invoice' data-toggle='modal' data-target='#new_invoices_model' value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='javascript:void(0);' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_invoices(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableinvoices.search($this.val()).draw();
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



		jQuery(document).ready(function() {

	      $(document).on('click', '.save_invoices', function(e){
	            	//debugger;
	                //alert("hola");
	               //console.log('serialized data', $("#AddDiplo").serialize());
	                $.ajax({
	                url: 'invoices_validate',
	                data: $("#Forminvoices").serialize(),
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



          $(document).on('click', '.edit_invoice', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('invoicesController/edit_Invoice')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idinvoices"]').val(data.id);
	              $('[name="customer_fname"]').val(data.fname);
	              $('[name="customer_lname"]').val(data.lname);
	              $('[name="customer_address_1"]').val(data.address_line1);
	              $('[name="customer_address_2"]').val(data.address_line2);
	              $('[name="customer_city"]').val(data.city);
	              $('[name="customer_state"]').val(data.state);
	              $('[name="customer_zipcode"]').val(data.zipcode);
	              $('[name="customer_telephone_number"]').val(data.telephone_number);
	              $('[name="customer_cellphone_number"]').val(data.cellphone_number);
	              $('[name="customer_lic"]').val(data.lic_id);



	              $('[name="qty"]').val(data.qty);
	              $('[name="recorder_point"]').val(data.recorder_point);
	              $('[name="driver_invoices"]').val(data.driver_invoices);
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



            function delete_invoices(id)
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('invoicesController/delete_invoices')?>/"+id,
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
    tableinvoices.ajax.reload(null,false); //reload datatable ajax
}


var x = 1; //initialize counter for text box
$(document).on('click','.addMore',function(){
    var string = add_more_button();
    $('.childRemove').remove();
    $("#invoice_multiple_items").append(string[0]);
    item_popup(string[1]);
    x++;
    $(this).removeClass('addMore btn-success').addClass('removeMore btn-danger').html('<i class="fa fa-minus"></i>');



});


$(document).on('click','.removeMore',function(){


    $(this).closest('.alldiv').remove();
    if($('.alldiv').length == 1){
        $('.removeMore').addClass('addMore btn-success').removeClass('removeMore btn-danger').html('<i class="fa fa-plus"></i>');
        calculation($(this).data("index"));
        return true;

    }
    /*var count = 0;
    $('input[id^=qty]').each(function(index, item){
        var val = $(item).val();
        if(val > 0){
            count += parseInt(val);
        }
    });
    //alert(count);
    $('#tot_box').val(count);*/

    $('.manage:last').html('<button type="button" class="btn btn-sm btn-success addMore" ><i class="fa fa-plus"></i>'
                                        +'</button>'
                                        + '<button type="button" class="btn btn-sm btn-danger removeMore childRemove"><i class="fa fa-minus"></i>'
                                        +'</button>');


calculation($(this).data("index"));
    //alert("test");
    //console.log($(this).data("index"));
    //$("#tot_box").val($('.removeMore').length);

});

var y=0;
function add_more_button()
{
    y=x-1;
  var mSrting =   '<div class="form-group m-form__group row alldiv">'
                                    + '<label class="col-xl-4 col-lg-4 text-left ">'
                                        + '<div class="m-typeahead">'
                                            + '<input type="text" class="form-control m-input" name="item[]" id="item_'+x+'" placeholder="<?php echo $this->lang->line('label_item'); ?>" maxlength="128" required="" data-index="'+x+'" data-index="0">'
                                        + '</div>'
                                    + '</label>'
                                    + '<label class="col-xl-1 col-lg-1 text-left ">'
                                       + '<input type="text" class="form-control m-input num" name="qty[]" id="qty'+x+'" placeholder="<?php echo $this->lang->line('label_qty'); ?>" maxlength="8" required="" data-parsley-type="number" min="1" value="1" data-index="'+x+'">'
                                    + '</label>'
                                    + '<label class="col-xl-1 col-lg-1 text-left ">'
                                        + '<input type="text" class="form-control m-input num" name="price[]" id="price'+x+'" placeholder="<?php echo $this->lang->line('label_price'); ?>"   maxlength="14" required="" data-parsley-type="number" min="1" value="0.00" data-index="'+x+'">'
                                    + '</label>'
                                    + '<label class="col-xl-1 col-lg-1 text-left ">'
                                        + '<input type="text" class="form-control m-input num" name="discount[]" id="discount'+x+'" placeholder="<?php echo $this->lang->line('label_discount'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+x+'">'
                                    + '</label>'
                                    + '<label class="col-xl-1 col-lg-1 text-left ">'
                                        + '<input type="text" class="form-control m-input num" name="insurance[]" id="insurance'+x+'" placeholder="<?php echo $this->lang->line('label_insurance'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+x+'">'
                                    + '</label>'
                                    + '<label class="col-xl-1 col-lg-1 text-left ">'
                                        + '<input type="text" class="form-control m-input num" name="tax[]" id="tax'+x+'" placeholder="<?php echo $this->lang->line('label_tax'); ?>"  maxlength="14" required="" data-parsley-type="number" min="0" value="0.00" data-index="'+x+'">'
                                    + '</label>'
                                    + '<label class="col-xl-2 col-lg-2 text-left ">'
                                        + '<input type="text" class="form-control m-input num" name="total[]" id="total'+x+'" placeholder="<?php echo $this->lang->line('label_total'); ?>"  maxlength="14" required="" readonly  data-parsley-type="number" min="0" value="0.00" data-index="'+x+'">'
                                    + '</label>'
                                    + '<div class="col-xl-1 col-lg-1 manage">'
                                        + '<button type="button" class="btn btn-sm btn-success addMore" ><i class="fa fa-plus"></i>'
                                        +'</button>'
                                        + '<button type="button" class="btn btn-sm btn-danger removeMore childRemove"><i class="fa fa-minus"></i>'
                                        +'</button>'
                                    + '</div>'
                                + '</div>'




                                return [mSrting,x];


    /*}*/



    //item_popup(id)

}


/* reinit item dropdown */
function item_popup(id){

    $("#item_"+id).off();
    var e = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace("description"),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            'cache': false,
            url: '<?php echo base_url('InvoicesController/get_item_list_json') ?>/%QUERY',
            wildcard: '%QUERY',
            filter: function (data) {
                return data;
            }
        }
    });

    $("#item_"+id).typeahead(null, {
        name: "best-pictures",
        display: "description",
        /*valueKey: "price"*/
        source: e,
        limit: Infinity,
        templates: {
            suggestion: Handlebars.compile("<div>{{description}} ({{item_number}})</div>")
        }
    }).on('typeahead:selected', function (e, suggestion, name) {
        $('#price'+$(this).data("index")).val(suggestion.price);
        calculation($(this).data("index"));
        //console.log($(this).closest("div").find("input[id^=item_]").val());
    });


    $('input[id=qty'+id+'], input[id=price'+id+'], input[id=insurance'+id+'], input[id=discount'+id+'], input[id=tax'+id+']').on("change", function(e){
        calculation($(this).data("index"));
    });


}

/* function for calculation */
function calculation(id) {

    var total = 0;
    total = parseFloat($('#qty'+id).val()) * parseFloat($('#price'+id).val());
    total = total - parseFloat($('#discount'+id).val());
    total = total + parseFloat($('#insurance'+id).val());
    total = total + parseFloat($('#tax'+id).val());
    if(isNaN(total.toFixed(2)) == false){
    $('#total'+id).val(total.toFixed(2));

    }

    var sum =0;
    var total_qty = 0;
    $('input[id^=total]').each(function(index, item){
        var val = $(item).val();
        if(val){
            sum+=parseFloat(val);
        }
    });
    if(isNaN(sum.toFixed(2)) == false){
    $('#total').html("$"+sum.toFixed(2));
   // $('#sub_total').val(sum.toFixed(2));
    }

    $('input[id^=qty]').each(function(index, item){
        var val = $(item).val();
        if(val){
            total_qty+=parseInt(val);
        }
    });
    if(isNaN(total_qty) == false){
    $('#tot_box').val(total_qty);
    }
    bottom_calculation();
}

$("#sub_total, #final_tax, #final_discount, #final_insurance, #final_payment, #final_balance").on("change", function(){
    bottom_calculation()
});


/* function for calculation */
function bottom_calculation() {
    var sub_total =0;
    $('input[id^=total]').each(function(index, item){
        var val = $(item).val();
        if(val){
            sub_total+=parseFloat(val);
        }
    });
    if(isNaN(sub_total.toFixed(2)) == false){
    $('#total').html("$"+sub_total.toFixed(2));
    $('#balance').html("$"+sub_total.toFixed(2));
    //$('#sub_total').val(sub_total.toFixed(2));
    }

    var final_tax =0;
    $('input[id^=tax]').each(function(index, item){
        var val = $(item).val();
        if(val){
            final_tax+=parseFloat(val);
        }
    });
    if(isNaN(final_tax.toFixed(2)) == false){
    $('#final_tax').val(final_tax.toFixed(2));
    }

    /*sub_total*/
    var sub_total =0;
    $('input[id^=total]').each(function(index, item){
        var val = $(item).val();
        if(val){
            sub_total+=parseFloat(val);
        }
    });
    if(isNaN(final_tax.toFixed(2)) == false){
    $('#sub_total').val(sub_total.toFixed(2));
    }

    var final_discount =0;
    $('input[id^=discount]').each(function(index, item){
        var val = $(item).val();
        if(val){
            final_discount+=parseFloat(val);
        }
    });
    if(isNaN(final_discount.toFixed(2)) == false){

    $('#final_discount').val(final_discount.toFixed(2));
    }
    var final_insurance =0;
    $('input[id^=insurance]').each(function(index, item){
        var val = $(item).val();
        if(val){
            final_insurance+=parseFloat(val);
        }
    });
    if(isNaN(final_insurance.toFixed(2)) == false){
    $('#final_insurance').val(final_insurance.toFixed(2));
    }

    var final_balance = ((sub_total + final_tax + final_insurance) - final_discount);
    if($("#final_payment").val()){
        final_balance = sub_total - $("#final_payment").val();
    }

    if(isNaN(final_balance.toFixed(2)) == false){
    $('#final_balance').val(final_balance.toFixed(2));
    }
}

/* show any error */
function show_error(message){
    swal({
      title: '',
      html: ''+message,
      type: 'error',
          //timer: 4000,
          confirmButtonColor: '#B92D2E',
      })
}

/*function edit_invoice(id)
{
	//alert("probndo");
     $.ajax({
            url:  "<?php //echo base_url(); ?>InvoicesController/get_invoice_details_ajax/"+id,
            type: "GET",
            success: function(data)
            {
            	//debugger;
                //console.log(data);
                $("#edit_invoice_model").html(data);
                $("#edit_invoice_model").modal('show');

            },
                error: function(jqXHR, textStatus, errorThrown){
            },
                complete: function(){
            }
        }); // END OF AJAX CALL
}*/


    $(document).on('click','#add_new_invoice',function(){
        clear_form();
    });


    $(document).on('click','#add_new_customer',function(){

        var data = {
            customer_fname:$("#customer_fname").val(),
            customer_lname:$("#customer_fname").val(),
            customer_address_line_1:$("#customer_address_1").val(),
            customer_address_line_2:$("#customer_address_2").val(),
            customer_latitude:$("#customer_latitude").val(),
            customer_longitude:$("#customer_longitude").val(),
            customer_city:$('[name="customer_city"]').val(),
            customer_state:$('[name="customer_state"]').val(),
            customer_zipcode:$('[name="customer_zipcode"]').val(),
            customer_telephone_number:$("#customer_telephone_number").val(),
            customer_cellphone_number:$("#customer_cellphone_number").val(),
            customer_lic:$("#customer_lic").val()
        };
       // console.log($("#max_value_customer").val());
        var url  = "<?php echo site_url('InvoicesController/create_invoice_customer')?>";
        ajaxCall(url,data,function(response){
	              if(response.st == 0)
	                {
	                  //alert(data.msg);
	                  //alert('st 0');
	                // $('.validation-error').html(data.msg);
					Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: response.msg,
					  //footer: '<a href>Why do I have this issue?</a>'
					})

	                }
	              if(response.st == 1)
	              {
	              	//$("#text_customer_id").val(response.data.Cust_ID);
                              //  $("#save_cancel_add_customer").hide();
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
					  text: response.msg,
					  //footer: '<a href>Why do I have this issue?</a>'
					})
	                    setTimeout(function(){
	                  		location.reload();
	                   },1500);
	              }

        });

        return false;
    });


    $(document).on('click','#add_new_shipto',function(){
        var data = {
            customer_id:$("#text_customer_id").val(),
            shipto_fname:$("#shipto_fname").val(),
            shipto_lname:$("#shipto_lname").val(),
            shipto_address:$("#shipto_address").val(),
            shipto_address_1:$("#shipto_address_1").val(),
            shipto_address_2:$("#shipto_address_2").val(),
            shipto_latitude:$("#shipto_latitude").val(),
            shipto_longitude:$("#shipto_longitude").val(),
            shipto_province:$("#shipto_province").val(),
            shipto_sector:$("#shipto_sector").val(),
            shipto_telephone_number:$("#shipto_telephone_number").val(),
            shipto_cellphone_number:$("#shipto_cellphone_number").val(),
            shipto_lic:$("#shipto_lic").val(),
        };
        var url  = "<?php echo site_url('InvoicesController/create_invoice_shipto')?>";
        ajaxCall(url,data,function(response){
	              if(response.st == 0)
	                {
	                  //alert(data.msg);
	                  //alert('st 0');
	                // $('.validation-error').html(data.msg);
					Swal.fire({
					  type: 'error',
					  title: 'Oops...',
					  text: response.msg,
					  //footer: '<a href>Why do I have this issue?</a>'
					})

	                }
	              if(response.st == 1)
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
					  text: response.msg,
					  //footer: '<a href>Why do I have this issue?</a>'
					})
	                    setTimeout(function(){
	                  		location.reload();
	                   },1500);
	              }

        });

        return false;
    });



    $(document).on('click','#typeahead_add_new_shipto',function(){

        $("#shipto_details input[type = 'text']").prop('disabled',false).val('');
        $("#shipto_fname").focus();
        $("#shipto_id").val('');
        $("#save_cancel_add_shipto").show();

    });

    $(document).ready(function(){
        clear_form();

    });


    function clear_form(){

        $('input[type = "text"]').not("#user,#date,#due_date,.alldiv input[type = 'text'],#final_payment").val('');
        $("#customer_details input[type = 'text']").prop('disabled',true);
        $("#shipto_details input[type = 'text']").prop('disabled',true);
        $('input[type = "text"]').attr('data-parsley-error-message',"");
        $("#driver_id").attr('data-parsley-error-message',"");
        $("#edit_driver_id").attr('data-parsley-error-message',"");
        $("select").prop("selectedIndex", 0);
        $("#save_cancel_add_customer").hide();
        $("#save_cancel_add_shipto").hide();
        item_popup('0');

        }

jQuery(document).ready(function() {
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
    $("#customer_id").typeahead(null,{
        name: "best-pictures",
        display: "name",
        valueKey: "Cust_ID",
        source: e,
        limit: Infinity,
        templates: {
            suggestion: Handlebars.compile("<div style = 'font-weight: bold;'>{{name}},&nbsp;&nbsp;&nbsp;{{address_line1}},&nbsp;&nbsp;&nbsp;{{city}},&nbsp;&nbsp;&nbsp;{{telephone_number}})</div>"),
            footer:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="typeahead_add_new_customer">Add New Customer</a><div>',
            notFound:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="typeahead_add_new_customer">Add New Customer</a><div>',
        }
    }).on('typeahead:selected', function (e, suggestion, name) {



        clear_form();
        $("#customer_details input[type = 'text']").prop('disabled',false);

        get_customer_data(suggestion.Cust_ID);

        console.log(name);
        //console.log($(this).closest("div").find("input[id^=item_]").val());
    });
});

              $(document).on('click','#typeahead_add_new_customer',function(){

                            $("#customer_id").typeahead('close');
                            $("#save_cancel_add_customer").show();
                            $("#customer_details input[type = 'text']").prop('disabled',false).val('');
                            $("#customer_fname").focus();
                            $("#customer_id").val('');
                            $("#shipto_id").off();
                            $('input[type = "text"]').not("#user,#date,#due_date,.alldiv input[type = 'text'],#final_payment").val('');


                        });

	function get_customer_data(id){
		//alert("probando");

	    $("#save_cancel_add_customer , #save_cancel_add_shipto").hide();

	    $.ajax({
	        url:  "<?php echo base_url(); ?>InvoicesController/get_customer_data/"+id,
	        type: "GET",
	        success: function(data)
	        {
	            data = JSON.parse(data);
	            if(data.result){


	                $("#text_customer_id").val(data.result.Cust_ID);
	                $("#customer_fname").val(data.result.fname);
	                $("#customer_lname").val(data.result.lname);
	                $("#customer_email").val(data.result.email);
	                $("#customer_address_1").val(data.result.address_line1);
	                $("#customer_latitude").val(data.result.latitude);
	                $("#customer_longitude").val(data.result.longitude);
	                $('[name="customer_city"]').val(data.result.city);
	                $('[name="customer_state"]').val(data.result.state);
	                $("#customer_country").val(data.result.country);
	                $('[name="customer_zipcode"]').val(data.result.zipcode);
	               // $("#customer_borough").val(data.result.borough);
	                $("#customer_telephone_number").val(data.result.telephone_number);
	                $("#customer_cellphone_number").val(data.result.cellphone_number);
	                $("#customer_lic").val(data.result.lic_id);
	                $("#customer_address_2").val(data.result.address_line2);

	                $("#shipto_id").prop('disabled',false);


	                getShiptoList(data.result.Cust_ID);
	            } else {

	                $("#customer_details input[type = 'text']").val('');


	            }
	        },
	        error: function(jqXHR, textStatus, errorThrown){
	            $("#customer_details input[type = 'text']").val('');

	        },
	        complete: function(){
	            if ($("#customer_telephone_number").val().length > 0 ||
	                $("#customer_cellphone_number").val().length > 0)
	            {
	                // If any field is filled, remove required attr
	                $("#customer_telephone_number, #customer_cellphone_number").removeAttr("required");
	            } else {
	                // if all fields are empty, set attr required
	                $("#customer_telephone_number, #customer_cellphone_number").attr("required", "required");
	            }
	        }
	    }); // END OF AJAX CALL

	    // $.ajax({
	    //     url:  "<?php echo base_url(); ?>company/invoices/get_customer_shipto/"+id,
	    //     type: "GET",
	    //     success: function(data)
	    //     {
	    //         $("#shipto_id").empty().append(new Option("<?php echo $this->lang->line('label_ship_to'); ?>", ""));
	    //         data = JSON.parse(data);
	    //         if(data.result){
	    //             var first = "";
	    //             $.each(data.result, function() {
	    //                 $("#shipto_id").append(new Option(this.fname + " " +this.lname , this.id));
	    //                 if(first == ""){
	    //                    first = this.id;
	    //                 }
	    //             });
	    //         }

	    //         $('#shipto_id').val($('#shipto_id option[value="'+first+'"]').val()).trigger('change');


	    //         get_shipto_data();
	    //     },
	    //     error: function(jqXHR, textStatus, errorThrown){

	    //     },
	    //     complete: function(){
	    //     }
	    // }); // END OF AJAX CALL
	}

	$(document).on('click','#cancel_shipto,#cancel_customer',function(){
        if($(this).attr('id') == 'cancel_customer'){

            $("#customer_details input[type = 'text']").val('').prop('disabled',true);
            $("#save_cancel_add_customer").hide();

            $("#customer_id").focus();

        }else{

        $("#shipto_id").focus();
        $("#save_cancel_add_shipto").hide();

        }

        $("#shipto_details input[type = 'text']").val('').prop('disabled',true);

    });

	/*shipTo*/

function getShiptoList(id){


    $('#shipto_id').off();

    var e = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace("name"),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            cache: false,
            url: '<?php echo base_url('InvoicesController/get_shipto_data') ?>/'+id,
            filter: function (data) {
           // debugger;
                return data;
            }
        }
    });




    $("#shipto_id").typeahead(null,{
        name: "best-pictures",
        display: "name",
        valueKey: "customer_id",
        source: e,
        limit: Infinity,
        templates: {

            suggestion: Handlebars.compile("<div style = 'font-weight: bold;'>{{fname}} {{lname}} {{address_line1}} {{address_line2}}</div>"),
            footer:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="typeahead_add_new_shipto">Add New Shipto</a><div>',
            notFound:'<div><a href="javascript:void(0);" class="btn btn-info btn-sm" id="typeahead_add_new_shipto">Add New Shipto</a><div>',
        }
    }).on('typeahead:selected', function (e, suggestion, name) {
        $("#shipto_details input[type = 'text']").prop('disabled',false);

        get_shipto_data(suggestion.customer_id)


        console.log(name);
        //console.log($(this).closest("div").find("input[id^=item_]").val());
    });

}


function get_shipto_data(id){

    $("#shipto_details input[type = 'text']").prop('disabled',false);

    $.ajax({
        url:  "<?php echo base_url(); ?>InvoicesController/get_shipto_data/"+id,
        type: "GET",
        success: function(data)
        {
            data = JSON.parse(data);
           // debugger;
            console.log(data);
            if(data.result){

                $("#text_shipto_id").val(data.result.id);
                $("#shipto_fname").val(data.result.fname);
                $("#shipto_lname").val(data.result.lname);
                $("#shipto_address").val(data.result.address);
                $("#shipto_address_1").val(data.result.address_line1);
                $("#shipto_address_2").val(data.result.address_line2);
                $("#shipto_latitude").val(data.result.latitude);
                $("#shipto_longitude").val(data.result.longitude);
                $("#shipto_city").val(data.result.city);
                $("#shipto_state").val(data.result.state);
                $("#shipto_country").val(data.result.country);
                $("#shipto_zipcode").val(data.result.zipcode);
                $("#shipto_telephone_number").val(data.result.telephone_number);
                $("#shipto_cellphone_number").val(data.result.cellphone_number);
                $("#shipto_province").val(data.result.province);
                $("#shipto_sector").val(data.result.sector);
                $("#shipto_lic").val(data.result.lic_id);

            } else {
                $("#text_shipto_id").val("<?php echo $next_shipto_id; ?>");
               $("#shipto_details input[type = 'text']").prop('disabled',false).val('');
            }
        },
        error: function(jqXHR, textStatus, errorThrown){
            $("#text_shipto_id").val("<?php echo $next_shipto_id; ?>");
            $("#shipto_details input[type = 'text']").prop('disabled',false).val('');

        },
        complete: function(){
           /* if(is_submited){
                $('.add_invoices').parsley().validate()
            }*/
        }
    }); // END OF AJAX CALL
}


            $(document).ready(function()
            {


                getMapPickup('customer_address_1','customer_state','customer_city','customer_zipcode');
                getMapPickup('shipto_address','shipto_sector','shipto_province','');


            });




            function getMapPickup(addressed,ad_states,ad_city,ad_zipcode){

                var places = new google.maps.places.Autocomplete(document.getElementById(addressed));
                google.maps.event.addListener(places, 'place_changed', function () {

                    var place = places.getPlace();
                    var address = place.formatted_address;
                    var street_number = '';

                    ad_states  = ad_states == '' ? 'noneoftheid':ad_states;
                    ad_city  = ad_city == '' ? 'noneoftheid':ad_city;
                    ad_zipcode  = ad_zipcode == '' ? 'noneoftheid':ad_zipcode;



                    for (var i = 0; i < place.address_components.length; i++) {

                        for (var j = 0; j < place.address_components[i].types.length; j++) {
                              //console.log((place.address_components[i]);

                            if(place.address_components[i].types[j] == "street_number"){
                                street_number = place.address_components[i].long_name;
                            }
                            if(place.address_components[i].types[j] == "route"){

                                $("#"+addressed).val(street_number+' '+place.address_components[i].long_name);
                            }
                            if (place.address_components[i].types[j] == "postal_code") {
                                $("#"+ad_zipcode).val(place.address_components[i].long_name);
                                //$("#zipcode").attr('readonly','readonly').focus();
                            }

                            if (place.address_components[i].types[j] == "administrative_area_level_1") {

                                $("#"+ad_states).val(place.address_components[i].short_name);
                                //$("#state").attr('readonly','readonly').focus();
                            }

                            if (place.address_components[i].types[j] == "country") {
                                $("#pickup_country").val(place.address_components[i].long_name);
                                //$("#country").attr('readonly','readonly').focus();
                            }

                            if (place.address_components[i].types[j] == "locality") {
                                $("#"+ad_city).val(place.address_components[i].long_name);
                                //$("#city").attr('readonly','readonly').focus();
                            }

                        }

                    }

                });

                //$("#"+myId).next('input').focus();
            }
</script>

<!-- https://embarquesoft.net/company/customer -->