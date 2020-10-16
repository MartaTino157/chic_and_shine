<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index.php') {
	$response = controllerAdmin::formLogin();
}
elseif($path == 'login') {
	$response = controllerAdmin::loginAction();
}
elseif($path == 'logout') {
	$response = controllerAdmin::logoutAction();
}
elseif($path == 'adminService'){
	$response = controllerAdminService::PriceList();
}
elseif($path == 'adminGalery'){
	$response = controllerAdminGalery::getGalery();
}
else {
	$response = controllerAdmin::error404();
}