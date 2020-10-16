<?php
class modelAdminService{
	public static function getPriceList(){
		$query = "SELECT * FROM service ORDER BY id";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
}
?>