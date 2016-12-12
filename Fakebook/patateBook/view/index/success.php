<!-- @author = Pierre Rudelou -->
<?php
foreach (messageTable::getAllMessages() as $message){
	$user = $message->emetteur;
 	include ($nameApp."/view/shared/_user.php"); 
 	include ($nameApp."/view/showMessage/_message.php");  
}
?>