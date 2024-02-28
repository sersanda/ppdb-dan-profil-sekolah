<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

$route['acara/(:any)'] = 'acara';
$route['kategori_acara/(:any)'] = 'kategori_acara';
$route['kategori_acara/(:any)/(:any)'] = 'kategori_acara';

$route['gallery/(:any)'] = 'gallery';
$route['kategori_gallery/(:any)'] = 'kategori_gallery';
$route['kategori_gallery/(:any)/(:any)'] = 'kategori_gallery';