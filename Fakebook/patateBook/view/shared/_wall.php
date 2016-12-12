<!-- @author = Pierre Rudelou -->


	<?php
	foreach (messageTable::getAllUserMessages($user->id) as $message){
		?>
		<div class="message">
		<?php
		$user = $message->emetteur;
	 	include ($nameApp."/view/shared/_user.php"); 
	 	include ($nameApp."/view/shared/_message.php"); 
	 	?>
	 	</div> 
	 	<?php
	}

	?>

