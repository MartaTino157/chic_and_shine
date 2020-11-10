<?php 
ob_start();
?>
<section>
	<div>
		<div class="but">
			<a class="btn btn-outline-success" href="addArticle" role="button">Добавить статью</a>
		</div>
		<div class="row">
			<?php 
				foreach($arr as $value) {
					echo "<div class='col-md-4'>";
					echo '<img src="../images/galery/'.$value['image'].'"width=250>';
					echo "</div>";

					echo "<div class='col-md-6'>";
					echo "<h4>".$value['title']."</h4>";

					$string = strip_tags($value['article']);
					$string = substr($string, 0, 500);
					$string = rtrim($string, "!,.-");
					$string = substr($string, 0, strrpos($string, ' '));
					echo $string."… ";
					
					echo "</div>";

					echo "<div class='col-md-2'>";
						echo '<div class="but2">';
							echo '<a href="editArticle?id='.$value['id'].'" class="btn btn btn-outline-warning">Редактировать</a>';
						echo "</div>";
						echo '<div class="but2">';
							echo '<a href="delArticle?id='.$value['id'].'" class="btn btn btn-outline-danger">Удалить</a>';
						echo "</div>";
					echo "</div>";
				}
			?>
		</div>
	</div>
</section>

<?php
	$content = ob_get_clean();
	include_once 'viewAdmin/templates/layout.php';
?>