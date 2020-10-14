<?php 
class modelAdmin {
	public static function userAuthentication() {
		if (isset($_SESSION['sessionId'])) {
			$logIn=true;
		}else{
			$logIn=false;
			if(isset($_POST['btnLogin'])) {
				if(isset($_POST['adminEmail']) && isset($_POST['adminPass']) && $_POST['adminEmail']!="" && $_POST['adminPass'] !="") {
					$adminEmail = filter_input(INPUT_POST, 'adminEmail', FILTER_VALIDATE_EMAIL);
					$adminPass = filter_input(INPUT_POST, 'adminPass' );


					if($item!=null) {
						$loginEmail = strtolower($_POST['email']);
						$password = $_POST['password'];
						if($loginEmail == $item['email'] && password_verify($password, $item['password'])) {
							$_SESSION['sessionId']=session_id();
							$_SESSION['userId']=$item['id'];
							$_SESSION['name']=$item['username'];
							$_SESSION['status']=$item['status'];
							$logIn=true;
						}
					}
				}
			}
		}
		return $logIn;
	}
	public static function userLogout() {
		unset($_SESSION['sessionId']);
		unset($_SESSION['userId']);
		unset($_SESSION['name']);
		unset($_SESSION['status']);
		session_destroy();
		return ;
	}
}
?>