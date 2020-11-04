<?php 
ob_start();
?>
<section>
	<h3>Фильтрация отзывов</h3>
	<div class="row">
		<?php
		foreach ($arr as $value) {
			echo "<div class='col-md-8'>";
			echo "<blockquote>";
			echo "<p>".$value['message']."</p>";
			echo "<p>Автор: ".$value['email']."(".$value['name'].")</p>";
			echo "</blockquote>";
			echo "</div>";

			echo '<div class="col-md-3">';
			echo '<a href="publishReview?id='.$value['id'].'" class="btn btn btn-outline-success">Опубликовать</a>';
			echo '<a href="delReview?id='.$value['id'].'" class="btn btn btn-outline-danger">Удалить</a>';
			echo "</div>";
		}
		?>
	</div>
		<hr>
		<h4>Опубликованные отзывы</h4>
		<br>
		<?php
			echo '<a href="published" class="btn btn btn-outline-primary">Перейти</a>';
		?>
</section>

<?php
	$content = ob_get_clean();
	include_once 'viewAdmin/templates/layout.php';
?>