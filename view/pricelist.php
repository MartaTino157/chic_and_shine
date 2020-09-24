<?php 
class ViewPrice {

	public static function Price($arr) {
		foreach ($arr as $value) {
			echo "<tr>";
			echo "<td>".$value['name']."</td>";
			echo "<td>".$value['price']." €</td>";
			echo "</tr>";
			}
		}
				
}