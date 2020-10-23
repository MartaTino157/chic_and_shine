<?php
class adminGalery {
	public static function getAllImages() {
		$query = "SELECT * FROM galery ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
	public static function getImagesByCategoryID($id) {
		$query = "SELECT * FROM galery where category=".(string)$id." ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}