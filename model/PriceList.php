<?php
class PriceList {
	public static function getPrice() {
		$query = "SELECT * FROM service ORDER BY id";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}