<?php ob_start();?>

<h3>Редактирование услуги</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Запись успешно обновлена</strong>
					<br>
					<a href="adminService" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка обнавления записи!</strong>
				<br>
				<a href="adminService" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="editServiceResult?id=<?php echo $id;?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Название процедуры</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<input type="text" name="serName" class="form-control" autofocus required value=<?php echo $detail['name'];?>>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Стоимость</h5>
						</label>
					</div>
					<div class="form-group col-md-3">
						<input type="text" name="price" class="form-control" required value=<?php echo $detail['price'];?>>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Описание услуги</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<textarea name="description" class="form-control" rows="10"><?php echo $detail['description'];?></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Управление</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<button type="submit" class="btn btn btn-outline-success" name="save">
								Сохранить
						</button>
						<a href="adminService" class="btn btn-outline-primary">Назад</a>
					</div>
				</div>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>