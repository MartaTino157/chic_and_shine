<?php 
ob_start();
?>
<div class="row">
	<div class="col-md-12">
		<a class="btn btn-outline-success" href="addService" role="button">Добавить услугу</a>
		<table class="table table-hover">
			<thead class="thead-light">
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Название процедуры</th>
					<th scope="col">Стоимость</th>
					<th scope="col">Управление</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($arr as $row) {
						echo '<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['price'].'€</td>';
							echo '<td>
							<a href="priceEdit?id='.$row['id'].'" class="btn btn btn-outline-warning">Редактировать</a>
							<a href="priceDelete?id='.$row['id'].'" class="btn btn btn-outline-danger">Удалить</a>
								</td>';
						echo '</tr>';
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
	$content = ob_get_clean();
	include_once 'viewAdmin/templates/layout.php';
?>
