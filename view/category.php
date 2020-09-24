<?php
echo "<li class='nav-item'><a href='galery'>Все</a></li>";
foreach($arr as $value) {
	echo "<li class='nav-item'>
	<a href='category?id=".$value['id']."'>".$value['name'].'</a>
	</li>';
}
?>