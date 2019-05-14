<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['beranda'] = 'home';
$route['detail/(:any)'] = 'home/detail/$1';
$route['profil'] = 'home/profil';
$route['pencarian'] = 'pencarian/cari';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
