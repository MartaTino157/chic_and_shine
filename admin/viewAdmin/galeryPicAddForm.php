<?php ob_start();?>

<h3>Добавление фотографии</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Фотография успешно добавлена</strong>
					<br>
					<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Вы не загрузили изображение!</strong>
				<br>
				<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="addGaleryPicResult" enctype="multipart/form-data">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th scope="col">Загрузите новое изображение</th>
							<th scope="col">Выберите категорию</th>
							<th scope="col">Управление</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="file" name="picture" class="form-control-file" autofocus required></td>
							<td>
								<select name="idCat" class="form-control">
									<option value="NULL">Без категории</option>
								<?php
								foreach($arr as $row) {
									echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}
								?>
							</select>
							</td>
							<td><button type="submit" class="btn btn btn-outline-success" name="save">
								Сохранить
							</button>
							<a href="adminGalery" class="btn btn-outline-primary">Назад</a></td>
						</tr>
					</tbody>
				</table>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>