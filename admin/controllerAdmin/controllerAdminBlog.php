<?php
class controllerAdminBlog{
	public function openBlog() {
		$arr = adminBlog::allArticles();
		include_once'viewAdmin/adminBlog.php';
	}
}
?>