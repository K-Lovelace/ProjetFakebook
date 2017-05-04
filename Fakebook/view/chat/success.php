<div class="row">
    <?php
    foreach ($context->chats as $chat) {
        include("view/shared/_chat_message.php");
    }
    ?>
</div>