<?php ob_start();?>

<h3>Добавление статьи блога</h3>
		<?php
		if(isset($test)) {
			if($test==true) {
				?>
				<div class="alert alert-info">
					<strong>Статья успешно добавлена</strong>
					<br>
					<a href="adminBlog" class="btn btn-outline-primary">Назад</a>
				</div>
			<?php 
			}elseif ($test==false){
			?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления статьи!</strong>
				<br>
				<a href="adminBlog" class="btn btn-outline-primary">Назад</a>
			</div>
			<?php
			}
		}else{ ?>
			<form method="POST" action="addArticleResult" enctype="multipart/form-data">
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Заголовок</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<input type="text" name="title" class="form-control" required autofocus>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label>
							<h5>Статья</h5>
						</label>
					</div>
					<div class="form-group col-md-9">
						<textarea class="form-control" id="editor" rows="15" name="article" required></textarea>
						<script type="text/javascript">
     						CKEDITOR.replace( 'editor');
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
						<input type="file" name="picture" class="form-control-file" required>
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