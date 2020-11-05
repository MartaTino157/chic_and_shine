<!DOCTYPE html>
<html lang="ru">
<head>

	<title>Chic&Shine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--<link rel="stylesheet" href="public/dist/css/lightbox.min.css">-->


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<?php
		$host = explode('?', $_SERVER['REQUEST_URI'])[0];
		$num = substr_count($host, '/');
		$path = explode('/',$host)[$num];
	?>

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

				<?php 
					if($path == "home" OR $path == ""){ echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="home" id="1">Главная</a>
				<?php echo "</li>";?>

				<?php 
					if($path == "service"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="service" id="2">Услуги</a>
				<?php echo "</li>";?>

				<?php 
					if($path == "galery"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="galery" id="3">Галерея</a>
				<?php echo "</li>";?>

				<?php 
					if($path == "blog"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="blog" id="4">Блог</a>
				<?php echo "</li>";?>
				<?php 
					if($path == "appointment"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="appointment" id="5">Запись</a>
				<?php echo "</li>";?>
				<?php 
					if($path == "reviews"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="reviews" id="6">Отзывы</a>
				<?php echo "</li>";?>
					
			</ul>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>		
	</nav>

			<!-------------------- Верхнее меню ------------------->

		<div class="mainContent">
			<?php 
				if(isset($content)) {
					echo $content;
				}else{
					echo '<h1>Content is gone!</h1>';
				}
			?>
		


	<footer>
		<div class="p-3 mb-2 text-white">
	      	<div class="row">
	      		<div class="col-md-4">
	      			<img src="images/logo1.png" width="200" height="40" class="d-inline-block align-top" alt="" loading="lazy">
	   			</div>
	   			<div class="col-md-4"></div>
	      		<div class="col-md-4">
	      			<i class="fab fa-instagram"></i>
	      			<i class="fab fa-facebook-f"></i>
	      			<i class="fab fa-pinterest-p"></i>
	      			<i class="fab fa-vk"></i>
	      			<i class="fab fa-twitter"></i>
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