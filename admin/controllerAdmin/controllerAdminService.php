<?php
class controllerAdminService{
	public static function PriceList(){
		$arr=modelAdminService::getPriceList();
		include_once 'viewAdmin/adminService.php';
	}
	public static function addItemPriceForm() {
		$arr = modelAdminCategory::getCategoryList();
		include_once('viewAdmin/addPriceForm.php');
	}
	public static function addItemPriceResult() {
		$test = modelAdminService::getPriceAdd();
		include_once('viewAdmin/addPriceForm.php');
	}
}
?>