<?php 
ob_start();
?>

<section>
	<h3>Категории</h3>
	<a class="btn btn-outline-success" href="addCategory" role="button">Добавить категорию</a>
	<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Название категории</th>
					<th scope="col">Управление</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					controllerAdminCategory::AllCategory();
				?>
			</tbody>
		</table>

	<a class="btn btn-outline-success" href="addGaleryPic" role="button">Добавить фотографию</a>

		<div>
			<?php
				ViewImages::allImages($arr);
			?>
		</div>
</section>


<?php
	$content = ob_get_clean();
	include_once 'viewAdmin/templates/layout.php';
?>