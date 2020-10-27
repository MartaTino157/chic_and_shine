<?php
class controllerAdminService{
	public static function PriceList(){
		$arr=modelAdminService::getPriceList();
		include_once 'viewAdmin/adminService.php';
	}
	public static function addServiceForm() {
		include_once('viewAdmin/serviceAddForm.php');
	}
	public static function addServiceResult() {
		$test = modelAdminService::getServiceAdd();
		include_once('viewAdmin/serviceAddForm.php');
	}
}
?>