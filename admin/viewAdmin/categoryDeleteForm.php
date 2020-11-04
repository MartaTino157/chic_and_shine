<?php ob_start();?>

<h3>Удаление категории</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Категория успешно удалена</strong>
					<br>
					<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка удаления категории!</strong>
				<br>
				<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="delCategoryResult?id=<?php echo $id;?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label><h5>Вы действительно хотите удалить категорию?</h5></label>
					</div>
					<div class="form-group col-md-6">
						<button type="submit" class="btn btn btn-outline-success" name="save">Да</button>
						<a href="adminGalery" class="btn btn-outline-primary">Нет</a>
					</div>
				</div>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>