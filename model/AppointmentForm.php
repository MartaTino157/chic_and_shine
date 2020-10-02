<?php 
class Appointment {


	public function appointmentForm() {
		$controll=array(0=>false,1=>'error');
		if(isset($_POST['save'])) {
			$errorString="";

			$name = $_POST['name'];
			if(mb_strlen($name) < 2 || trim($name) == '') {
				$errorString.="<br>Проверьте правильность введенного имени";
			}

			$telefon = $_POST['telefon'];
			if(mb_strlen($telefon) < 8 || trim($telefon) == '') {
				$errorString.="<br>Проверьте правильность введенного номера телефона";
			}

			$procedure = $_POST['procedure'];
			if(mb_strlen($procedure) < 5 || trim($procedure) == '') {
				$errorString.="<br>Слишком короткое описание процедуры";
			}

			$date = $_POST['date'];
			if($date <= date('Y-m-d')){
				$errorString.="<br>Пожалуйста, выберите другую дату";
			}

			
			if(!isset($_POST['time'])) {
				$errorString.="<br>Вы не выбрали подходящее время";
			}else{
				$time = $_POST['time'];
			}
			$recordDate = date('Y-m-d');

			if(mb_strlen($errorString) == 0) {
				
				
				$sql = "SELECT * FROM `customers` WHERE phone = '".$telefon."' AND name = '".$name."'" ;
				$db = new Database();
				$item = $db->getOne($sql);
				
				if($item ) {
					//print_r($item);
					$id=$item['id'];
				}else{
					$sql="INSERT INTO `customers` (`id`,`name`,`phone`) VALUES (NULL, '$name', '$telefon')";
					$item = $db->executeRun($sql);
					$id = $db->getLastId();
				}

				$sql="INSERT INTO `appointments` (`id`, `date`, `time`, `customer`, `description`, `record_date`) VALUES (NULL, '$date', '$time', '$id', '$procedure', '$recordDate')";
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
	}//




}//class
?>