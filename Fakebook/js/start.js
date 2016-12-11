$(document).on('click', '[data-api]', function() {
    $.ajax({
      type: 'GET',
      url: 'api.php?action='+$(this).data('api'),
      success: function(html) {
        $('body').append(html)
      }
    })
})

$(document).ready(function () {
	$('.modal-content').resizable({
	   //alsoResize: ".modal-dialog",
	   minHeight: 300,
	   minWidth: 300
	});
	$('.modal-dialog').draggable();

	$('#myModal').on('show.bs.modal', function () {
	   $(this).find('.modal-body').css({
	       'max-height':'100%'
	   });
	});
})