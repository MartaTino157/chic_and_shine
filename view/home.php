<?php 
ob_start();
?>
		<!-------------------- Слайдер ------------------->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/slide1_3.jpg" alt="Первый слайд">
			<div class="carousel-caption d-none d-md-block">
				<div>
				    <h3>Это первый слайд</h3>
				    <p>Здесь будет ваш текст</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/slide1_3.jpg" alt="Второй слайд">
			<div class="carousel-caption d-none d-md-block">
			    <div>
			  		<h3>Это второй слайд</h3>
				   	<p>Здесь будет ваш текст</p>
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
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			</div>
		</div>
	</div>

			<!-------------------- Красивая заметка  ------------------->

	<div class="notice">
		<div class="row">
			<div class="col-md-12">
				<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
			</div>
		</div>
	</div>

			<!-------------------- Красивая заметка  ------------------->


	<div class="title-body">
		<div class="row">
			<div class="col-md-6">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="col-md-6">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
		</div>
	</div>

</section>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>