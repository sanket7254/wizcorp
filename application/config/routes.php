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
$route['default_controller'] = 'HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['Home'] = 'HomeController/index';
$route['About'] = 'HomeController/about';
$route['Franchise'] = 'HomeController/franchise';
$route['Gallery'] = 'HomeController/gallery';
$route['popup_images/(:any)'] = 'HomeController/popup_imagess/$1';

$route['Midbrain'] = 'HomeController/midbrain';
$route['our_courses'] = 'HomeController/our_courses';

$route['News'] = 'HomeController/news';
$route['readmore/(:any)'] = 'HomeController/readmore/$1';
$route['Contact'] = 'HomeController/contact';
$route['Privacy'] = 'HomeController/privacy';
$route['faq'] = 'HomeController/faq';


$route['Login'] = 'LoginController/prelogin';

$route['Dashboard'] = 'AdminController/dashboard';
$route['AddStudent'] = 'AdminController/add_student';
$route['AddStudent/(:any)'] = 'AdminController/add_student/$1';
$route['editstudent/(:any)'] = 'AdminController/edit_student/$1';
$route['deletestudent/(:num)/(:any)'] = 'AdminController/delete_student/$1/$2';
$route['AllStudent'] = 'AdminController/all_student';


$route['frandashboard'] = 'FranchiseController/fran_dashboard';
$route['frandashboard/(:any)'] = 'FranchiseController/fran_dashboard/$1';
$route['franchiseallstudent'] = 'FranchiseController/franchise_all_students';

$route['datatable'] = 'HomeController/data_table';
$route['add_course'] = 'AdminController/add_course';
$route['all_course'] = 'AdminController/all_course';
$route['editcourse/(:any)'] = 'AdminController/edit_course/$1';
$route['delete_course/(:any)'] = 'AdminController/delete_course/$1';

$route['add_franchiese'] = 'AdminController/add_franchise';
$route['all_franchiese'] = 'AdminController/all_franchiese';
$route['editfranchiese/(:any)'] = 'AdminController/edit_franchiese/$1';
$route['delete_franchiese/(:num)/(:any)'] = 'AdminController/delete_franchiese/$1/$2';
$route['franchiese_view/(:any)'] = 'AdminController/franchiese_view/$1';


$route['all_admin'] = 'AdminController/all_admin';
$route['add_admin'] = 'AdminController/add_admin';
$route['editadmin/(:any)'] = 'AdminController/edit_admin/$1';
$route['delete_admin/(:num)/(:any)'] = 'AdminController/delete_admin/$1/$2';
$route['printpage/(:any)'] = 'AdminController/printpage/$1';
$route['viewprofile/(:any)'] = 'AdminController/viewprofile/$1';
$route['enquiries'] = 'AdminController/enquiries';


$route['welcomepage'] = 'AdminController/welcomepage';
$route['certificate'] = 'AdminController/certificate';
$route['idcard/(:any)'] = 'AdminController/idcard/$1';
$route['idcard_examp'] = 'AdminController/idcard_examp';
$route['Myprofile'] = 'AdminController/myprofile';


$route['records'] = 'AdminController/records';
$route['payment/(:any)'] = 'AdminController/payment/$1';

$route['store_gallery'] = 'AdminController/storegallery';
$route['all_gallery'] = 'AdminController/all_gallery';
$route['edit_gallery'] = 'AdminController/edit_gallery';
$route['edit_gallery/(:any)'] = 'AdminController/edit_gallery/$1';
$route['delete_images/(:any)/(:any)'] = 'AdminController/delete_images/$1/$2';
$route['delete_gallery/(:any)'] = 'AdminController/delete_gallery/$1';

$route['all_newsevents'] = 'AdminController/all_newsevents';
$route['add_newsevents'] = 'AdminController/addnewsevents';
$route['edit_newsevents/(:any)'] = 'AdminController/edit_newsevents/$1';
$route['delete_news/(:num)/(:any)'] = 'AdminController/delete_news/$1/$2';

$route['global_setting'] = 'AdminController/global_settings';
$route['all_global_settings'] = 'AdminController/all_global_settings';
$route['global_settings/(:any)'] = 'AdminController/global_settings/$1';
$route['edit_global_settings/(:any)'] = 'AdminController/edit_global_settings/$1';

$route['myprofile'] = 'AdminController/myprofile/';







