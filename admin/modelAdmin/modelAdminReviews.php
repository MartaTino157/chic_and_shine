<?php
class modelAdminReviews{
	public static function getReviews() {
		$query = "SELECT * FROM commentators WHERE flag = 0 ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}
?>