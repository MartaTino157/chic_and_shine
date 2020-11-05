<?php 
ob_start();
?>

<section>
	<div class="title">
		<div class="row">
			<div class="col-md-12">
				<h2>Страничка самообразования</h2>
			</div>
		</div>
	</div>
	<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>
					На этой странице вы можете ознакомиться с краткой информацией на полезные для вас темы в отношении индустрии красоты, правильного ухода за руками и многое другое.
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