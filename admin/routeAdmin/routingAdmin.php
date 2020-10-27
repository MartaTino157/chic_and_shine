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
//====================== СТРАНИЦА УСЛУГ ===========================
elseif($path == 'adminService'){
	$response = controllerAdminService::PriceList();
}
//------- добавление
elseif($path=='addService'){
	$response = controllerAdminService::addServiceForm();
}
elseif($path=='addServiceResult') {
	$response = controllerAdminService::addServiceResult();
}
//------- редактирование
elseif($path=='editService' && isset($_GET['id'])){
	$response=controllerAdminService::editServiceForm($_GET['id']);
}
elseif($path=='editServiceResult' && isset($_GET['id'])) {
	$response=controllerAdminService::editServiceResult($_GET['id']);
}
//====================== СТРАНИЦА ГАЛЕРЕИ ===========================
elseif($path == 'adminGalery'){
	$response = controllerAdminGalery::openGalery();
}
//------- добавление
elseif($path=='addGaleryPic'){
	$response = controllerAdminGalery::addGaleryPicForm();
}
elseif($path=='addGaleryPicResult') {
	$response = controllerAdminGalery::addGaleryPicResult();
}
//====================== ОБРАБОТКА КАТЕГОРИЙ ===========================
elseif ($path == 'adminCategory' and isset($_GET['id'])) {
	$response = controllerAdminGalery::imageByCatID($_GET['id']);	
}
//------- добавление
elseif($path=='addCategory'){
	$response = controllerAdminCategory::addCategoryForm();
}
elseif($path=='addCategoryResult') {
	$response = controllerAdminCategory::addCategoryResult();
}
//------- редактирование
elseif($path=='editCategory' && isset($_GET['id'])){
	$response=controllerAdminCategory::editCategoryForm($_GET['id']);
}
elseif($path=='editCategoryResult' && isset($_GET['id'])) {
	$response=controllerAdminCategory::editCategoryResult($_GET['id']);
}
//====================== СТРАНИЦА БЛОГА ===========================
elseif ($path == 'adminBlog') {
	$response = controllerAdminBlog::openBlog();
}
//------- добавление
elseif($path=='addArticle'){
	$response = controllerAdminBlog::addArticleForm();
}
elseif($path=='addArticleResult') {
	$response = controllerAdminBlog::addArticleResult();
}
//====================== СТРАНИЦА ОТЗЫВОВ ===========================
elseif ($path == 'adminReviews') {
	$response = comtrollerAdminReviews::reviewsList();
	}
else {
	$response = controllerAdmin::error404();
}