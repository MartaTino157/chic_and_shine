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
	public static function editArticleForm($id) {
		$detail=modelAdminBlog::getArticleDetail($id);
		include_once('viewAdmin/articleEditForm.php');
	}
	public static function editArticleResult($id) {
		$test=modelAdminBlog::getArticleEdit($id);
		include_once('viewAdmin/articleEditForm.php');
	} 
	public static function deleteArticleForm($id){
		include_once('viewAdmin/articleDeleteForm.php');
	}
	public static function deleteArticleResult($id) {
		$test=modelAdminBlog::getArticleDelete($id);
		include_once('viewAdmin/articleDeleteForm.php');
	} 
}
?>