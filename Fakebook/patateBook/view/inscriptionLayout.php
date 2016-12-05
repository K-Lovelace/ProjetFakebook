<!DOCTYPE html>
<html lang="fr">
<head>
	<title>PatateBook</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/<?php echo $nameApp; ?>.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<!-- @author = Gael Cuminal -->
	<div class="notif-msg <?php if($context->notif != false) {echo 'in';} ?>"><?php echo $context->notif; ?></div>
	<h2> Bienvenue sur <?php echo ucfirst($nameApp); ?> </h2>
	<?php include($template_view); ?>
    
</body>
</html>
