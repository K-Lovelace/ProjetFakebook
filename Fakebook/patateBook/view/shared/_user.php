<!-- @author = Pierre Rudelou -->
<div class="user">
    	<?php if($user->avatar != "" && strpos($user->avatar,"pedago")!=false){ ?>
			<img class='img-rounded' width='20%' height='20%' src= <?= $user->avatar ?> >
    	<?php } 

    	else{ ?>
    		<img class='img-rounded' width='20%' height='20%' src='images/jpp.jpg'>
    	<?php } ?>

			<a href="?action=profile&user=<?= $user->id ?>"> <?= $user->nom ?> <?= $user->prenom ?> </a>
		<br>
		<?= $user->statut ?>
</div>