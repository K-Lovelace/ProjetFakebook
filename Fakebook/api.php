<!-- @author = Gael Cuminal -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
//nom de l'application
$nameApp = "patateBook";

// Inclusion des classes et librairies
require_once 'lib/core.php';
require_once 'api/controller/mainController.php';


//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))
	$action =  $_REQUEST['action'];

session_start();

$context = context::getInstance();
$context->init($nameApp);

$view=$context->executeAction($action, $_REQUEST);

if($view===false){
	$context->notif = "L'action ".$action." n'existe pas!";
	$action = "error";
	$view = "error";
}

if($view!=context::NONE){
	$template_view="api/view/".$action."/".$view.".php";
	include($template_view);
}

?>
