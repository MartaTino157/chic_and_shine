<?php 
class modelAdmin {
	public static function adminAuthentication() {
		if (isset($_SESSION['sessionId'])) {
			$logIn=true;
		}else{
			$logIn=false;
			if(isset($_POST['btnLogin'])) {

				if(isset($_POST['adminEmail']) && isset($_POST['adminPass']) && $_POST['adminEmail']!="" && $_POST['adminPass'] !="") {
					$adminEmail = filter_input(INPUT_POST, 'adminEmail', FILTER_VALIDATE_EMAIL);
					$adminPass = filter_input(INPUT_POST, 'adminPass' );
					$sql='SELECT * FROM `users` WHERE `email` ="'.$adminEmail.'"';
					$db = new database();
					$item = $db->getOne($sql);

					if($item!=null) {
						$loginEmail = strtolower($_POST['adminEmail']);
						$password = $_POST['adminPass'];
						
						if($loginEmail == $item['email'] && password_verify($password, $item['password'])) {
							$_SESSION['sessionId']=session_id();
							$_SESSION['userId']=$item['id'];
							$_SESSION['status']=$item['status'];
							$logIn=true;
						}
					}
				}
			}
		}
		return $logIn;
	}
	public static function adminLogout() {
		unset($_SESSION['sessionId']);
		unset($_SESSION['userId']);
		unset($_SESSION['status']);
		session_destroy();
		return ;
	}
}
?>