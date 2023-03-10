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
$route['default_controller'] = 'C_View';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['cek'] = 'C_View/cek';
$route['login'] = 'C_View/index';
$route['login/(:any)'] = 'C_View/$1';
$route['Home'] = 'C_Proses/index';
$route['SignUp'] = 'C_Proses/signup';
$route['error'] = 'C_View/error';
$route['logout'] = 'C_View/logout';
$route['New'] = 'C_View/newMsg';
$route['Address'] = 'C_View/address';
$route['Contact'] = 'C_View/contact';
$route['Trash'] = 'C_View/trash';
$route['Setup'] = 'C_View/setup';
$route['About'] = 'C_View/about';
$route['Main'] = 'C_View/mainSystem';
$route['Search'] = 'C_View/Search';
$route['upload_aksi'] = 'C_View/upload_aksi';
$route['download'] = 'C_View/do_download';
$route['downloadAttachment/(:any)'] = 'C_View/downloadAttachment/$1';
$route['Attachment'] = 'C_View/attachment';



$route['Personal/(:any)'] = 'C_View/personal/$1';


$route['ajax/signUpPermissonSuperUser'] = 'C_View/signUpPermissonSuperUser';
$route['ajax/signUpPermissonGeneral'] = 'C_View/signUpPermissonGeneral';
$route['ajax/get_setup_1'] = 'C_View/setup1';
$route['ajax/get_setup_2'] = 'C_View/setup2';
$route['ajax/get_setup_3'] = 'C_View/setup3';
$route['ajax/get_setup_4'] = 'C_View/setup4';
$route['ajax/getContact'] = 'C_View/ContactList';
$route['ajax/savePhoneNum'] = 'C_View/saveNumber';
$route['ajax/getFilter'] = 'C_View/getFilter';
$route['ajax/getSelectClass'] = 'C_View/getSelectClass';
$route['ajax/updateProfile'] = 'C_View/updateProfile';
$route['ajax/getLastPrev'] = 'C_View/getLastPrev';
$route['ajax/savePrev'] = 'C_View/savePrev';
$route['ajax/saveGroup'] = 'C_View/saveGroup';
$route['ajax/deleteMember'] = 'C_View/deleteMember';
$route['ajax/getExport'] = 'C_View/exportContacts';
$route['ajax/getNum'] = 'C_View/getNum';
$route['ajax/moveTrash'] = 'C_View/moveTrash';
$route['ajax/detailMsg'] = 'C_View/detailMsg';
$route['ajax/permanentDelete'] = 'C_View/permanentDelete';
$route['ajax/(:any)'] = 'C_View/$1';
$route['(:any)'] = 'C_View/$1';
$route['(:any)/(:any)'] = 'C_View/$1/$2'; 

