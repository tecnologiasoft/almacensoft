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
											<?php echo $this->lang->line('title_warehouse_list'); ?>
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												&nbsp;
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_Warehouse_model">
									             <i class="la la-plus"></i> <?php echo $this->lang->line('label_add_warehouse'); ?>
												</button>


											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="warehouse">
										<thead>
											<tr>
												<th><?php echo $this->lang->line('label_item_number'); ?></th>
												<th><?php echo $this->lang->line('label_description'); ?></th>
												<th><?php echo $this->lang->line('label_price'); ?></th>
												<th><?php echo $this->lang->line('label_cost'); ?></th>
												<th><?php echo $this->lang->line('label_type'); ?></th>
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
	#new_Warehouse_model .col-form-label{color: #265791;
    /*font-weight: bold;*/ }
/* 	#new_customer_model span #astric {color: red;} */
</style>

<!-- Modal -->
<div class="modal fade" id="new_Warehouse_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $this->lang->line('title_add_new_warehouse'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

		    <form method="post" id="FormWarehouse" role="form" name="FormWarehouse" class="kt-form kt-form--label-right">
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
										<input type="text" class="form-control m-input" name="item_number" id="item_number" placeholder="<?php echo $this->lang->line('label_item_number'); ?>" value="<?php echo $max_value; ?>" maxlength="128" readonly>
                                          <input type="hidden" name="item_number_hdn" id="item_number_hdn" value="<?php echo $max_value; ?>">
                                          <input class="form-control" type="text" name="cref" value="<?php echo  $cref->id; ?>" id="cref" readonly>

									</div>
								</div>

								<div class="form-group row">
									<label for="country" class="col-4 col-form-label"><span id="astric">*</span> Country: </label>
									<div class="col-8">
                                        <select class="form-control " name="country" id="country">
                                        	 <option value="">Seleccione...</option>

										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="company_name" class="col-4 col-form-label">* <?php echo $this->lang->line('label_warehouse'); ?>: </label>
									<div class="col-8">
										<input type="text" class="form-control m-input" name="warehouse" id="warehouse" placeholder="<?php echo $this->lang->line('label_warehouse'); ?>" value="" tabindex = "1">
									</div>
								</div>
								<div class="addressGoogle">

									<div class="form-group row">
										<label for="address_line1" class="col-4 col-form-label"><span id="astric">*</span> Address: </label>
										<div class="col-8">
											<input class="form-control" name="address_line1" type="text" value="" id="address" placeholder="Address">
										</div>
									</div>
								</div>

                                <div class="addressLocal">
									<div class="form-group row">
										<label for="address_line1" class="col-4 col-form-label"><span id="astric">*</span> Address: </label>
										<div class="col-8">

											 <input type="text" class="form-control m-input" name="address_line1" id="address" placeholder="Adress" value="" >
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label for="address_line2" class="col-4 col-form-label"> Address 2: </label>
									<div class="col-8">
										<input class="form-control" name="address_line2" type="text" value="" id="address_line2" placeholder="Address">
									</div>
								</div>

								<div class="usa">
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
								</div>
								<div class="rd">
									<div class="form-group row">
										<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Provincia: </label>
										<div class="col-8">

											<select name="provincia" class="form-control" id="provincia"></select>
										</div>
									</div>

									<div class="form-group row">
										<label for="state" class="col-4 col-form-label"><span id="astric">*</span> Municipio: </label>
										<div class="col-8">
											<select name="municipio" class="form-control" id="municipio"></select>

										</div>
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

					</div>
				</div>
				 <input type="hidden" id="idWarehouse" name="idWarehouse" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('label_back'); ?></button>
        <button type="submit" name="saveWarehouse" id="saveWarehouse" class="btn btn-success saveWarehouse"><?php echo $this->lang->line('label_submit'); ?></button>
      </div>
    </div>
		    </form>
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
<link href="<?php echo base_url(); ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?php echo base_url(); ?>assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBkyo_LbEsLKOPAjmVhZkI9LvNbT9Kgfvc&libraries=places"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/vendors/sweetalert/dist/sweetalert2.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.geocomplete.js"></script>
<script>
	var tablewarehouse;
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#warehouse');

		// begin first table
		tablewarehouse = table.DataTable({
			responsive: true,
			ajax: {
				url: 'getWarehouse',
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
				{data: 'address_line2'},
				{data: 'city'},
				{data: 'state'},
				{
                   data: function(datos) {
                         var accion = "";
                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md edit_Warehouse' data-toggle='modal' data-target='#new_Warehouse_model'  value=" + datos.id + "  title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-edit'></i></a> ";

                         accion += "<a href='#' class='btn btn-sm btn-clean btn-icon btn-icon-md' value=" + datos.id + " onclick='delete_warehouse(\"" + datos.id + "\")' title='Editar' role='button' data-id=\"" + datos.id + "\"><i class='la la-trash'></i></a> ";


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

              $(".usa").css("display", "block");
		      $(".rd").css("display", "none");
		      $(".addressLocal").css("display", "none");
		      $(".addressGoogle").css("display", "block");

		  $("#country").change(function(event) {
              event.preventDefault();
		    if ($( "#country" ).val() == "US") {
		 	//alert("prueba");
		      $(".usa").css("display", "block");
		      $(".rd").css("display", "none");
		      $(".addressGoogle").css("display", "block");
		      $(".addressLocal").css("display", "none");

		      }else if($( "#country" ).val() == "DO"){
		      $(".rd").css("display", "block");
		      $(".usa").css("display", "none");
		      $(".addressGoogle").css("display", "none");
		      $(".addressLocal").css("display", "block");
		     // $('input[type="text"]').val('');
		      }

			});






           /* var $getAddress = $("#address_line1");

             $getAddress.select2({
                           // theme: "bootstrap",
                            name: "address_line1",
                            placeholder: "Address",
                            ajax:{
                                url: 'getAddress',
                                type: "post",
                                dataType: "json",
                                data: function(params){
                                    return{
                                buscador: params.term
                               };
                                },
                                processResults: function(data){
                                    var results = [];
                                    var html_res = "<option></option>";

                                    $.each(data, function(index, item){
                                         html_res += "<option co='" + item.co + "' data-id='" + item.ca + "' value='" + item.id + "'>" + item.test + "</option>";
                                            results.push({
                                                id: item.id,
                                                text: item.test,
                                               // co: item.co,
                                            });
                                    });
                                        $getAddress.html(html_res);

                                    return{
                                        results: results
                                    };
                                }
                            }
                        }); */



		      //Cargamos Country
		      var getCountry = $("#country");
		      getCountry.append("<option value=''>Cargando...</option>");
		      $.getJSON("getCountry",function(objetosretorna){
		        getCountry.empty();
		        getCountry.append("<option value=''>Seleccione ...</option>");
		        $.each(objetosretorna, function(i,ObjetoReturn){
		          var seleccion = "";
		          if(country==ObjetoReturn.cou_id){
		            seleccion = "selected='selected'";
		          }
		          var nuevaFila = "<option value='"+ObjetoReturn.cou_code+"' "+seleccion+">" + ObjetoReturn.cou_name+"</option>";
		          getCountry.append(nuevaFila);
		        });
		      });

		      $("#country").change(function(){
		          var getCountry = $("#country").val();
		          $('#InfoCarrera').empty();
		          if(getCountry==""){
		            $('#InfoCarrera').append("<option value=''>Seleccione ...</option>");
		           // $('#InfoCarrera').prop('disabled', true);
		          }else{
		            $("#provincia").append("<option value='0'>Cargando ...</option>");
		            $.getJSON("getProvince",{filtro: $("#country").val()},function(objetosretorna){
		              $("#provincia").empty();
		              $("#provincia").append("<option value=''>Seleccione ...</option>");
		              $.each(objetosretorna, function(i,prov){
		                $("#provincia").append("<option value='"+prov.Region2+"'>" + prov.Region2+"</option>");
		              });
		            });
		           // $('#InfoCarrera').prop('disabled', false);
		          }

		        });

		      $("#provincia").change(function(){
		          var getMuni = $("#provincia").val();
		          $('#InfoCarrera').empty();
		          if(getMuni==""){
		            $('#municipio').append("<option value=''>Seleccione ...</option>");
		           // $('#InfoCarrera').prop('disabled', true);
		          }else{
		            $("#municipio").append("<option value='0'>Cargando ...</option>");
		            $.getJSON("getMunicipality",{filtro: $("#provincia").val()},function(objetosretorna){
		              $("#municipio").empty();
		              $("#municipio").append("<option value=''>Seleccione ...</option>");
		              $.each(objetosretorna, function(i,prov){
		                $("#municipio").append("<option value='"+prov.Country+"'>" + prov.Region3+"</option>");
		              });
		            });
		           // $('#InfoCarrera').prop('disabled', false);
		          }

		        });

/*      $("#address_line1").change(function(){
          var address1 = $("#address_line1").val();
          $('#localidad').empty();
          if(address1==""){
            $('#localidad').append("<option value=''>Seleccione ...</option>");
           // $('#InfoCarrera').prop('disabled', true);
          }else{
            $("#InfoCarrera").append("<option value='0'>Cargando ...</option>");
            $.getJSON("getCarrera",{filtro: $("#InfoEscuela").val()},function(objetosretorna){
              $("#InfoCarrera").empty();
              $("#InfoCarrera").append("<option value=''>Seleccione ...</option>");
              $.each(objetosretorna, function(i,carreras){
                $("#InfoCarrera").append("<option value='"+carreras.CODIGO_CARRERA+"'>" + carreras.NOMBRE_CARRERA+"</option>");
              });
            });
           // $('#InfoCarrera').prop('disabled', false);
          }

        });*/



      $(document).on('click', '.saveWarehouse', function(e){

                  //alert("hola");
               //console.log('serialized data', $("#AddDiplo").serialize());
                $.ajax({
                url: 'Warehouse_validate',
                data: $("#FormWarehouse").serialize(),
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



          $(document).on('click', '.edit_Warehouse', function(e){
          	//alert("probando");
              var $this = $(this),
                  $data = $this.data();


              $.ajax({
                url : "<?php echo site_url('WarehouseController/edit_Warehouse')?>/" + $data.id,
                type: "GET",
                dataType: "JSON",
              })
              .done(function(data) {

	              $('[name="idWarehouse"]').val(data.id);
	              $('[name="country"]').val(data.country);
	              $('[name="address_line1"]').val(data.address_line1);
	              $('[name="address_line2"]').val(data.address_line2);
	              $('[name="locality"]').val(data.locality);
	              $('[name="state"]').val(data.administrative_area_level_1);
	              $('[name="zipcode"]').val(data.zipcode);
	              $('[name="branch"]').val(data.branch);



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



            function delete_warehouse(id)
            {
                if(confirm('Estas seguro que desea Eliminar este cliente?'))
                {
                    $.ajax({
                        url:  "<?php echo base_url('warehouseController/delete_warehouse')?>/"+id,
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
    tablewarehouse.ajax.reload(null,false); //reload datatable ajax
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