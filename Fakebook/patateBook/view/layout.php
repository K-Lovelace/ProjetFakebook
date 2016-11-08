<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/<?php echo $nameApp; ?>.css">
	<title>PatateBook</title>
</head>
<body>
	<div class="notif-msg <?php if($context->notif != false) {echo 'in';} ?>">There has been an error: <?php echo $context->notif; ?></div>
	<h2> Bienvenue sur <?php echo ucfirst($nameApp); ?> </h2>
	<?php include($template_view); ?>
    
</body>
</html>
