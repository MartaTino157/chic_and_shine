<?php 
session_start();
include_once 'inc/Database.php';

require 'model/PriceList.php';
require 'model/Category.php';
require 'model/Galery.php';

include_once 'view/pricelist.php';
include_once 'view/galeryView.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;

?>