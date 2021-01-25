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
$route['default_controller'] = 'Welcome';
//$route['default_controller'] = 'Site';
//$route['archive/(:any)'] = 'Welcome/archive_page/$1';
$route['404_override'] = '/'; 
$route['translate_uri_dashes'] = FALSE;
$route['page/(:any)'] = 'Welcome/page_content/$1';
$route['article_details/(.*)'] = 'Welcome/view_article_details/$1';

$route['site/show/(.*)'] = 'Welcome/view_article_details/$1';

//$route['details/(.*)'] = 'Welcome/view_article_details/$1';
$route['service_details/(.*)'] = 'Welcome/view_service_details/$1';

$route['monthly_archive/(.*)'] = 'Welcome/monthly_archive/$1';
$route['monthly_archive'] = 'Welcome/all_monthly_archive';
$route['category_archive/(:any)'] = 'Welcome/get_all_article_by_category/$1';
$route['category_archive/(:any)/(:any)'] = 'Welcome/get_all_article_by_category/$1/$2';
$route['category_archive/(:any)/(:any)/(:any)'] = 'Welcome/get_all_article_by_category/$1/$2/$3';
$route['subject_archive/(.*)'] = 'Welcome/get_all_article_by_subject/$1';
$route['writer_archive/(.*)'] = 'Welcome/get_all_article_by_writer/$1';
//$route['search'] = 'Welcome/search_in_website';
$route['search'] = 'Welcome/search_post';
$route['writer-list'] = 'Welcome/get_writer_list';
$route['category-list'] = 'Welcome/get_category_list';
$route['subject-list'] = 'Welcome/get_subject_list';
$route['qa'] = 'Welcome/qapage';

$route['sitemap\.xml'] = "Welcome/sitemap";

 

/* End of file routes.php */
/* Location: ./application/config/routes.php */