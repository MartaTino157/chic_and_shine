<?php 
ob_start();
?>
<section>
	<div>
		<div class="row">
			<?php 
				foreach($arr as $value) {
					echo "<div class='col-md-4'>";
					echo '<img src="data:image/jpeg;base64,'.base64_encode($value['image']).'"width=250 />';
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
					echo '<a href="articleEdit?id='.$value['id'].'" class="btn btn btn-outline-warning">Редактировать</a>';
					echo '<a href="articleDelete?id='.$value['id'].'" class="btn btn btn-outline-danger">Удалить</a>';
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