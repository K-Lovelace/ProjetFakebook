<!-- @author = Pierre Rudelou -->

<?php 

foreach (utilisateurTable::getUsers() as $user){
?>

    <div class="user">
    	<?php if($user->avatar != "" && strpos($user->avatar,"pedago")!=false){ ?>
			<img width='20%' height='20%' src= <?= $user->avatar ?> >
    	<?php } 

    	else{ ?>
    		<img width='20%' height='20%' src='images/jpp.jpg'>
    	<?php } ?>

			<?= $user->nom ?> <?= $user->prenom ?>
		<br>
		<?= $user->statut ?>
	</div>

<?php

}

?>

