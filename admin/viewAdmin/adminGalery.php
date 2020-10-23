<?php 
ob_start();
?>

<section>

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