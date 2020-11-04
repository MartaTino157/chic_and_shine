<?php
class modelAdminGalery {
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
	public static function getGaleryPicAdd(){
		$test = false;
		if(isset($_POST['save'])){
			$image=addslashes(file_get_contents($_FILES['picture']['tmp_name']));
			if($image != ""){
				$idCat=$_POST['idCat'];
				$sql="INSERT INTO `galery`(`id`, `image`, `category`) VALUES (NULL, '$image', '$idCat')";
				$db = new Database();
				$item = $db->executeRun($sql);
				if($item==true) {
					$test=true;
				}	
			}
		}
		return $test;
	}
	public static function getGaleryPicDelete($id) {
		$test=false;
		if(isset($_POST['save'])){
			$sql="DELETE FROM `galery` WHERE `galery`.`id` = ".$id;
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