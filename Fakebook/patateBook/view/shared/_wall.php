<?php
foreach (messageTable::getAllUserMessages($user->id) as $message){
	$user = $message->emetteur;
 	include ($nameApp."/view/shared/_user.php"); 
 	include ($nameApp."/view/shared/_message.php");  
}

?>