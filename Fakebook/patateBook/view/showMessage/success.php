<!-- @author = Gael Cuminal -->
Message de : <?= $context->dest->nom ?> <?= $context->dest->prenom ?> <?= $context->dest->identifiant ?>
<?php foreach ($context->messages as $message) { ?>
<hr>
--> <?php include '_message.php';?>
<?php } ?>