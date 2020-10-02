<?php 
ob_start();
if(isset($result)) {

	if($result[0]==true) {
		?>
			<br>
			<div class="alert alert-info">
				<strong>Ваш комментарий отправлен на рассмотрение!<br>Через некоторое время он появится на странице</strong><br> <a href="reviews">Назад</a>
			</div>

			<?php
	} 
	else if($result[0]==false){
		?>
		<br>
		<div class="alert alert-warning">
			<strong>Ошибка! </strong> <?php echo $result[1];?> <br><a href="reviews">Назад</a>
		</div>

		<?php
	}
}
?>
<?php $content=ob_get_clean();?>
<?php include "view/layout.php";