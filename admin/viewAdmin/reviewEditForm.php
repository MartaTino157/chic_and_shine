<?php ob_start();?>

<h3>Публикация сообщения</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Сообщение успешно опубликовано</strong>
					<br>
					<a href="adminReviews" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка публикации сообщения!</strong>
				<br>
				<a href="adminReviews" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="publishReviewResult?id=<?php echo $id;?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-12">
						<p><?php echo $detail['message'];?></p>
						<p>Автор: <?php echo $detail['email']."(".$detail['name'].")"?></p>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label><h5>Вы действительно хотите опубликовать это сообщение?</h5></label>
					</div>
					<div class="form-group col-md-6">
						<button type="submit" class="btn btn btn-outline-success" name="save">Да</button>
						<a href="adminReviews" class="btn btn-outline-primary">Нет</a>
					</div>
				</div>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>