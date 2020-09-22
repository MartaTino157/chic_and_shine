<?php
class Controller {

	//функция запуска сайта с главной страницы
	public static function StartSite() {
		include_once 'view/home.php';
	}
	//функция перехода на страницу ошибок
	public static function error404() {
		include_once 'view/error404.php';
	}
	//----------- маршрутизация в меню ------------
	public function startHome() {
		include_once('view/home.php');
	}
	public function startService() {
		include_once('view/service.php');
	}
	public function startGalery() {
		include_once('view/galery.php');
	}
	public function startBlog() {
		include_once('view/blog.php');
	}
	public function startAppointment() {
		include_once('view/appointment.php');
	}
	public function startReviews() {
		include_once('view/reviews.php');
	}
}