<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

//nom de l'application
$nameApp = "fakeBook";

// Inclusion des classes et librairies
require_once 'lib/core.php';
require_once 'controller/mainController.php';


//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))
	$action =  $_REQUEST['action'];

session_start();

$context = context::getInstance();
$context->init($nameApp);

$view=$context->executeAction($action, $_REQUEST);

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if($view===false){
	$context->notif = "L'action ".$action." n'existe pas!";
	$action = "error";
	$view = "error";
}

//inclusion du layout qui va lui meme inclure le template view
if($view!=context::NONE){
	$left_view = null !== $context->left_view || false !== $context->left_view ? $context->left_view : "view/default/left_view.php";
	$header_view = $context->header_view ? $context->header_view : "view/default/header_view.php";
	$action_view="view/".$action."/".$view.".php";

	include("view/".$context->getLayout().".php");
}

?>