<?php ob_start()?>
<article>
	<div id="main" class="container">
		<h3>Админ панель</h3>
	</div>
</article>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";