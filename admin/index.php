<?php
	session_start();
	require_once('../inc/Database.php');

	include_once("modelAdmin/modelAdmin.php");	
	include_once("modelAdmin/modelAdminService.php");
	include_once("modelAdmin/modelAdminCategory.php");
	include_once("modelAdmin/modelAdminGalery.php");	
	include_once("modelAdmin/modelAdminBlog.php");	
	include_once("modelAdmin/modelAdminReviews.php");	

	include_once 'viewAdmin/viewGaleryAdmin.php';

	include_once("controllerAdmin/controllerAdmin.php");
	include_once("controllerAdmin/controllerAdminService.php");
	include_once("controllerAdmin/controllerAdminCategory.php");
	include_once("controllerAdmin/controllerAdminGalery.php");
	include_once("controllerAdmin/controllerAdminBlog.php");
	include_once("controllerAdmin/controllerAdminReviews.php");

	include("routeAdmin/routingAdmin.php");

	echo $response;

?>