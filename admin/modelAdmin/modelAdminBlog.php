<?php
class modelAdminBlog {
	public static function allArticles() {
		$query = "SELECT * FROM blog ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
	public static function getArticleAdd(){
		$test = false;
		if(isset($_POST['save'])){
			if(isset($_POST['title']) && isset($_POST['article'])){
				$title=$_POST['title'];
				$article=$_POST['article'];
				$image=addslashes(file_get_contents($_FILES['picture']['tmp_name']));

				$sql = "INSERT INTO `blog`(`id`, `title`, `article`, `image`) VALUES (NULL, '$title', '$article', '$image')";
				$db = new Database();
				$item = $db->executeRun($sql);
				if($item==true) {
					$test=true;
				}
			}	
		}
		return $test;
	}
}
?>