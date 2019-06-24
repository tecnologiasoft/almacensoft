<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'UsersController/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'UsersController/login';
$route['customer'] = 'CustomerController';
$route['getCustomer'] = 'CustomerController/getCustomerDataTable';

/*inventory*/
$route['invoices'] = 'InvoicesController';
$route['getInvoices'] = 'InvoicesController/getInvoicesDataTable';
$route['invoices_validate'] = "InvoicesController/Invoices_validate";


/*Pickup*/
$route['pickup_managment'] = 'PickupController/pickup_managment';
$route['getPickup'] = 'PickupController/getPickupDataTable';

$route['getListShipto/(:any)'] = 'PickupController/getListShiptoDataTable/$1';
//$route['getListShipto'] = 'PickupController/getListShiptoDataTable';
$route['Ship_to_Pickup_validate'] = 'PickupController/Ship_to_Pickup_validate';




$route['login'] = "UsersController/login_validate";
$route['switchLang'] = "languageSwitcher/switchLang/";

$route['add'] = "CustomerController/add";
$route['Customer_validate'] = "CustomerController/Customer_validate";

/*inventory*/
$route['inventory'] = "InventoryController";
$route['getInventory'] = 'InventoryController/getInventoryDataTable';
$route['Inventory_validate'] = "InventoryController/Inventory_validate";

/*Employee*/
$route['employee'] = "EmployeeController";
$route['getEmployee'] = 'EmployeeController/getEmployeeDataTable';
$route['Employee_validate'] = "EmployeeController/Employee_validate";

/*Driver*/
$route['driver'] = "DriverController";
$route['getDriver'] = 'DriverController/getDriverDataTable';
$route['Driver_validate'] = 'DriverController/Driver_validate';

/*Batch_distribution*/
$route['batch'] = "Batch_distribution";
$route['getBatch'] = 'Batch_distribution/getBatchDataTable';
//$route['Driver_validate'] = 'DriverController/Driver_validate';
$route['add'] = 'Batch_distribution/add';

/*User Maintenance*/

$route['user'] = "UserMaintenanceController";
$route['getUser'] = 'UserMaintenanceController/getUserDataTable';
$route['user_validate'] = 'UserMaintenanceController/User_validate';

/*Maintenance Maintenance*/

$route['agent'] = "AgentMaintenanceController";
$route['getAgent'] = 'AgentMaintenanceController/getAgentDataTable';
$route['agent_validate'] = 'AgentMaintenanceController/Agent_validate';

/*Payments PaymentsController*/

$route['payments'] = "PaymentsController";
$route['getPayments'] = 'PaymentsController/getPaymentsDataTable';
$route['Payments_validate'] = 'PaymentsController/Payments_validate';


/*Claims ClaimsController*/

$route['claims'] = "ClaimsController";
$route['getClaims'] = 'ClaimsController/getClaimsDataTable';
$route['Claims_validate'] = 'ClaimsController/Claims_validate';

/*Branch BranchController*/

$route['branch'] = "BranchController";
$route['getBranch'] = 'BranchController/getBranchDataTable';
$route['Claims_validate'] = 'BranchController/Claims_validate';

/*Warehouse WarehouseController*/

$route['warehouse'] = "WarehouseController";
$route['getWarehouse'] = 'WarehouseController/getWarehouseDataTable';
$route['Warehouse_validate'] = 'WarehouseController/Warehouse_validate';
$route['getCountry'] = 'WarehouseController/getCountry';
$route['getProvince'] = 'WarehouseController/getProvince';
$route['getMunicipality'] = 'WarehouseController/getMunicipality';

/*Branch PickupZone*/

$route['pickup_zone'] = "PickupZoneController";
$route['getPickupZone'] = 'PickupZoneController/getPickupZoneDataTable';
$route['PickupZone_validate'] = 'PickupZoneController/PickupZone_validate';


/*Branch shipto*/

//$route['pickup_zone'] = "PickupZoneController";
$route['getShipto/(:any)'] = 'CustomerController/getShiptoDataTable/$1';



$route['Ship_to_validate'] = 'CustomerController/Ship_to_validate';
$route['customer_update_in_pickup'] = 'CustomerController/customer_update_in_pickup';

