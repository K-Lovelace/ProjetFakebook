<!-- @author = Gael CUminal -->
<?php $post = postTable::getPostById($message->post) ?>
<?php $emetteur = utilisateurTable::getUserById($message->emetteur) ?>
<?php $parent = utilisateurTable::getUserById($message->parent) ?>
<?= $post->texte ?> par <?= $emetteur->identifiant ?> à destination de $dest->identifiant (le parent étant : <?= $parent->identifiant ?>)
