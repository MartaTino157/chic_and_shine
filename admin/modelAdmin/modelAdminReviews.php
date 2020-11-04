<?php
class modelAdminReviews{
	public static function getReviews() {
		$query = "SELECT * FROM commentators WHERE flag = 0 ORDER BY id DESC";
		$db = new Database();
		$arr = $db->getAll($query);
		return $arr; 
	}
	public static function getReviewDetail($id) {
		$query = "SELECT * FROM commentators WHERE id=".$id;
		$db = new Database();
		$arr = $db->getOne($query);
		return $arr;
	}
	public static function getReviewEdit($id) {
		$test=false;
		if(isset($_POST['save'])){
			$sql="UPDATE `commentators` SET `flag` = '1' WHERE `id` = ".$id;
			$db = new Database();
			$item = $db->executeRun($sql);
			if($item==true){
				$test=true;
			}
		} 
		return $test;
	}
	public static function getReviewDelete($id) {
		$test=false;
		if(isset($_POST['save'])){
			$sql="DELETE FROM `commentators` WHERE `commentators`.`id` = ".$id;
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