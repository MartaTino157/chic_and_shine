<?php
class comtrollerAdminReviews{
	public function reviewsList() {
		$arr = modelAdminReviews::getReviews();
		include_once'viewAdmin/adminReviews.php';
	}
	public static function publishReviewForm($id) {
		$detail=modelAdminReviews::getReviewDetail($id);
		include_once('viewAdmin/reviewEditForm.php');
	}
	public static function publishReviewResult($id) {
		$test=modelAdminReviews::getReviewEdit($id);
		include_once('viewAdmin/reviewEditForm.php');
	} 
	public static function deleteReviewForm($id){
		$detail=modelAdminReviews::getReviewDetail($id);
		include_once('viewAdmin/reviewDeleteForm.php');
	}
	public static function deleteReviewResult($id) {
		$test=modelAdminReviews::getReviewDelete($id);
		include_once('viewAdmin/reviewDeleteForm.php');
	} 
}
?>