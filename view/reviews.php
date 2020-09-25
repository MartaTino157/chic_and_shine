<?php 
ob_start();
?>

<div class="row">
	<div class="col-md-4">
		<form>
			<fieldset>
				<legend>Оставить сообщение</legend>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Имя</label>
					</div>
					<div class="form-group col-md-9">
						<input type="text" name="yourname" class="form-control" placeholder="Введите Ваше имя" autofocus value="Аноним">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label>Email</label>
					</div>
					<div class="form-group col-md-9">
						<input type="tel" name="telefon" class="form-control" placeholder="Введите ваш email" required>
						<small id="emailHelp" class="form-text text-muted">Email нужен, чтобы мы могли ответить на Ваши вопросы</small>
					</div>
				</div>
								
				<div class="form-group">
					<label>Текст сообщения</label>
					<textarea class="form-control" rows="3" required></textarea>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-success">Отправить</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="col-md-5">
		<h2>Lorem Ipsum</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	</div>
</div>
<div>
	<h3>Список отзывов</h3>
	<div class="row">
		<?php
			VeiwReviews::Reviews($arr);
		?>
	</div>
</div>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>