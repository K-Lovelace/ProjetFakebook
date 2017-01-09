<nav class="nav nav-inline">
	<a href="?action=index" class="nav-link">Accueil</a>
	<?php if(utilisateurTable::getUserById($context->getSessionAttribute("currentUser"))) {?>
		<a href="?action=profile" class="nav-link">Mon profil</a>
		<a href="#" class="nav-link">Se déconnecter</a>
		<a href="#" data-toggle="modal" data-target="#chat" class="nav-link chat-notifier">Afficher le chat<span class="chat-count">3</span></a>
	<?php }  else { ?>
		<a href="?action=login" class="pull-xs-right"> Connexion </a>
	<?php } ?>
</nav>