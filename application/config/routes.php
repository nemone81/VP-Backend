<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|

*/
//$route['dump/(:any)'] = 'dump/';
$route['admin/logout'] = 'admin/logout';

$route['welcome'] = 'welcome';
$route['admin'] = 'admin';

$route['dashboard'] = 'dashboard';
$route['abbonamenti/edit/(:any)'] = 'abbonamenti/edit/$1';
$route['abbonamenti/delete_abbonamenti/(:any)'] = 'abbonamenti/delete_abbonamenti/$1';
$route['abbonamenti/abb_edit/(:any)'] = 'abbonamenti/abb_edit/$1';
$route['abbonamenti/create/(:any)'] = 'abbonamenti/create/$1';
$route['abbonamenti/create'] = 'abbonamenti/create';

$route['soci/get_dump_soci'] = 'soci/get_dump_soci';
$route['soci/create'] = 'soci/create';
$route['soci/edit/(:any)'] = 'soci/edit/$1';
$route['soci/delete_soci'] = 'soci/delete_soci';
$route['soci/delete_soci/(:any)'] = 'soci/delete_soci/$1';
$route['soci/(:any)'] = 'soci/view/$1';
$route['soci'] = 'soci';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['default_controller'] = "login";


/* End of file routes.php */
/* Location: ./application/config/routes.php */