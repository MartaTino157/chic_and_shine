<?php
echo "<li class='nav-item'><a class='sidebar-item' href='galery'>Все</a></li>";
foreach($arr as $value) {
	echo "<li class='nav-item'>
	<a class='sidebar-item' href='category?id=".$value['id']."'>".$value['name'].'</a>
	</li>';
}
?>