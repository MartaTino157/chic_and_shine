<?php 
ob_start();
?>

<section>
	<div class="row">
		<div class="col-md-6">
			<h3 class="h-appoint">Запись на процедуру</h3>
			<p class="p-appoint">Двери салона "Chic&Shine" всегда открыты для Вас! Здесь вы можете увидеть наши контактные данные и посмотреть местоположение с помощью карты. Вы можете записаться на процедуру любым удобным для Вас способом: </p>
			<ul>
				<li>позвонив по телефону</li>
				<li>написав на электронный фдрес салона</li>
				<li>у администратора, непосредственно в салоне</li>
				<li>или же <strong>заполнить удобную онлайн форму</strong></li>
			</ul>
		</div>
		<div class="col-md-6">
			<form role="form" method="POST" action="answerAppointment">
				<fieldset>
					<legend class="h-appoint">Заполните форму записи</legend>
					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Имя</label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" name="name" class="form-control" placeholder="Введите Ваше имя" required autofocus>
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

					<div class="row">
						<div class="form-group col-md-3">
							<label>Процедура</label>
						</div>
						<div class="form-group col-md-9">
							<textarea class="form-control" name="procedure" placeholder="Напишите, что вы хотите" rows="2" required></textarea>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Выберите дату</label>
						</div>
						<div class="form-group col-md-9">
							<input type="date" name="date" class="form-control" required>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<label>Выберите время</label>
						</div>
						<div class="form-group col-md-9">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="time" id="time1" value="9:00">
		  						<label class="form-check-label" for="inlineRadio1">9:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="time" id="time2" value="11:00">
		  						<label class="form-check-label" for="inlineRadio1">11:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="time" id="time3" value="13:00">
		  						<label class="form-check-label" for="inlineRadio1">13:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="time" id="time4" value="15:00">
		  						<label class="form-check-label" for="inlineRadio1">15:00</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="time" id="time5" value="17:00">
		  						<label class="form-check-label" for="inlineRadio1">17:00</label>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-10">
							<div class="b-appoint">
								<button type="submit" class="btn btn-primary" name="save">Записаться</button>
							</div>
							
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="contact">
		<div class="row">
			<div class="col-md-8">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2033.3708101886336!2d27.3970833519145!3d59.36015001550282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469465619310b463%3A0xcb2369327f42261b!2sKutse%2013%2C%20J%C3%B5hvi%2C%2041533%20Ida-Viru%20maakond!5e0!3m2!1sru!2see!4v1599820717267!5m2!1sru!2see" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="info-appoint">
					<h4>Контакты</h4>
					<h5>Эстония, Ида-Виирумаа</h5>
					<h5>Йыхви, Кутсе 13</h5>
					<h5>+123456789</h5>
					<h5>chic.shine@gmail.com</h5>	
				</div>
			</div>
		</div>
	</div>
	
</section>

<?php
	$content = ob_get_clean();
	include_once 'view/layout.php';
?>