<?php 
ob_start();
?>

<section>
<div class="row">
	<div class="col-md-12">
		<h2>Страничка отзывов</h2>
		<div class="comment">
			<p>
				Здесь вы можете оставить сообщение о работе нашего салона или сайта. Будем рады положительным отзывам, а также предложениям по модернизации.
			</p>
			<p>
				Обратите внимание, что не все отзывы публикуются. Со всеми вопросами обращайтесь к администратору в салоне или по электронному адресу со страницы <a href="appointment"><strong>записи</strong></a>.
			</p>
		</div>
	</div>
		
	<div class="rew">
		<form role="form" method="POST" action="answerReviews">
			<fieldset>
				<legend>Оставить сообщение</legend>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Имя</label>
					</div>
					<div class="form-group col-md-9">
						<input type="text" name="autor" class="form-control" placeholder="Введите Ваше имя" autofocus value="Аноним">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Email</label>
					</div>
					<div class="form-group col-md-9">
						<input type="email" name="email" class="form-control" placeholder="Введите ваш email" required>
						<small id="emailHelp" class="form-text text-muted">Email нужен, чтобы мы могли ответить на Ваши вопросы</small>
					</div>
				</div>
								
				<div class="form-group">
					<label>Текст сообщения</label>
					<textarea class="form-control" name="message" rows="3" required></textarea>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-success">Отправить</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
		

</div>
<div class="border">
	<h4>Отзывы</h4>
	<div class="row">
		<?php
			VeiwReviews::Reviews($arr);
		?>
	</div>
</div>
</section>
<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>