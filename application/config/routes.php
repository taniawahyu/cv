<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = "login";
$route['admin/logout'] = "admin/login/logout";

$route['admin/dashboard'] = "admin/dashboard";
$route['admin/profile'] = "admin/profile";

//pengalaman
$route['admin/pengalaman'] = "admin/pengalaman";
$route['admin/edit_pengalaman'] = "admin/pengalaman/edit";

//pendidikan
$route['admin/pendidikan'] = "admin/pendidikan";
$route['admin/edit_pendidikan'] = "admin/pendidikan/edit";

//skill
$route['admin/skill'] = "admin/skill";
$route['admin/edit_skill'] = "admin/skill/edit";

//work
$route['admin/work'] = "admin/work";
$route['admin/edit_work'] = "admin/work/edit";

//services
$route['admin/services'] = "admin/services";
$route['admin/edit_services'] = "admin/services/edit";

//sosmed
$route['admin/sosmed'] = "admin/sosmed";
$route['admin/edit_sosmed'] = "admin/sosmed/edit";