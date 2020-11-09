<?php
class VeiwReviews {
	public static function Reviews($arr) {
		foreach ($arr as $value) {
			echo "<div class='col-md-4'>";
			echo "<blockquote>";
			echo "<p>".$value['message']."</p>";
			echo "<p>Автор: ".$value['name']."</p>";
			echo "</blockquote>";
			echo "</div>";
		}
	}
}