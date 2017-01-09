<!-- Author= Pierre Rudelou -->

<?php $user = $context->user ?>
<div class="row">
	<div class="col-xs-12 current_user_profile">
		<?php $user_class = 'thumbnail'?>
		<?php include 'view/shared/_user.php'; ?>
		<?php $user_class = NULL?>
	</div>
	<div class="col-xs-12 ">
		<h2>Ecrire à <?= $user->identifiant ?></h2>

		<form method="post" action="index.php?action=sendmessage">
			<input type="text" name="message[texte]">
			<input type = "hidden" name="message[to]" value="<?= $user->identifiant; ?>" >
			<button type='submit' class="btn-lg btn-default">Envoyer</button>
		</form>

	</div>
	<div class="col-xs-12 wall">
		<?php include 'view/shared/_wall.php'; ?>		
	</div>
</div>