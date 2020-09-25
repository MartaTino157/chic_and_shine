<?php
class ViewImages {
	public static function allImages($arr){
		foreach($arr as $value) {
			//echo '<a class="example-image-link" href="data:image/jpeg;base64,"'.base64_encode($value['image']).'"';
			//echo 'data-lightbox="example-set">';
			echo '<img src="data:image/jpeg;base64,'.base64_encode($value['image']).'"width=250 />';
			//echo '</a>';
		}
	}
}
?>