<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/<?php echo $nameApp ?>.css">
	<title>PatateBook</title>
   
</head>
<body>
	<div class="notif-msg">There has been an error: <?php $notif ?></div>
	<h2> Bienvenue sur <?php echo ucfirst($nameApp) ?> </h2>
	<?php include($template_view); ?>
    
</body>
</html>
