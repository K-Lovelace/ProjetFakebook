<!-- @author = Pierre Rudelou -->


	<?php
	foreach (messageTable::getAllUserMessages($user->id) as $message){
		?>
		<div class="message">
		<?php
		$user = $message->emetteur;
	 	include ("view/shared/_user.php"); 
	 	include ("view/shared/_message.php"); 
	 	?>
	 	</div> 
	 	<?php
	}

	?>

