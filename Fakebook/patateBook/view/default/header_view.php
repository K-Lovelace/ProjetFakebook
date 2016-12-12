<nav class="nav nav-inline">
	<a href="?action=index" class="nav-link active">Accueil</a>
	<?php if($context->getSessionAttribute("current_user")) {?>
		<a href="?action=profile" class="nav-link active">Mon profil</a>
		<a data-api="logout" class="nav-link active">Se déconnecter</a>
	<?php } ?>
</nav>