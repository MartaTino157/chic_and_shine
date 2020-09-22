<?php 
ob_start();
?>

<div>
	<div class="row">
		<div class="col-md-6">
			<h3>Lorem Ipsum</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		</div>
		<div class="col-md-6">
			<form>
				<fieldset>
					<legend>Заполните форму записи</legend>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Имя</label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" name="yourname" class="form-control" placeholder="Введите Ваше имя" required autofocus>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Телефон</label>
						</div>
						<div class="form-group col-md-9">
							<input type="tel" name="telefon" class="form-control" placeholder="Введите ваш телефон" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Выберите дату</label>
						</div>
						<div class="form-group col-md-9">
							<input type="date" name="mydate" class="form-control" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Подходящее время</label>
						</div>
						<div class="form-group col-md-9">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		  						<label class="form-check-label" for="inlineRadio1">9:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		  						<label class="form-check-label" for="inlineRadio1">11:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		  						<label class="form-check-label" for="inlineRadio1">13:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		  						<label class="form-check-label" for="inlineRadio1">15:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
		  						<label class="form-check-label" for="inlineRadio1">17:00</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary">Записаться</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<div>
	<div class="row">
		<div class="col-md-8">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033.3708101886336!2d27.3970833519145!3d59.36015001550282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469465619310b463%3A0xcb2369327f42261b!2sKutse%2013%2C%20J%C3%B5hvi%2C%2041533%20Ida-Viru%20maakond!5e0!3m2!1sru!2see!4v1599820717267!5m2!1sru!2see" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="col-md-4">
			<h4>Lorem Ipsum</h4>
			<h5>Lorem Ipsum</h5>
			<h5>Lorem Ipsum</h5>
			<h5>+123456789</h5>
			<h5>Lorem.Ipsum@lorem.com</h5>	
		</div>
	</div>
</div>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>