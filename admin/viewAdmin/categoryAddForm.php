<?php ob_start();?>

<h3>Добавление категории</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Запись успешно добавлена</strong>
					<br>
					<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления записи!</strong>
				<br>
				<a href="adminGalery" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="addCategoryResult" enctype="multipart/form-data">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th scope="col">Название категории</th>
							<th scope="col">Управление</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" name="catName" class="form-control" autofocus required>
							</td>
							<td>
							<button type="submit" class="btn btn btn-outline-success" name="save">
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