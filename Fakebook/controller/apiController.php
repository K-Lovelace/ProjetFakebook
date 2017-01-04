<?php

class mainController{

  public static function logout($request,$context) {
    $context->setSessionAttribute('currentUser', false);
    return context::SUCCESS;
  }
}
?>