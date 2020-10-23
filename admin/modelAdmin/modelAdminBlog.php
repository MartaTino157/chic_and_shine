<?php
class adminBlog {
	public static function allArticles() {
		$query = "SELECT * FROM blog ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}
?>