<!-- @author = Pierre Rudelou -->

<div class="row">
	<?php $user = $context->getSessionAttribute("currentUser") ?>
	<?php if($user != false) { ?>
		<div class="col-xs-12 current_user_identity_panel ">
			<?php $user_class = 'thumbnail-perso'?>
			<?php include ($nameApp."/view/shared/_user.php") ?>
			<?php $user_class = NULL?>

		</div>
	<?php } ?>

	<?php foreach (utilisateurTable::getUsers() as $user) {?>
	 	<div class="col-xs-12">
	 		<?php include ($nameApp."/view/shared/_user.php"); ?>  
	 	</div>
	 <?php } ?>
</div>

