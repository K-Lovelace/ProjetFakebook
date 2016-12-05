C'est l'action par défaut ! 
<a class="logout">Deconnectez vous !</a>
<br>

<!-- @author = Pierre Rudelou -->
<?php
foreach (messageTable::getAllMessages() as $message){
	$user = $message->emetteur;
 	include ($nameApp."/view/shared/_user.php"); 
 	include ($nameApp."/view/showMessage/_message.php");  
}

?>

<!-- @author = Gael Cuminal -->
<script type="text/javascript">
  $('a.logout').on('click', function() {
    $.ajax({
      type: 'GET',
      url: 'api.php?action=logout',
      success: function(html) {
        $('body').append(html)
      }
    })
  })
</script>