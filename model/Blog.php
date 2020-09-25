<?php
class Blog {
	public static function allArticles() {
		$query = "SELECT * FROM blog ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
	public static function getArticleByID($id) {
		$query = "SELECT * FROM blog where id=".(string)$id;
		$db = new Database();
		$n = $db->getOne($query);
		return $n; 
	}
}
?>