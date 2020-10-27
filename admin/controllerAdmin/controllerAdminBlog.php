<?php
class controllerAdminBlog{
	public function openBlog() {
		$arr = modelAdminBlog::allArticles();
		include_once'viewAdmin/adminBlog.php';
	}
	public static function addArticleForm() {
		include_once('viewAdmin/articleAddForm.php');
	}
	public static function addArticleResult() {
		$test = modelAdminBlog::getArticleAdd();
		include_once('viewAdmin/articleAddForm.php');
	}
}
?>