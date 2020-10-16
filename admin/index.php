<?php
	session_start();
	require_once('../inc/Database.php');
	include_once("modelAdmin/modelAdmin.php");	
	include_once("modelAdmin/modelAdminService.php");
	include_once("modelAdmin/modelAdminGalery.php");	

	include_once("controllerAdmin/controllerAdmin.php");
	include_once("controllerAdmin/controllerAdminService.php");
	include_once("controllerAdmin/controllerAdminGalery.php");

	include("routeAdmin/routingAdmin.php");

	echo $response;

?>