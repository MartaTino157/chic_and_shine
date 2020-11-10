<?php
class ViewImages {
	public static function allImages($arr){
		foreach($arr as $value) {
			echo '<div class="col-md-3">';
				echo '<img src="../images/galery/'.$value['image'].'"width=250>';
				echo '<div class="but">';
					echo '<a href="delGaleryPic?id='.$value['id'].'" class="btn btn btn-outline-danger">Удалить</a>';
				echo '</div>';
				
			echo '</div>';	
		}
	}
}
?>
