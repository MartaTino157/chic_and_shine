<?php 
ob_start();

ViewBlog::readArticle($n);

$content = ob_get_clean();
include_once 'view/layout.php';
?>