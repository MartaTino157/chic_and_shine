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
	public static function editServiceForm($id) {
		$detail=modelAdminService::getServiceDetail($id);
		include_once('viewAdmin/serviceEditForm.php');
	}
	public static function editServiceResult($id) {
		$test=modelAdminService::getServiceEdit($id);
		include_once('viewAdmin/serviceEditForm.php');
	} 
	public static function deleteServiceForm($id){
		//$detail=modelAdminService::getServiceDetail($id);
		include_once('viewAdmin/serviceDeleteForm.php');
	}
	public static function deleteServiceResult($id) {
		$test=modelAdminService::getServiceDelete($id);
		include_once('viewAdmin/serviceDeleteForm.php');
	} 
}
?>