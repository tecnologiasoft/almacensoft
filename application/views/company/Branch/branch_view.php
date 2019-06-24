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
										<i class="fas fa-code-branch" style="color: #265791;"></i>
									</span>
									<div class="col-sm-4">
										<h3 class="kt-portlet__head-title" style="color: #265791;">
											 <?php echo $this->lang->line('title_branch_list'); ?>
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
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_branch_model">
								             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_branch'); ?>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="branch">
									<thead>
										<tr>
											<th><?php echo $this->lang->line('label_name'); ?></th>
											<th><?php echo $this->lang->line('label_address'); ?></th>
											<th><?php echo $this->lang->line('label_telephone_number'); ?></th>
											<th><?php echo $this->lang->line('label_telephone_number'); ?></th>
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
	#new_branch_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
	#FormBranch .astric{color: red;}
	 #branch_wrapper table tr th{color: #265791; font-weight:bold;}
 .col-form-label{color: #265791; font-weight:bold!important;}
</style>

<!-- Modal -->
<div class="modal fade" id="new_branch_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content pac-container">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #265791;"><i class="fas fa-code-branch" style="color: #265791;"></i> <?php echo $this->lang->line('title_add_new_branch'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		    <form method="post" id="FormBranch" role="form" name="FormBranch" class="kt-form kt-form--label-right">
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
									<label for="example-text-input" class="col-4 col-form-label"><span id="astric">*</span> <?php echo $this->lang->line('label_branch_id').'#'; ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="branch_id" id="branch_id" placeholder="<?php echo $this->lang->line('label_branch_id'); ?>" value="<?php echo $max_value; ?>" maxlength="128" readonly>
                                          <input class="form-control" type="text" name="cref" value="<?php echo  $cref->id; ?>" id="cref" readonly>
                                        
									</div>
								</div>
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">
										<span id="astric">*</span> 
										<?php echo $this->lang->line('label_branch').' '.$this->lang->line('label_name'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="name" id="name" placeholder="<?php echo $this->lang->line('label_name'); ?>"  maxlength="128" >                                  

									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label">
										<span id="astric">*</span> 
										<?php echo $this->lang->line('label_address_1'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="address_line_1" id="address" placeholder="<?php echo $this->lang->line('label_address_1'); ?>" value="" maxlength="256">

									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<span id="astric">*</span> 
										<?php echo $this->lang->line('label_address_2'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="address_line_2" id="address_line_2" placeholder="<?php echo $this->lang->line('label_address_2'); ?>" value="" maxlength="256">
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line1" class="col-4 col-form-label"> 
										<span id="astric">*</span> 
										<?php echo $this->lang->line('label_city'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="city" id="locality" placeholder="<?php echo $this->lang->line('label_city'); ?>" value=""  maxlength="64">




									</div>
								</div>

								<div class="form-group row">
									<label for="apartment" class="col-4 col-form-label"> 
										<?php echo $this->lang->line('label_state'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="state" id="administrative_area_level_1" placeholder="<?php echo $this->lang->line('label_state'); ?>" value="" maxlength="64">
									</div>
								</div>
					        </div>
					</div>

					<div class="col-sm-6">
							<div class="kt-portlet__body">
								<div class="form-group row">
									<label for="cellphone_number" class="col-4 col-form-label"> 
										<?php echo $this->lang->line('label_zipcode'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zipcode" id="postal_code" placeholder="<?php echo $this->lang->line('label_zipcode'); ?>" value="" maxlength="32">
									</div>
								</div>
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_telephone_number'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="telephone_number1" id="telephone_number1" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" value="" maxlength="16">
									</div>
								</div>
								<div class="form-group row">
									<label for="website" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_telephone_number'); ?>: 
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="telephone_number2" id="telephone_number2" placeholder="<?php echo $this->lang->line('label_telephone_number'); ?>" maxlength="16">
									</div>
								</div>


								<div class="form-group row">
									<label for="lic_id" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_country'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="country" id="country" placeholder="<?php echo $this->lang->line('label_country'); ?>" value="<?= set_value('country')?>">
									</div>
								</div>

								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label"> 
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_print'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="print" value="Yes" type="radio" checked>
                                                <?php echo $this->lang->line('label_yes'); ?>
                                                <span></span>
											</label>
											<label class="kt-radio">
												 <input name="print" value="Yes" type="radio">
                                             <?php echo $this->lang->line('label_no'); ?>
                                             <span></span>
											</label>
										</div>
									</div>
								</div>
					        </div>
				    </div>
				 <input type="hidden" id="idBranch" name="idBranch" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveBranch" id="saveBranch" class="btn btn-success saveBranch"><?php echo $this->lang->line('label_submit'); ?></button>
      </div>
    </div>
		    </form>
  </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>



 <!-- <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/formValidation.min.js') ?>"></script>

 <script type="text/javascript" src="<?php //echo base_url('assets/formvalidation/js/framework/bootstrap.min.js') ?>"></script> -->
<script>
	var tableBranch;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#branch');

		// begin first table
		tableBranch = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getBranch',
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'name'},
				{data: 'address'},
				{data: 'telephone_number1'},
				{data: 'telephone_number2'},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_branch' data-toggle='modal' data-target='#new_branch_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_branch(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


                       return accion;
                    },
				},
			],

		});
			$('#generalSearchTable').on('keyup', function(e) {
				var $this = $(this);
				tableBranch.search($this.val()).draw();
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



      $(document).on('click', '.saveBranch', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'branch_validate',
                data: $("#Formbranch").serialize(),
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



          $(document).on('click', '.edit_branch', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('branchController/edit_branch')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idbranch"]').val(data.id);
	              $('[name="item_number_hdn"]').val(data.item_number);
	              $('[name="description"]').val(data.description);
	              $('[name="price"]').val(data.price);
	              $('[name="cost"]').val(data.cost);
	              $('[name="type"]').val(data.type);
	              $('[name="qty"]').val(data.qty);
	              $('[name="recorder_point"]').val(data.recorder_point);
	              $('[name="driver_branch"]').val(data.driver_branch);
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


            
            function delete_branch(id) 
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('branchController/delete_branch')?>/"+id,
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
    tablebranch.ajax.reload(null,false); //reload datatable ajax
}

            var componentForm = {
                //street_number: 'short_name',
                //route: 'long_name',
                locality: 'long_name', // city
                administrative_area_level_1: 'long_name', // State
                //address: 'long_name', // address
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