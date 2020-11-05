<?php 
ob_start();
?>

<section>

	<div class="row">
		<div class="col-md-12">
			<div class="sidebar">
				<nav class="navbar navbar-expand-md navbar-light bg-light">
					<ul class="navbar-nav">
						<?php
							Controller::AllCategory();
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="row">
		
		<?php
			ViewImages::allImages($arr);
		?>
		
	</div>
		
	</div>
</section>


<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>