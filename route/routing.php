<?php
//вычислить маршрут из адрeсной строки
	$host = explode('?', $_SERVER['REQUEST_URI'])[0];
	$num = substr_count($host, '/');
	$path = explode('/',$host)[$num];

	$controller = new Controller();

	if($path == '' OR $path == 'index' OR $path == 'index.php') {
		//$response = Controller::StartSite();
		$response = $controller->StartSite();
	}
	// ---------------- переход на страницы -----------------
	elseif ($path == 'home') {
<<<<<<< HEAD
		//$response = Controller::startHome();
		$response = $controller->startHome();
=======
		$response = Controller::startHome();
		//$controller = new Controller();
		//$response = $controller->startHome();
>>>>>>> e6349d9d12c2be73c7dc5ec7d15fea79630c967a
	}
	elseif ($path == 'service') {
		//$response = Controller::startService();
		$response = $controller->startService();
	}

	elseif ($path == 'galery' ) {
		//$response = Controller::startGalery();
		$response = $controller->startGalery();
	}
	elseif ($path == 'category' and isset($_GET['id'])) {
		//$response = Controller::imageByCatID($_GET['id']);
		$response = $controller->imageByCatID($_GET['id']);
	}

	elseif ($path == 'blog') {
		//$response = Controller::startBlog();
		$response = $controller->startBlog();
	}
	elseif ($path == 'article' and isset($_GET['id'])) {
		//$response = Controller::articleByID($_GET['id']);
		$response = $controller->articleByID($_GET['id']);	
	}

	elseif ($path == 'appointment') {
		//$response = Controller::startAppointment();
		$response = $controller->startAppointment();
	}
	elseif($path == 'answerAppointment'){
		//$response = Controller::answerAppointment();
		$response = $controller->answerAppointment();
	}
	elseif ($path == 'reviews') {
		//$response = Controller::startReviews();
		$response = $controller->startReviews();
	}
	elseif($path == 'answerReviews'){
		//$response = Controller::answerReviews();
		$response = $controller->answerReviews();
	}
	//страница error
	else {
		//$response = Controller::error404();
		$response = $controller->error404();	
	}

?>