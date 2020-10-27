<?php
class controllerAdminCategory{
	public static function AllCategory() {
		$arr = modelAdminCategory::getAllCategory();
		include_once 'viewAdmin/adminCategory.php';
	}
	public static function addCategoryForm() {
		include_once('viewAdmin/categoryAddForm.php');
	}
	public static function addCategoryResult() {
		$test = modelAdminCategory::getCategoryAdd();
		include_once('viewAdmin/categoryAddForm.php');
	}
}
?>