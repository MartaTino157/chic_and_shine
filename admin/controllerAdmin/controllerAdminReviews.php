<?php
class comtrollerAdminReviews{
	public function reviewsList() {
		$arr = modelAdminReviews::getReviews();
		include_once'viewAdmin/adminReviews.php';
	}
}
?>