<nav class="nav nav-inline">
	<a href="?action=index" class="nav-link">Accueil</a>
	<?php if($context->getSessionAttribute("currentUser")) {?>
		<a href="?action=profile" class="nav-link">Mon profil</a>
		<a href="#" class="nav-link">Se déconnecter</a>
		<a href="#chat" data-toggle="modal" class="nav-link chat-notifier">Afficher le chat<span class="chat-count">3</span></a>
	<?php } ?>
</nav>