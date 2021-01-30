<?php ob_start();?>

<h3>Редактирование статьи блога</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Запись успешно обновлена</strong>
					<br>
					<a href="adminBlog" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка обновления записи!</strong>
				<br>
				<a href="adminBlog" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="editArticleResult?id=<?php echo $id;?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Заголовок</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<input type="text" name="title" class="form-control" value="<?php echo $detail['title'];?>" required autofocus>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Статья</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<textarea class="form-control" id="editor1" rows="15" name="article" required><?php echo $detail['article'];?></textarea>
						<script type="text/javascript">
     						CKEDITOR.replace( 'editor1');
    					</script> 
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Картинка</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<?php echo '<img src="../images/galery/'.$detail['image'].'"width=150>';?>
						<input type="file" name="image" class="form-control-file">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-10">
						<button type="submit" class="btn btn btn-outline-success" name="save">Сохранить</button>
						<a href="adminBlog" class="btn btn-outline-primary">Назад</a>
					</div>
				</div>
			</form>
		<?php }?>
<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";?>