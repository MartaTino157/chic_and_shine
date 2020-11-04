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
//------- удаление
elseif($path=='delService' && isset($_GET['id'])){
	$response=controllerAdminService::deleteServiceForm($_GET['id']);
}
elseif($path=='delServiceResult' && isset($_GET['id'])) {
	$response=controllerAdminService::deleteServiceResult($_GET['id']);
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
//------- удаление
elseif($path=='delGaleryPic' && isset($_GET['id'])){
	$response=controllerAdminGalery::deleteGaleryPicForm($_GET['id']);
}
elseif($path=='delGaleryPicResult' && isset($_GET['id'])) {
	$response=controllerAdminGalery::deleteGaleryPicResult($_GET['id']);
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
//------- удаление
elseif($path=='delCategory' && isset($_GET['id'])){
	$response=controllerAdminCategory::deleteCategoryForm($_GET['id']);
}
elseif($path=='delCategoryResult' && isset($_GET['id'])) {
	$response=controllerAdminCategory::deleteCategoryResult($_GET['id']);
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
//------- редактирование
elseif($path=='editArticle' && isset($_GET['id'])){
	$response=controllerAdminBlog::editArticleForm($_GET['id']);
}
elseif($path=='editArticleResult' && isset($_GET['id'])) {
	$response=controllerAdminBlog::editArticleResult($_GET['id']);
}
//------- удаление
elseif($path=='delArticle' && isset($_GET['id'])){
	$response=controllerAdminBlog::deleteArticleForm($_GET['id']);
}
elseif($path=='delArticleResult' && isset($_GET['id'])) {
	$response=controllerAdminBlog::deleteArticleResult($_GET['id']);
}
//====================== СТРАНИЦА ОТЗЫВОВ ===========================
elseif ($path == 'adminReviews') {
	$response = comtrollerAdminReviews::reviewsList();
}
//------- публикация
elseif($path=='publishReview' && isset($_GET['id'])){
	$response=comtrollerAdminReviews::publishReviewForm($_GET['id']);
}
elseif($path=='publishReviewResult' && isset($_GET['id'])) {
	$response=comtrollerAdminReviews::publishReviewResult($_GET['id']);
}
//------- удаление
elseif($path=='delReview' && isset($_GET['id'])){
	$response=comtrollerAdminReviews::deleteReviewForm($_GET['id']);
}
elseif($path=='delReviewResult' && isset($_GET['id'])) {
	$response=comtrollerAdminReviews::deleteReviewResult($_GET['id']);
}
else {
	$response = controllerAdmin::error404();
}
