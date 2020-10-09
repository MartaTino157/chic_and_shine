<?php 
ob_start();
?>

<!-------------------- Заглавие  ------------------->

	<div class="title">
		<div class="row">
			<div class="col-md-12">
				<h1>Lorem Ipsum</h1>
			</div>
		</div>
	</div>
	<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
				</p>
			</div>
		</div>
	</div>

	<!-------------------- Заглавие  ------------------->

<!-------------------- Информация прайс листа ------------------>
<div class="row">
	<div class="col-md-8">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Название процедуры</th>
					<th scope="col">Стоимость</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					ViewPrice::Price($arr);
				?>
			</tbody>
		</table>
	</div>
</div>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>