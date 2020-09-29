<!DOCTYPE html>
<html lang="ru">
<head>

	<title>Chic&Shine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--<link rel="stylesheet" href="public/dist/css/lightbox.min.css">-->

	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>

	<!-------------------- Верхнее меню ------------------->
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-darkmy bg-darkmy">
		<a class="navbar-brand">
			<img src="images/logo1.png" width="200" height="40" class="d-inline-block align-top" alt="" loading="lazy">
		</a>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsDown" aria-controls="navbarsDown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse show" id="navbarsDown">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="home" id="1">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="service" id="2">Услуги</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="galery" id="3">Галерея</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog" id="4">Блог</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="appointment" id="5">Запись</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="reviews" id="6">Отзывы</a>
				</li>
			</ul>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>		
	</nav>

			<!-------------------- Верхнее меню ------------------->
	<section>
		<div class="mainContent">
			<?php 
				if(isset($content)) {
					echo $content;
				}else{
					echo '<h1>Content is gone!</h1>';
				}
			?>
		</div>
	</section>


	<footer>
		<div class="p-3 mb-2 text-white">
	      	<div class="row">
	      		<div class="col-md-3">
	      			<img src="images/logo1.png" width="200" height="40" class="d-inline-block align-top" alt="" loading="lazy">
	     			<ul>
	      				<li>Главная</li>
	      				<li>Услуги</li>
	      				<li>Галерея</li>
	      				<li>Блог</li>
	      				<li>Запись</li>
	  					<li>Отзывы</li>
	     			</ul>
	   			</div>
	   			<div class="col-md-3">
	   			<div class="col-md-3">
	      		<div class="col-md-3">
	      			<h3>Соц сети</h3>
	      			<a href="">
	     				<img src="images/bootstrap.svg" width="30" height="30" class="d-inline-block align-center">
	      			</a>
	      		</div>
	    	</div>
	    </div>
	</footer>
</div>


<!--<script src="public/dist/js/lightbox-plus-jquery.min.js"></script>-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>

</body>
</html>