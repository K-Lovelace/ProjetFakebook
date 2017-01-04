<!-- @author = Gael Cuminal -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>FakeBook</title>
    <meta charset="utf-8">

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css"
          integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"
            integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK"
            crossorigin="anonymous"></script>
    <script src="js/start.js"></script>
</head>
<body>
<?php if ($context->notif != false) { ?>
    <div class="alert alert-info "><?php echo $context->notif; ?></div>
<?php } ?>
<div class="container">
    <div class="row" id="content">
        <header class="col-xs-12"><?php include $header_view; ?></header>
        <aside class="col-md-3 hidden-md-down">
            <?php include $left_view; ?>
        </aside>
        <section class="col-xs-12 col-md-9">
            <?php include $action_view; ?>
        </section>
    </div>
</div>

<div class="modal" id="chat" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Chat général</h4>
            </div>
            <div class="modal-body">
                <?php include 'default/chat.php' ?>
            </div>
            <div class="modal-footer">
                <form>
                    <input type="text" name="text" placeholder="Votre message...">
                    <button type="button" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
