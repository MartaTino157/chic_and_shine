<?php 
ob_start();
?>
		<!-------------------- Слайдер ------------------->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item">
			<img class="d-block w-100" src="images/slide1.jpg" alt="Первый слайд">
			<div class="carousel-caption d-none d-md-block">
				<div>
				    <h3>Презентабельный салон в самом центре города</h3>
				    <p>Становитесь еще красивее с комфортом</p>
				</div>
			</div>
		</div>
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/slide2.jpg" alt="Второй слайд">
			<div class="carousel-caption d-none d-md-block">
			    <div>
			  		<h3>Используем современные технологии</h3>
				   	<p>Мы знаем, как дорого ваше время</p>
				</div>    
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/slide3.jpg" alt="Второй слайд">
			<div class="carousel-caption d-none d-md-block">
			    <div>
			  		<h3>Доверьте свои ногти в надежные руки</h3>
				   	<p>Каждый мастер обеспечит вам идеальный маникюр</p>
				</div>    
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		<!--<i class="fas angle-right"></i>-->
	</a>
</div>

			<!-------------------- Слайдер ------------------->


<section>
<!-------------------- Заглавие  ------------------->

	<div class="title">
		<div class="row">
			<div class="col-md-12">
				<h2>В этом разделе вы можете ознакомиться с прайс-листом</h2>
			</div>
		</div>
	</div>
	<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>Мастера салона используют новейшие приспособления для ухода за вашими ногтями, полировки и создания неповторимой формы. Материалы качественные, долго держатся и не портят Ваши ноготочки. В салоне Вы проведете не более 2 часов в абсолютном комфорте. Нам удалось сделать это удовольствие еще более удобным, подобрав <strong>максимально доступные цены</strong> на наши услуги. 
				</p>
			</div>
		</div>
	</div>

	<!-------------------- Заглавие  ------------------->

<!-------------------- Информация прайс листа ------------------>
<div class="title-body">
<div class="row">
	<div class="col-md-12">
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
</div>
</section>
<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>