<?php
class ViewBlog {
	public static function allBlog($arr){
		foreach($arr as $value) {
			echo "<div class='col-md-5'>";
				echo '<div class="blog-capture">';
					echo '<img src="images/galery/'.$value['image'].'">';
				echo "</div>";
			echo "</div>";

			echo "<div class='col-md-6'>";
			echo "<h4>".$value['title']."</h4>";

			echo '<p>';
				$string = strip_tags($value['article']);
				$string = substr($string, 0, 500);
				$string = rtrim($string, "!,.-");
				$string = substr($string, 0, strrpos($string, ' '));
				echo $string."… ";
			echo '</p>';
			echo '<div class="read">';
				echo '<a href="article?id='.$value['id'].'" class="btn btn-outline-primary">Читать дальше</a>';
			echo '</div>';
			echo "</div>";
		}
	}

	public static function readArticle($n) {
		echo "<div class='col-md-12'>";
			echo "<div class='article-capture'>";
				echo '<img src="images/galery/'.$n['image'].'">';
			echo "</div>";
		echo "</div>";
		echo "<div class='title-body'>";
			echo "<div class='col-md-12'>";
				echo "<h3>".$n['title']."</h3>";
				echo "<div>";
					echo $n['article'];
				echo "</div>";
				echo '<div class="back">';
					echo '<a href="blog" class="btn btn-outline-primary">Назад</a>';
				echo '</div>';
			echo "</div>";
		echo "</div>";



	}
}
?>