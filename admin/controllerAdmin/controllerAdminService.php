<?php
class controllerAdminService{
	public static function PriceList(){
		$arr=modelAdminService::getPriceList();
		include_once 'viewAdmin/priceList.php';
	}
}
?>