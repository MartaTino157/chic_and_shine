<?php
	echo '<tr>';
	echo "<td></td>";
	echo "<td><a href='adminGalery'>Все</a></td>";
	echo '</tr>';
		foreach($arr as $value) {
			echo '<tr>';
				echo '<td>'.$value['id'].'</td>';
				echo "<td><a href='adminCategory?id=".$value['id']."'>".$value['name']."</a></td>";
				echo '<td>
				<a href="editCategory?id='.$value['id'].'" class="btn btn btn-outline-warning">Редактировать</a>
				<a href="delCategory?id='.$value['id'].'" class="btn btn btn-outline-danger">Удалить</a>
					</td>';
			echo '</tr>';	
		}
?>

