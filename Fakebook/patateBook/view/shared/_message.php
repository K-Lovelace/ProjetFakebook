<!-- @author = Pierre Rudelou -->
<?php $post = postTable::getPostById($message->post) ?>
<?php $emetteur = utilisateurTable::getUserById($message->emetteur) ?>
<?php $parent = utilisateurTable::getUserById($message->parent) ?>
<?php $destinataire = utilisateurTable::getUserById($message->destinataire) ?>

<?php
	if ($destinataire != false){
		?>
			<br>
			A :
			<?= $destinataire->nom ?> <?= $destinataire->prenom ?> 
			<?php
	}
?>

<?php
?>
<br>
<?= $post->texte ?>
<br>
<br>


