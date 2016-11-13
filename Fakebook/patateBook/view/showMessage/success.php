<!-- @author = Gael Cuminal -->

Message de : <?= $dest->nom ?> <?= $dest->prenom ?> <?= $dest->identifiant ?> <?= $dest->formattedDate() ?>
<?php foreach (messageTable::getMessages($user->id) as $message) { ?>
--> <?php include '_message.php';?>
<?php } ?>