<!-- @author = Pierre Rudelou -->

<div class="row">
	<?php $user = $context->getSessionAttribute("currentUser") ?>
	<?php if($user != false) { ?>
		<div class="user-profile col-xs-12">
			<?php include ($nameApp."/view/shared/_user.php") ?>
		</div>
	<?php } ?>

	<?php foreach (utilisateurTable::getUsers() as $user) {?>
	 	<div class="col-xs-12">
	 		<?php include ($nameApp."/view/shared/_user.php"); ?>  
	 	</div>
	 <?php } ?>
</div>

