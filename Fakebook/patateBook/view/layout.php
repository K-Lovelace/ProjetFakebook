<!DOCTYPE html>
<html lang="fr">
<head>
	<title>PatateBook</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/<?php echo $nameApp; ?>.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<!-- @author = Gael Cuminal -->
	<div class="notif-msg <?php if($context->notif != false) {echo 'in';} ?>"><?php echo $context->notif; ?></div>
		<div class="container">
			<div class="row">
				<header class="col-xs-12">Ceci est le header</header>
				<aside class="col-md-3 hidden-md-down">
					Ici la liste utilisateurs
					avec un lien vers le modal de chat
				</aside>
				<section class="col-xs-12 col-md-6">
					Ici le contenu de la page
				</section>
			</div>
	</div>    
</body>
</html>
