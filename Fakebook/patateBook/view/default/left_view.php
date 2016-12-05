<!-- @author = Pierre Rudelou -->

<?php 

foreach (utilisateurTable::getUsers() as $user){
 	include ($nameApp."/view/shared/_user.php");  
}

?>

