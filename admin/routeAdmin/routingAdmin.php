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
//=================================================
elseif($path == 'adminService'){
	$response = controllerAdminService::PriceList();
}
elseif($path=='addItemPrice'){
	$response=controllerAdminService::addItemPriceForm();
}
elseif($path=='addItemPriceResult') {
	$response=controllerAdminService::addItemPriceResult();
}
//=================================================
elseif($path == 'adminGalery'){
	$response = controllerAdminGalery::openGalery();
}
//=================================================
elseif ($path == 'adminCategory' and isset($_GET['id'])) {
	$response = controllerAdminGalery::imageByCatID($_GET['id']);	
}
//=================================================
elseif ($path == 'adminBlog') {
	$response = controllerAdminBlog::openBlog();
}
//=================================================
elseif ($path == 'adminReviews') {
		$response = comtrollerAdminReviews::reviewsList();
	}
else {
	$response = controllerAdmin::error404();
}