<?php 
ob_start();
?>
		<!-------------------- Слайдер ------------------->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/slide1.jpg" alt="Первый слайд">
			<div class="carousel-caption d-none d-md-block">
				<div>
				    <h3>Презентабельный салон в самом центре города</h3>
				    <p>Становитесь еще красивее с комфортом</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
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
				<h2>Салон ногтевого сервиса Chic&Shine</h2>
			</div>
		</div>
	</div>
	<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>Говорят, настоящую леди можно узнать по холёным рукам. Это ваша визитная карточка, поэтому они всегда должны выглядеть идеально.С давних времен женщины всего мира стремятся придать своим рукам привлекательный, ухоженный вид с мягкой гладкой кожей, мягко округленными пальчиками и аккуратными ноготками. Мастера салона красоты "Chic&Shine" обеспечат профессиональный и качественный уход за вашими ноготками.
				</p>
			</div>
		</div>
	</div>
				<!-------------------- Заглавие  ------------------->


<div class="plus">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<div class="vertical">
				<i class="fas fa-gem"></i>
				<p>
					Качественные материалы
				</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-3">
			<div class="vertical">
				<i class="fas fa-euro-sign"></i>
				<p>
					Приемлемые цены
				</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-3">
			<div class="vertical">
				<i class="fas fa-heart"></i>
				<p>
					Дружелюбный коллектив
				</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-3">
			<div class="vertical">
				<i class="fab fa-fly"></i>
				<p>
					Креативный подход
				</p>
			</div>
		</div>
	</div>
</div>


<div class="title-body">
		<div class="row">
			<div class="col-md-12">
				<p>Как известно, поход в салон красоты и процедуры по уходу дают возможность не только выглядеть лучше и производить положительное впечатление на окружающих, но и благотворно влияют на настроение. Особенно чувствуют зависимость "маникюр-настроение" женщины, поэтому для представительниц прекрасного пола мы предоставляем целый комплекс услуг, направленных на приведение в порядок вашего внешнего вида и состояния души, воплощения самых интересных фантазий. </p>
			</div>
		</div>
	</div>

			<!-------------------- Красивая заметка  ------------------->

	<div class="notice">
		<div class="row">
			<div class="col-md-12">
				<p>Даже для самой взыскательной клиентки мы подберем именно тот лак, цвет которого поднимет настроение надолго!</p>
			</div>
		</div>
	</div>

			<!-------------------- Красивая заметка  ------------------->


	<div class="title-body">
		<div class="row">
			<div class="col-md-6">
				<p>Мастера маникюра в нашей студии предложат вам множество вариантов оформления ногтей, начиная от простого классического или европейского маникюра с приданием формы еогтевой пластине, заканчиввая всеми типами покрытия: шеллак, наращивание, а также укрепление ногтей гелем.</p>
			</div>
			<div class="col-md-6">
				<p>Если вы не можете самостоятельно определиться с дизайном маникюра, то предварительно, на сайте нашего маникюрного салона, можно выбрать оодин из уже реализованных вариантов, посмотрев <a href="galery" id="3"><strong>фото работ мастеров</strong></a>.</p>
			</div>
		</div>
	</div>

</section>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>