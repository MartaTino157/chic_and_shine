<?php 
ob_start();
?>

<section>
	<div class="title">
		<div class="row">
			<div class="col-md-12">
				<h1>Lorem Ipsum</h1>
			</div>
		</div>
	</div>
	<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>
			</div>
		</div>
	</div>
	<div>
		<div class="row">
			<?php 
				ViewBlog::allBlog($arr);
			?>
		</div>
	</div>
</section>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>