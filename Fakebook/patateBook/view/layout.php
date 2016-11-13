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
	<h2> Bienvenue sur <?php echo ucfirst($nameApp); ?> </h2>
	<?php include($template_view); ?>
    
</body>
</html>
