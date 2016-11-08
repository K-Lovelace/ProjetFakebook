C'est l'action par défaut ! 
<a class="logout">Deconnectez vous !</a>

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