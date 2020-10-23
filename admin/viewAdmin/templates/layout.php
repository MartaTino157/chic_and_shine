<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Chic&Shine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	
</head>
<body>
	<?php
		$host = explode('?', $_SERVER['REQUEST_URI'])[0];
		$num = substr_count($host, '/');
		$path = explode('/',$host)[$num];
	?>

<div class="container">

	<?php 
			if (isset($_SESSION["userId"]) && isset($_SESSION["sessionId"]) && isset($_SESSION["status"]) && $_SESSION["status"]=="admin") {
	?>

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
					if($path == "adminService"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="adminService" id="1">Услуги</a>
				<?php echo "</li>";?>
				<?php 
					if($path == "adminGalery"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="adminGalery" id="2">Галерея</a>
				<?php echo "</li>";?>
				<?php 
					if($path == "adminBlog"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="adminBlog" id="3">Блог</a>
				<?php echo "</li>";?>
				<?php 
					if($path == "adminReviews"){echo "<li class='nav-item active'>";
					}else{echo "<li class='nav-item'>";}
				?>
					<a class="nav-link" href="adminReviews" id="4">Отзывы</a>
				<?php echo "</li>";?>

				<li class="nav-item">
					<a class="nav-link" href="logout" id="5">Выйти</a>
				</li>
			</ul>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>		
	</nav>


	<div id="content">
		<?php echo $content;?>
	</div>
<?php 
	}else{
		include_once('viewAdmin/error404.php');
	}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
</body>
</html>