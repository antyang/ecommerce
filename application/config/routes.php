<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['admin/edit/(:any)'] = "main/edit/$1";
$route['cart'] = "main/cart";
$route['products'] = "main/products";
$route['dashboard'] = "main/dashboard";
$route['admin/orders'] = "main/admin_orders";
$route['admin/products'] = "main/admin_products";
$route['login'] = "main/login";
$route['admin/add'] = "/main/add";
$route['show/(:any)'] = "main/show/(:any)";
$route['logoff'] = "main/logoff";

//end of routes.php