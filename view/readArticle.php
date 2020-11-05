<?php 
ob_start();
?>
<section>
	<div class="row">
		<?php ViewBlog::readArticle($n); ?>	
	</div>
</section>


<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>