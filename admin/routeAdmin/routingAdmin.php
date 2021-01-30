<?php
$host = explode('?', $_SERVER['REQUEST_URI']) [0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];

if($path == '' OR $path == 'index.php') {
	//$response = controllerAdmin::formLogin();
	$controller = new controllerAdmin();
	$response = $controller->formLogin();
}
elseif($path == 'login') {
	//$response = controllerAdmin::loginAction();
	$controller = new controllerAdmin();
	$response = $controller->loginAction();
}
elseif($path == 'logout') {
	//$response = controllerAdmin::logoutAction();
	$controller = new controllerAdmin();
	$response = $controller->logoutAction();
}
//====================== СТРАНИЦА УСЛУГ ===========================
elseif($path == 'adminService'){
	//$response = controllerAdminService::PriceList();
	$controller = new controllerAdminService();
	$response = $controller->PriceList();
}
//------- добавление
elseif($path=='addService'){
	//$response = controllerAdminService::addServiceForm();
	$controller = new controllerAdminService();
	$response = $controller->addServiceForm();
}
elseif($path=='addServiceResult') {
	//$response = controllerAdminService::addServiceResult();
	$controller = new controllerAdminService();
	$response = $controller->addServiceResult();
}
//------- редактирование
elseif($path=='editService' && isset($_GET['id'])){
	//$response=controllerAdminService::editServiceForm($_GET['id']);
	$controller = new controllerAdminService();
	$response = $controller->editServiceForm($_GET['id']);
}
elseif($path=='editServiceResult' && isset($_GET['id'])) {
	//$response=controllerAdminService::editServiceResult($_GET['id']);
	$controller = new controllerAdminService();
	$response = $controller->editServiceResult($_GET['id']);
}
//------- удаление
elseif($path=='delService' && isset($_GET['id'])){
	//$response=controllerAdminService::deleteServiceForm($_GET['id']);
	$controller = new controllerAdminService();
	$response = $controller->deleteServiceForm($_GET['id']);
}
elseif($path=='delServiceResult' && isset($_GET['id'])) {
	//$response=controllerAdminService::deleteServiceResult($_GET['id']);
	$controller = new controllerAdminService();
	$response = $controller->deleteServiceResult($_GET['id']);
}
//====================== СТРАНИЦА ГАЛЕРЕИ ===========================
elseif($path == 'adminGalery'){
	//$response = controllerAdminGalery::openGalery();
	$controller = new controllerAdminGalery();
	$response = $controller->openGalery();
}
//------- добавление
elseif($path=='addGaleryPic'){
	//$response = controllerAdminGalery::addGaleryPicForm();
	$controller = new controllerAdminGalery();
	$response = $controller->addGaleryPicForm();
}
elseif($path=='addGaleryPicResult') {
	//$response = controllerAdminGalery::addGaleryPicResult();
	$controller = new controllerAdminGalery();
	$response = $controller->addGaleryPicResult();
}
//------- удаление
elseif($path=='delGaleryPic' && isset($_GET['id'])){
	//$response=controllerAdminGalery::deleteGaleryPicForm($_GET['id']);
	$controller = new controllerAdminGalery();
	$response = $controller->deleteGaleryPicForm($_GET['id']);
}
elseif($path=='delGaleryPicResult' && isset($_GET['id'])) {
	//$response=controllerAdminGalery::deleteGaleryPicResult($_GET['id']);
	$controller = new controllerAdminGalery();
	$response = $controller->deleteGaleryPicResult($_GET['id']);
}
//====================== ОБРАБОТКА КАТЕГОРИЙ ===========================
elseif ($path == 'adminCategory' and isset($_GET['id'])) {
	//$response = controllerAdminGalery::imageByCatID($_GET['id']);
	$controller = new controllerAdminGalery();
	$response = $controller->imageByCatID($_GET['id']);	
}
//------- добавление
elseif($path=='addCategory'){
	//$response = controllerAdminCategory::addCategoryForm();
	$controller = new controllerAdminCategory();
	$response = $controller->addCategoryForm();
}
elseif($path=='addCategoryResult') {
	//$response = controllerAdminCategory::addCategoryResult();
	$controller = new controllerAdminCategory();
	$response = $controller->addCategoryResult();
}
//------- редактирование
elseif($path=='editCategory' && isset($_GET['id'])){
	//$response=controllerAdminCategory::editCategoryForm($_GET['id']);
	$controller = new controllerAdminCategory();
	$response = $controller->editCategoryForm($_GET['id']);
}
elseif($path=='editCategoryResult' && isset($_GET['id'])) {
	//$response=controllerAdminCategory::editCategoryResult($_GET['id']);
	$controller = new controllerAdminCategory();
	$response = $controller->editCategoryResult($_GET['id']);
}
//------- удаление
elseif($path=='delCategory' && isset($_GET['id'])){
	//$response=controllerAdminCategory::deleteCategoryForm($_GET['id']);
	$controller = new controllerAdminCategory();
	$response = $controller->deleteCategoryForm($_GET['id']);
}
elseif($path=='delCategoryResult' && isset($_GET['id'])) {
	//$response=controllerAdminCategory::deleteCategoryResult($_GET['id']);
	$controller = new controllerAdminCategory();
	$response = $controller->deleteCategoryResult($_GET['id']);
}
//====================== СТРАНИЦА БЛОГА ===========================
elseif ($path == 'adminBlog') {
	//$response = controllerAdminBlog::openBlog();
	$controller = new controllerAdminBlog();
	$response = $controller->openBlog();
}
//------- добавление
elseif($path=='addArticle'){
	//$response = controllerAdminBlog::addArticleForm();
	$controller = new controllerAdminBlog();
	$response = $controller->addArticleForm();
}
elseif($path=='addArticleResult') {
	//$response = controllerAdminBlog::addArticleResult();
	$controller = new controllerAdminBlog();
	$response = $controller->addArticleResult();
}
//------- редактирование
elseif($path=='editArticle' && isset($_GET['id'])){
	//$response=controllerAdminBlog::editArticleForm($_GET['id']);
	$controller = new controllerAdminBlog();
	$response = $controller->editArticleForm($_GET['id']);
}
elseif($path=='editArticleResult' && isset($_GET['id'])) {
	//$response=controllerAdminBlog::editArticleResult($_GET['id']);
	$controller = new controllerAdminBlog();
	$response = $controller->editArticleResult($_GET['id']);
}
//------- удаление
elseif($path=='delArticle' && isset($_GET['id'])){
	//$response=controllerAdminBlog::deleteArticleForm($_GET['id']);
	$controller = new controllerAdminBlog();
	$response = $controller->deleteArticleForm($_GET['id']);
}
elseif($path=='delArticleResult' && isset($_GET['id'])) {
	//$response=controllerAdminBlog::deleteArticleResult($_GET['id']);
	$controller = new controllerAdminBlog();
	$response = $controller->deleteArticleResult($_GET['id']);
}
//====================== СТРАНИЦА ОТЗЫВОВ ===========================
elseif ($path == 'adminReviews') {
	//$response = comtrollerAdminReviews::reviewsList();
	$controller = new comtrollerAdminReviews();
	$response = $controller->reviewsList();
}
//------- публикация
elseif($path=='publishReview' && isset($_GET['id'])){
	//$response=comtrollerAdminReviews::publishReviewForm($_GET['id']);
	$controller = new comtrollerAdminReviews();
	$response = $controller->publishReviewForm($_GET['id']);
}
elseif($path=='publishReviewResult' && isset($_GET['id'])) {
	//$response=comtrollerAdminReviews::publishReviewResult($_GET['id']);
	$controller = new comtrollerAdminReviews();
	$response = $controller->publishReviewResult($_GET['id']);
}
//------- удаление
elseif($path=='delReview' && isset($_GET['id'])){
	//$response=comtrollerAdminReviews::deleteReviewForm($_GET['id']);
	$controller = new comtrollerAdminReviews();
	$response = $controller->deleteReviewForm($_GET['id']);
}
elseif($path=='delReviewResult' && isset($_GET['id'])) {
	//$response=comtrollerAdminReviews::deleteReviewResult($_GET['id']);
	$controller = new comtrollerAdminReviews();
	$response = $controller->deleteReviewResult($_GET['id']);
}
else {
	//$response = controllerAdmin::error404();
	$controller = new controllerAdmin();
	$response = $controller->error404();
}
