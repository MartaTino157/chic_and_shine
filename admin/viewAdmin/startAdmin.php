<?php ob_start()?>
<article>
	<div id="main" class="container">
		<h3>Вы успешно перешли на админ-панель!</h3>
		<h4>Перейдите по одной из верхних ссылок</h4>
	</div>
</article>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";