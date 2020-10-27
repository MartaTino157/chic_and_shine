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
elseif($path=='addService'){
	$response = controllerAdminService::addServiceForm();
}
elseif($path=='addServiceResult') {
	$response = controllerAdminService::addServiceResult();
}
//=================================================
elseif($path == 'adminGalery'){
	$response = controllerAdminGalery::openGalery();
}
elseif($path=='addGaleryPic'){
	$response = controllerAdminGalery::addGaleryPicForm();
}
elseif($path=='addGaleryPicResult') {
	$response = controllerAdminGalery::addGaleryPicResult();
}
//=================================================
elseif ($path == 'adminCategory' and isset($_GET['id'])) {
	$response = controllerAdminGalery::imageByCatID($_GET['id']);	
}
elseif($path=='addCategory'){
	$response = controllerAdminCategory::addCategoryForm();
}
elseif($path=='addCategoryResult') {
	$response = controllerAdminCategory::addCategoryResult();
}
//=================================================
elseif ($path == 'adminBlog') {
	$response = controllerAdminBlog::openBlog();
}
elseif($path=='addArticle'){
	$response = controllerAdminBlog::addArticleForm();
}
elseif($path=='addArticleResult') {
	$response = controllerAdminBlog::addArticleResult();
}
//=================================================
elseif ($path == 'adminReviews') {
	$response = comtrollerAdminReviews::reviewsList();
	}
else {
	$response = controllerAdmin::error404();
}