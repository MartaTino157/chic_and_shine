<?php
class ViewImages {
	public static function allImages($arr){
		foreach($arr as $value) {
			echo '<img src="data:image/jpeg;base64,'.base64_encode($value['image']).'"width=250 />';
		}
	}
}
?>