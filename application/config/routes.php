<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = '';
$route['admin/edit'] = "main/edit";
$route['cart'] = "main/cart";
$route['products'] = "main/products";
$route['dashboard'] = "main/dashboard";
$route['admin/orders'] = "main/admin_orders";
$route['admin/products'] = "main/admin_products";
$route['login'] = "main/login";
$route['admin/add'] = "/main/add_product";
$route['show/(:any)'] = "main/show/$1";
//end of routes.php