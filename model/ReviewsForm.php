<?php
class Review {
	public static function reviewsForm() {
		$controll=array(0=>false,1=>'error');
		if(isset($_POST['submit'])) {
			$errorString="";

			if($_POST['autor'] AND trim($_POST['autor']) == " ") {
				$autor = $_POST['autor'];
			}else{
				$autor = 'Аноним';
			}

			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			if(!$email) {
				$errorString.="<br>Неправильный email";
			}

			$message = $_POST['message'];
			if(trim($message) == '') {
				$errorString.="<br>Вы ничего не написали :( ";
			}

			if(mb_strlen($errorString) == 0) {
				
				$sql = "INSERT INTO `commentators` (`id`, `name`, `email`, `message`, `date`, `flag`) VALUES (NULL, '$autor', '$email', '$message', CURRENT_TIMESTAMP, '0');";
				$db = new Database();
				$item = $db->executeRun($sql);

				if($item)
					$controll=array(0=>true);
				else
					$controll=array(0=>false,1=>'error');

			}else{
				$controll=array(0=>false,1=>$errorString);
			}
		}
		return $controll;
	
	}

}

?>