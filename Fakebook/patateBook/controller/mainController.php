<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{
  public static function helloWorld($request,$context){
    $context->mavariable="hello world";
    return context::SUCCESS;
  }


  public static function index($request,$context){
    return context::SUCCESS;
  }

  public static function login($request, $context){ 
    if ($context->getSessionAttribute("currentUser") == false){
        return context::ERROR;
    }    
    
    else {
        return context::SUCCESS;
    }    
  }

}
