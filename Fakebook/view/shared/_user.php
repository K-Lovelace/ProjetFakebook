<!-- @author = Pierre Rudelou -->
<div class="user">
		<?php $user_class = isset($user_class) ? $user_class : 'thumbnail-small'  ?> 
    	<?php 
    	if ($user != null){
    		if($user->avatar != "" && strpos($user->avatar,"pedago")!=false){ ?>
			<img class='rounded img-fluid img-thumbnail <?= $user_class ?>'  src= <?= $user->avatar ?> >
    	<?php } 

    	else{ ?>
    		<img class='rounded img-fluid img-thumbnail <?= $user_class ?> ' src='images/jpp.jpg'>
    	<?php } ?>

			<a href="?action=profile&user=<?= $user->id ?>" class="ajax-link"> <?= $user->nom ?> <?= $user->prenom ?> </a>
		<br>
		<?= $user->getStatut() ?>
		<?php } ?>
</div>