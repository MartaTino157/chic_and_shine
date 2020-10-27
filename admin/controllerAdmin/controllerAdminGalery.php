<?php
class controllerAdminGalery{
	public function openGalery() {
		$arr = modelAdminGalery::getAllImages();
		include_once('viewAdmin/adminGalery.php');
	}
	
	public static function imageByCatID($id) {
		$arr = modelAdminGalery::getImagesByCategoryID($id);
		include_once 'viewAdmin/adminGalery.php';
	}

	public static function addGaleryPicForm() {
		$arr = modelAdminCategory::getAllCategory();
		include_once('viewAdmin/galeryPicAddForm.php');
	}
	public static function addGaleryPicResult() {
		$test = modelAdminGalery::getGaleryPicAdd();
		include_once('viewAdmin/galeryPicAddForm.php');
	}
}
?>