<?php
class modelAdminCategory{
	public static function getAllCategory() {
		$query = "SELECT * FROM category";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr;
	}
	public static function getCategoryAdd(){
		$test = false;
		if(isset($_POST['save'])){
			if(isset($_POST['catName'])){
				$catName=$_POST['catName'];

				$sql="INSERT INTO `category`(`id`, `name`) VALUES (NULL, '$catName')";
				$db = new Database();
				$item = $db->executeRun($sql);
				if($item==true) {
					$test=true;
				}
			}	
		}
		return $test;
	}
	public static function getCategoryDetail($id) {
		$query = "SELECT * FROM category WHERE id=".$id;
		$db = new Database();
		$arr = $db->getOne($query);
		return $arr;
	}
	public static function getCategoryEdit($id) {
		$test=false;
		if(isset($_POST['save'])){
			if(isset($_POST['catName'])){
				$catName=$_POST['catName'];

				$sql="UPDATE `category` SET `name` = '$catName' WHERE `id` = ".$id;
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