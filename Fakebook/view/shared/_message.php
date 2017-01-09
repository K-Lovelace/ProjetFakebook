<!-- @author = Pierre Rudelou -->
<?php $post = postTable::getPostById($message->post) ?>
<?php $emetteur = utilisateurTable::getUserById($message->emetteur) ?>
<?php $parent = utilisateurTable::getUserById($message->parent) ?>
<?php $destinataire = utilisateurTable::getUserById($message->destinataire) ?>

<?php
	if ($destinataire != false && $destinataire != $emetteur){
		?>
			<br>
			A :
			<a href="?action=profile&user=<?= $destinataire->id ?>"> 
				<?= $destinataire->nom ?> <?= $destinataire->prenom ?> 
			</a>
			<?php
	}
?>

<?php
?>
<br>
<?php if ($post != NULL && $post->getTexte() != NULL && $post->getTexte() != ''){ ?>
<?= $post->getTexte() ?>
<?php } ?>

<br>
<br>


