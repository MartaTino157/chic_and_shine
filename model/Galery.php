<?php
class Galery {
	public static function getAllImages() {
		$query = "SELECT * FROM galery ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}
?>