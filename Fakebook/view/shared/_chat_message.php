<div class="col-12">
    <div class="float-xs-right <?= $chat->emetteur->id === $context->getSessionAttribute('currentUser') ? 'out-chat' : 'in-chat'?> msg-chat rounded">
        <span class="chat-author"><?= $chat->emetteur->identifiant ?></span>
        <?= $chat->post->texte ?>
        <span class="chat-date"><?= $chat->post->formattedDate() ?></span>
    </div>
</div>