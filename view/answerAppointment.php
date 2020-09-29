<?php 
ob_start();
if(isset($result)) {

	if($result[0]==true) {
		?>
			<br>
			<div class="alert alert-info">
				<strong>Запись оформлена! </strong><br> <a href="appointment">Назад</a>
			</div>

			<?php
	} 
	else if($result[0]==false){
		?>
		<br>
		<div class="alert alert-warning">
			<strong>Ошибка! </strong> <?php echo $result[1];?> <br><a href="appointment">Назад</a>
		</div>

		<?php
	}
}
?>
<?php $content=ob_get_clean();?>
<?php include "view/layout.php";