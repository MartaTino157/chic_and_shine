<?php
	echo "<li class='nav-item'><a href='adminGalery'>Все</a></li>";
		foreach($arr as $value) {
			echo "<li class='nav-item'>
			<a href='adminCategory?id=".$value['id']."'>".$value['name'].'</a>
			</li>';
		}
?>