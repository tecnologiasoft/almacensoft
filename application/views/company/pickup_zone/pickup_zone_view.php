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
										<i class="m-menu__link-icon flaticon-folder-1"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										<?php echo $this->lang->line('title_pickup_zone_list'); ?>
									</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-wrapper">
										<div class="kt-portlet__head-actions">
											<div class="dropdown dropdown-inline">
												<button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="la la-download"></i> Export
												</button>
											</div>
											&nbsp;
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_pickup_zone_model">
								             <i class="la la-plus"></i> <?php echo $this->lang->line('title_add_new_pickup_zone'); ?>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">

								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="pickup_zone">
									<thead>
										<tr>
											<th>#</th>
											<th><?php echo $this->lang->line('label_country'); ?></th>
											<th><?php echo $this->lang->line('label_zone'); ?></th>
											<th><?php echo $this->lang->line('label_description'); ?></th>
											<th><?php echo $this->lang->line('label_stops'); ?></th>
											<th><?php echo $this->lang->line('label_validation'); ?></th>
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
	#new_pickup_zone_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
	#Formpickup_zone .astric{color: red;}
</style>

<!-- Modal -->
<div class="modal fade" id="new_pickup_zone_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('title_add_new_pickup_zone'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		    <form method="post" id="Formpickup_zone" role="form" name="Formpickup_zone" class="kt-form kt-form--label-right">
		    	<div class="row">
		    		<div class="col-sm-12">

                  <!-- <div class="validation-error"></div> -->
		    		</div>
                </div>
				<div class="row">
				<!--begin::Form-->
					<div class="col-sm-12">
							<div class="kt-portlet__body">
								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_country'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="country" id="country" placeholder="<?php echo $this->lang->line('label_country'); ?>" value="" maxlength="64">

									</div>
								</div>
								<div class="form-group row">
									<label for="fname" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_zone'); ?>:
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="zone" id="zone" placeholder="<?php echo $this->lang->line('label_zone'); ?>" value="" maxlength="64">

									</div>
								</div>

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_description'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="description" id="description" placeholder="<?php echo $this->lang->line('label_description'); ?>" value="" >
									</div>
								</div>


								<div class="form-group row">
									<label for="telephone_number" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_validation'); ?>: </label>
									<div class="col-8">
									    <div class="kt-radio-inline">
											<label class="kt-radio">
												<input name="validation" value="Yes" type="radio"
												<?php if($result['validation'] == "No") echo "checked"; ?>>
                                                <?php echo $this->lang->line('label_yes'); ?>
                                                <span></span>
											</label>
											<label class="kt-radio">
												 <input name="validation" value="No" type="radio" <?php if($result['validation'] == "No") echo "checked"; ?>>
                                             <?php echo $this->lang->line('label_no'); ?>
                                             <span></span>
											</label>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="branch" class="col-4 col-form-label">
										<span id="astric">*
										</span> <?php echo $this->lang->line('label_branch'); ?>: </label>
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

								<div class="form-group row">
									<label for="lname" class="col-4 col-form-label">
										<span id="astric">*</span>
										<?php echo $this->lang->line('label_stops'); ?>
									</label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="stops" id="stops" placeholder="<?php echo $this->lang->line('label_stops'); ?>" value="" maxlength="64">

									</div>
								</div>

					        </div>
					</div>

				 <input type="hidden" id="idpickup_zone" name="idpickup_zone" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="savepickup_zone" id="savepickup_zone" class="btn btn-success savepickup_zone"><?php echo $this->lang->line('label_submit'); ?></button>
      </div>
    </div>
		    </form>
  </div>
</div>


 <script src="<?php echo base_url(); ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>

<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>


<script>
	var tablepickup_zone;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#pickup_zone');

		// begin first table
		tablepickup_zone = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getPickupZone',
				type: 'POST',
				data: {
					pagination: {
						perpage: 50,
					},
				},
			},
			columns: [
				{data: 'id'},
				{data: 'country'},
				{data: 'zone'},
				{data: 'description'},
				{data: 'stops'},
				{data: 'validation'},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_pickup_zone' data-toggle='modal' data-target='#new_pickup_zone_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_pickup_zone(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


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



		$(document).ready(function($) {

		/*$("#FormCustomer").validate({
			rules:{
		company_name:{
		required:true
			}
		}
		});*/



      $(document).on('click', '.savepickup_zone', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'PickupZone_validate',
                data: $("#Formpickup_zone").serialize(),
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



          $(document).on('click', '.edit_pickup_zone', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('PickupZoneController/edit_PickupZone')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {
//alert($("input[type='radio']:checked").val(data.validation));
	              $('[name="idpickup_zone"]').val(data.id);
	              $('[name="description"]').val(data.description);
	              $('[name="stops"]').val(data.stops);
	              $('[name="zone"]').val(data.zone);
	              $('[name="validation"]').val(data.validation);
	              $('[name="country"]').val(data.country);
	              $('[name="branch"]').val(data.id_branch);
	              $("[name='validation']:checked").val(data.validation);

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



            function delete_pickup_zone(id)
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('PickupZoneController/delete_PickupZone')?>/"+id,
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
    tablepickup_zone.ajax.reload(null,false); //reload datatable ajax
}

</script>

<!-- https://embarquesoft.net/company/customer -->