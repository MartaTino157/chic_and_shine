<?php
class controllerAdminGalery{
	public static function getGalery(){
		$arr=modelAdminGalery::getAllImages();
		include_once 'viewAdmin/galeryEdit.php';
	}
	public static function AllCategory() {
		$arr = modelAdminGalery::getAllCategory();
		include_once 'viewAdmin/galeryEdit.php';
	}
	public static function imageByCatID($id) {
		$arr = modelAdminGalery::getImagesByCategoryID($id);
		include_once 'viewAdmin/galeryEdit.php';
	}
}
?>