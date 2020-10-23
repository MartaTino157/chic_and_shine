<?php
class controllerAdminGalery{
	public function openGalery() {
		$arr = adminGalery::getAllImages();
		include_once('viewAdmin/adminGalery.php');
	}
	
	public static function imageByCatID($id) {
		$arr = adminGalery::getImagesByCategoryID($id);
		include_once 'viewAdmin/adminGalery.php';
	}
}
?>