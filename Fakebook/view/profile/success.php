<!-- Author= Gael Cuminal -->
<?php $user = $context->user ?>
<div class="row">
	<div class="col-xs-12 current_user_profile">
		<?php $user_class = 'thumbnail'?>
		<?php include 'view/shared/_user.php'; ?>
		<?php $user_class = NULL?>
	</div>
	<div class="col-xs-12 ">
		<h2>Ecrire à <?= $user->identifiant ?></h2>
		<input type="text" name="message">
		<button class="btn-lg btn-default">Envoyer</button>
	</div>
	<div class="col-xs-12 wall">
		<?php include 'view/shared/_wall.php'; ?>		
	</div>
</div>