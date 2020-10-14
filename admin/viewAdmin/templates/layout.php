<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Chic&Shine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">

	<?php 
			if (isset($_SESSION["sessionId"])) {
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
				<li class="nav-item">
					<a class="nav-link" href="adminService" id="1">Услуги</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="adminGalery" id="2">Галерея</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="adminBlog" id="3">Блог</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="adminReviews" id="4">Отзывы</a>
				</li>
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

<?php 
	}
?>
	<div id="content">
		<?php echo $content;?>
	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
</body>
</html>