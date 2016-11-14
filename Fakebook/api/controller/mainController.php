<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 * @author : Gael Cuminal
 */

class mainController{
  public static function index($request,$context){
    return context::SUCCESS;
  }

  public static function logout($request,$context) {
    $context->setSessionAttribute('currentUser', false);
    return context::SUCCESS;
  }
}
