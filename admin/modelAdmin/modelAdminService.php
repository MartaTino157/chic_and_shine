<?php
class modelAdminService{
	public static function getPriceList(){
		$query = "SELECT * FROM service ORDER BY id";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
	public static function getServiceAdd(){
		$test = false;
		if(isset($_POST['save'])){
			if(isset($_POST['serName']) && isset($_POST['price'])){
				$serName=$_POST['serName'];
				$price=$_POST['price'];
				$description=$_POST['description'];

				$sql="INSERT INTO `service`(`id`, `name`, `price`, `description`) VALUES (NULL, '$serName', '$price', '$description')";
				$db = new Database();
				$item = $db->executeRun($sql);
				if($item==true) {
					$test=true;
				}
			}	
		}
		return $test;
	}
	public static function getServiceDetail($id) {
		$query = "SELECT * FROM service WHERE id=".$id;
		$db = new Database();
		$arr = $db->getOne($query);
		return $arr;
	}
	public static function getServiceEdit($id) {
		$test=false;
		if(isset($_POST['save'])){
			if(isset($_POST['serName']) && isset($_POST['price'])){
				$serName=$_POST['serName'];
				$price=$_POST['price'];
				$description=$_POST['description'];

				$sql="UPDATE `service` SET `name` = '$serName', `price` = '$price', `description` = '$description' WHERE `id` = ".$id;
				$db = new Database();
				$item = $db->executeRun($sql);
				if($item==true){
					$test=true;
				}
			}
		} 
		return $test;
	}
	public static function getServiceDelete($id) {
		$test=false;
		if(isset($_POST['save'])){
			$sql="DELETE FROM `service` WHERE `service`.`id` = ".$id;
			$db = new Database();
			$item = $db->executeRun($sql);
			if($item==true){
				$test=true;
			}
		} 
		return $test;
	}

}
?>