<?php 
ob_start();
?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Похоже что-то пошло не так...</h2>
			<h3>Извините, страница еще не создана</h3>
			<a href="./" class="btn btn-outline-primary">Назад</a>
		</div>
	</div>
</div>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>