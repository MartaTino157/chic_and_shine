<?php
class controllerAdminCategory{
	public static function AllCategory() {
		$arr = adminCategory::getAllCategory();
		include_once 'viewAdmin/adminCategory.php';
	}
}
?>