<nav class="nav nav-inline">
	<a href="?action=index" class="nav-link active">Accueil</a>
	<?php if($context->getSessionAttribute("currentUser")) {?>
		<a href="?action=profile" class="nav-link active">Mon profil</a>
		<a data-api="logout" class="nav-link active">Se déconnecter</a>
		<a href="#chat" data-toggle="modal" class="nav-link chat-notifier">Afficher le chat<span class="chat-count">3</span></a>
	<?php } ?>
</nav>