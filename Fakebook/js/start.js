$(document).on('click', '[data-api]', function() {
    $.ajax({
      type: 'GET',
      url: 'api.php?action='+$(this).data('api'),
      success: function(html) {
        $('body').append(html)
      }
    })
})