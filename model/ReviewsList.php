<?php
class Reviews {
	public static function getReviews() {
		$query = "SELECT * FROM commentators ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}