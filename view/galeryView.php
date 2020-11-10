<?php
class ViewImages {
	public static function allImages($arr){
		foreach($arr as $value) {
			echo '<div class="col-md-3">';
				echo '<div class="galery-capture">';
				echo '<img src="images/galery/'.$value['image'].'">';
				echo '</div>';
			echo '</div>';
		}
	}
}
?>
