<?php ob_start();?>

<h3>Добавление услуги</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Запись успешно добавлена</strong>
					<br>
					<a href="adminService" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления записи!</strong>
				<br>
				<a href="adminService" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="addServiceResult" enctype="multipart/form-data">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th scope="col">Название процедуры</th>
							<th scope="col">Стоимость</th>
							<th scope="col">Описание услуги</th>
							<th scope="col">Управление</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" name="serName" class="form-control" autofocus required>
							</td>
							<td>
								<input type="text" name="price" class="form-control" required>
							</td>
							<td >
								<textarea name="description" class="form-control" rows="3"></textarea>
							</td>
							<td>
							<button type="submit" class="btn btn btn-outline-success" name="save">
								Сохранить
							</button>
							<a href="adminService" class="btn btn-outline-primary">Назад</a></td>
						</tr>
					</tbody>
				</table>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>