<?php 
ob_start();
?>

<section>

	<a class="btn btn-outline-success" href="addGaleryPic" role="button">Добавить фотографию</a>
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
				<nav class="navbar navbar-expand-md navbar-light bg-light">
					<ul class="nav flex-column">
						<?php
							controllerAdminCategory::AllCategory();
						?>
					</ul>
				</nav>
				<a class="btn btn-outline-success" href="addCategory" role="button">Добавить категорию</a>
			</div>
		</div>
		<div class="col-md-9">
		<?php
			ViewImages::allImages($arr);
		?>
		</div>
	</div>
</section>


<?php
	$content = ob_get_clean();
	include_once 'viewAdmin/templates/layout.php';
?>