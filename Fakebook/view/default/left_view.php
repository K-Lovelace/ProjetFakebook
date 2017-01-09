<!-- @author = Pierre Rudelou -->

<div class="row">
	<?php $user = utilisateurTable::getUserById($context->getSessionAttribute("currentUser"))?>
	<?php if($user != false) { ?>
		<div class="col-xs-12 current_user_identity_panel ">
			<?php $user_class = 'thumbnail-perso'?>
			<?php include ("view/shared/_fullUser.php") ?>
			<?php $user_class = NULL?>
		</div>

		<div class="text-xs-center col-xs-12">Friend List</div>

	<?php } ?>
		<?php foreach (utilisateurTable::getUsers() as $user) {?>
		 	<div class="col-xs-12 friendlist_element">
		 		<?php include ("view/shared/_user.php"); ?>  
		 	</div>
		 <?php } ?>

</div>

