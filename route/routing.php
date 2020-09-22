<?php
//вычислить маршрут из адрeсной строки
	$host = explode('?', $_SERVER['REQUEST_URI'])[0];
	$num = substr_count($host, '/');
	$path = explode('/',$host)[$num];

	if($path == '' OR $path == 'index' OR $path == 'index.php') {
		$response = Controller::StartSite();
	}
	// ---------------- переход на страницы -----------------
	elseif ($path == 'home') {
		$response = Controller::startHome();
	}
	elseif ($path == 'service') {
		$response = Controller::startService();
	}
	elseif ($path == 'galery') {
		$response = Controller::startGalery();
	}
	elseif ($path == 'blog') {
		$response = Controller::startBlog();
	}
	elseif ($path == 'appointment') {
		$response = Controller::startAppointment();
	}
	elseif ($path == 'reviews') {
		$response = Controller::startReviews();
	}
	//страница error
	else {
		$response = Controller::error404();	
	}

?>