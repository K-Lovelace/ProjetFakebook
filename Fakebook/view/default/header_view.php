<!--Author = Gael Cuminal-->
<nav class="nav nav-inline">
	<a href="?action=index" class="nav-link">Accueil</a>
	<?php if(NULL !== $context->getSessionAttribute("currentUser")) {?>
		<a href="?action=profile" class="nav-link ajax-link">Mon profil</a>
		<a href="#" class="nav-link">Se déconnecter</a>
		<a href="#" data-toggle="modal" data-target="#chat" class="ajax-link nav-link chat-notifier">Afficher le chat<span class="chat-count">3</span></a>
	<?php }  else { ?>
		<a href="?action=login" class="nav-link pull-xs-right"> Connexion </a>
	<?php } ?>
</nav>