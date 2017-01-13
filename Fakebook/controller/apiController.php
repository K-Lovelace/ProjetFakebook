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
}

?>
