<?php ob_start();?>

<h3>Удаление услуги</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Запись успешно удалена</strong>
					<br>
					<a href="adminService" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка удаления записи!</strong>
				<br>
				<a href="adminService" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="delServiceResult?id=<?php echo $id;?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label><h5>Вы действительно хотите удалить запись?</h5></label>
					</div>
					<div class="form-group col-md-6">
						<button type="submit" class="btn btn btn-outline-success" name="save">Да</button>
						<a href="adminService" class="btn btn-outline-primary">Нет</a>
					</div>
				</div>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>