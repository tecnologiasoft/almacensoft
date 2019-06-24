  	//var tableCustomer;
  	var baseurl = "<?php echo base_url(); ?>";
'use strict';
var KTDatatablesDataSourceAjaxClient = function() {

	var initTable1 = function() {
		var table = $('#customer');

		// begin first table
		 table.DataTable({
			responsive: true,
			ajax: {
				url: baseurl+'getCustomer',
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
  });

        $("#telephone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });

        $("#cellphone_number").inputmask("mask", {
            "mask": "(999) 999-9999"
        });



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