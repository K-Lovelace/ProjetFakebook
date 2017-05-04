<?php

class mainController
{

    public static function logout($request, $context)
    {
        $context->setSessionAttribute('currentUser', false);
        return context::SUCCESS;
    }

    // author = Gael Cuminal
    public static function profile($request, $context)
    {
        if ($context->getSessionAttribute("currentUser") === NULL) {
            //User not signed in
            $context->notif = "You are not signed in!";
            return $context::ERROR;
        }
        $user = false;
        if (isset($request['user']))
            $user = utilisateurTable::getUserById($request["user"]);
        else
            $user = utilisateurTable::getUserById($context->getSessionAttribute('currentUser'));

        if ($user === false) {
            $context->notif = "User was not found";
            return $context::ERROR;
        }

        $context->user = $user;
        return $context::SUCCESS;
    }

    // @Author= Pierre Rudelou
    public static function login($request, $context)
    {
        global $action; // to redirect
        if ($context->getSessionAttribute("currentUser") === NULL) {
            if (isset($request['user'])) {
                $user = utilisateurTable::getUserByLoginAndPass($request['user']['name'], $request['user']['password']);
                if ($user == false) {
                    $context->notif = "Erreur: User does not exist";
                    $context->left_view = false;
                    return context::ERROR;
                }
                $context->setSessionAttribute("currentUser", $user->id);
                $context->notif = "Bonjour " . $user->nom . "!";
            } else {
                $context->left_view = false;
                return context::ERROR;
            }
        } else {
            $context->notif = "Already signed in";
        }

        $action = 'index';
        return $context->executeAction($action, $request);
    }

    // author = Gael Cuminal
    public static function message($request, $context)
    {
        $offset = isset($request['offset']) ? $request['offset'] : 0;
        $context->messages = messageTable::getAllMessages($offset);

        return $context::SUCCESS;
    }

    // author = Gael Cuminal
    public static function chat($request, $context)
    {
        $offset = isset($request['offset']) ? $request['offset'] : 0;
        $context->chats = chatTable::getChats($offset);

        return $context::SUCCESS;
    }

    public static function sendChat($request, $context)
    {
        if ($context->getSessionAttribute("currentUser") === NULL) {
            //User not signed in
            $context->notif = "You are not signed in!";
            return $context::ERROR;
        }

        $expediteur = utilisateurTable::getUserById($context->getSessionAttribute('currentUser'));

        $post = new post();
        $post->texte = $request['texte'];
        $post->date = date_create(date('Y-m-d H:i:s'));

        postTable::save($post);

        $message = new message();
        $message->emetteur = $expediteur;
        $message->post = $post;

        messageTable::save($message);
        $context->message = $message;
        return $context::SUCCESS;
    }
}

?>
