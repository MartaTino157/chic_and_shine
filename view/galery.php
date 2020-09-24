<?php 
ob_start();
?>

<div>
	<div class="row">
		<div class="col-md-3">
			<nav class="navbar navbar-expand-md navbar-light bg-light">
				<ul class="nav flex-column">
					<?php
						Controller::AllCategory();
					?>
				</ul>
			</nav>
		</div>
		<div class="col-md-9">
		<?php
			ViewImages::allImages($arr);
		?>
		</div>
	</div>
</div>


<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>