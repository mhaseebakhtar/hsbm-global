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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'main/template/about-us';
$route['services'] = 'main/template/services';
$route['services/united-arab-emirates'] = 'main/template/united-arab-emirates';
$route['services/economic-substance-regulations'] = 'main/template/economic-regulations';
$route['contact-us'] = 'main/template/contact-us';
$route['our-team'] = 'main/template/our-team';
$route['privacy'] = 'main/template/privacy';

$route['blogs'] = 'main/blogs';
$route['blogs/(:num)'] = 'main/blogs';
$route['blogs/(:any)'] = 'main/blogs/$1';
$route['blogs/(:any)/(:num)'] = 'main/blogs/$1';
$route['blog/(:any)/(:any)'] = 'main/blog/$1/$2';

// admin routes
$route['admin'] = 'dashboard';
$route['admin/dashboard'] = 'dashboard/dashboard';
$route['admin/account'] = 'dashboard/account';

$route['ajax/new-category'] = 'ajax/category/new';
$route['ajax/get-category'] = 'ajax/category/get';
$route['ajax/edit-category'] = 'ajax/category/edit';

$route['admin/blog-categories'] = 'dashboard/blogCategories';
$route['admin/blog-categories/(:num)'] = 'dashboard/blogCategories';

$route['ajax/new-blog'] = 'ajax/blog/new';
$route['ajax/get-blog'] = 'ajax/blog/get';
$route['ajax/edit-blog'] = 'ajax/blog/edit';

$route['admin/new-blog'] = 'dashboard/blog';
$route['admin/update-blog/(:num)'] = 'dashboard/blog';
$route['admin/blogs'] = 'dashboard/blogs';
$route['admin/blogs/(:num)'] = 'dashboard/blogs';

$route['admin/subscribers'] = 'dashboard/subscribers';
$route['admin/subscribers/(:num)'] = 'dashboard/subscribers';

// settings
$route['admin/global-settings'] = 'dashboard/globalSettings';
$route['admin/mail-settings'] = 'dashboard/mail';

// generic functions
$route['admin/save-settings'] = 'dashboard/save';
$route['admin/delete'] = 'dashboard/delete';
$route['admin/login'] = 'dashboard/login';
$route['admin/logout'] = 'dashboard/logout';
