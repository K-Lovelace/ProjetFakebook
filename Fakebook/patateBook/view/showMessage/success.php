<!-- @author = Gael Cuminal -->
<?= var_dump($context->dest) ?>
Message de : <?= $context->dest->nom ?> <?= $context->dest->prenom ?> <?= $context->dest->identifiant ?> <?= $context->dest->formattedDate() ?>
<?php foreach ($context->messages as $message) { ?>
--> <?php include '_message.php';?>
<?php } ?>