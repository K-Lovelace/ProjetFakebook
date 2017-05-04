<!-- @author = Pierre Rudelou -->


	<?php
	foreach (messageTable::getAllUserMessages($user->id) as $message){
		if ($message->emetteur != NULL){
					?>
		<div class="message">
		<?php
		$user = $message->emetteur;
		if ($user != NULL){
		include ("view/shared/_user.php"); 
	 	include ("view/shared/_message.php"); 
		}
	 	?>
	 	</div> 

