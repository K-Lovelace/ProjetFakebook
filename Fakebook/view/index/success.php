<!-- @author = Pierre Rudelou -->
<?php
foreach (messageTable::getAllMessages() as $message){
	$user = $message->emetteur; ?>
	<div class="message">
 		<?php include ("/view/shared/_user.php"); 
 	include ("view/shared/_message.php");   ?>
 	</div> <?php
}
?>