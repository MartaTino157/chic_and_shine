<?php
class ViewBlog {
	public static function allBlog($arr){
		foreach($arr as $value) {
			echo "<div class='col-md-5'>";
			echo '<img src="data:image/jpeg;base64,'.base64_encode($value['image']).'"width=250 />';
			echo "</div>";

			echo "<div class='col-md-6'>";
			echo "<h4>".$value['title']."</h4>";

			//echo $value['article'];
			$string = strip_tags($value['article']);
			$string = substr($string, 0, 500);
			$string = rtrim($string, "!,.-");
			$string = substr($string, 0, strrpos($string, ' '));
			echo $string."… ";
			
			echo '<a href="article?id='.$value['id'].'" class="btn btn-outline-primary">Читать дальше</a>';
			echo "</div>";
		}
	}

	public static function readArticle($n) {
		//echo "jhfgasljghs";
		echo "<div class='col-md-4'>";
		echo '<img src="data:image/jpeg;base64,'.base64_encode($n['image']).'"width=300 />';
		echo "</div>";

		echo "<div class='col-md-6'>";
		echo "<h3>".$n['title']."</h3>";
		echo $n['article'];
		echo '<a href="blog" class="btn btn-outline-primary">Назад</a>';
		echo "</div>";

	}
}
?>