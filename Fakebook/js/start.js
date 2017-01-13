// $(document).on('click', '[data-api]', function() {
//     $.ajax({
//       type: 'GET',
//       url: 'api.php?action='+$(this).data('api'),
//       success: function(html) {
//         $('body').append(html)
//       }
//     })
// })

$(document).ready(function () {
    console.log('doc ready');
    $('.modal-content').resizable({
        minHeight: 300,
        minWidth: 300
    });

    $('.modal-dialog').draggable({
        parent: '#chat'
    });

    $('#chat').on('show.bs.modal', function () {
        $(this).find('.modal-body').css({
            'max-height': '100%'
        });
    });

    $(document).on('click', '.ajax-link', function (e) {
        e.preventDefault();
        $('#content section').html('<h1 class="align-self-center"></h1>');

        $.ajax({
            url: 'api.php?' + $(this).attr('href'),
            success: function (html) {
                $('#content section').html(html);
            },
            error: function (html) {
                $('#content section').html('Something went wrong');
            }
        });
        return false;
    })

})