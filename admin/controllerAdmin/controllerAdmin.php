<?php 
class controllerAdmin {
	public static function formLogin(){
		include_once('viewAdmin/formLogin.php');
	}
	public static function loginAction() {
		$logIn=modelAdmin::adminAuthentication();
		if(isset($logIn) and $logIn==true) {
			include_once('viewAdmin/startAdmin.php');
		}
		else {
			$_SESSION['errorString']='Неправильное имя пользователя или пароль';
			include_once('viewAdmin/formLogin.php');
		}
	}
	public static function logoutAction() {
		modelAdmin::adminLogout();
		include_once('viewAdmin/formLogin.php');
	}
	public static function error404(){
		include_once('viewAdmin/error404.php');
	}
}
?>