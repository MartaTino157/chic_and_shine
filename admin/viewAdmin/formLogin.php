<?php
if(isset($_SESSION['userId'])) {
	header('Location: login');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>

	<title>Chic&Shine</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="public/css/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body class="text-center">
	<form class="form-signin" action="login" method="POST">
		<img class="mb-4" src="images/logo1.png" alt width="200" height="40">
		<h1 class="h3 mb-3 font-weight-normal">Войдите <br>в админ-панель</h1>
		<label for="adminEmail" class="sr-only">Электронный адрес</label>
		<input type="email" name="adminEmail" class="form-control" placeholder="Электронный адрес" required autofocus>
		<label for="adminPass" class="sr-only">Пароль</label>
		<input type="password" name="adminPass" class="form-control" placeholder="Пароль" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Войти</button>
		<p style="padding-top: 10px;">
				<?php
				if(isset($_SESSION['errorString'])) {
					echo $_SESSION['errorString'];
					unset($_SESSION['errorString']);
				}
				?>
			</p>
		<p class="mt-5 mb-3 text-muted">Chic&Shine © 2020</p>
	</form>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>

</body>
</html>