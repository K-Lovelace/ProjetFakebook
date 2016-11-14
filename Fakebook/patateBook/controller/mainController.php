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

 // @Author : PierreRudelou
  public static function showMessage($request,$context)
  {
    if (messageTable::getMessages() == false){
          return context::ERROR;
    }

    else{
          return context::SUCCESS;
    }
    


  }

	public static function login($request, $context){ 
	    if ($context->getSessionAttribute("currentUser") == false){
	    	if(isset($_POST['user'])) 
        {
          $user = utilisateurTable::getUserByLoginAndPass($_POST['user']['name'], $_POST['user']['password']);
          if($user == false) {
            $context->notif = "Erreur: User does not exist";
            return context::ERROR;
          }
					$context->setSessionAttribute("currentUser", $user);
          $context->notif = "Bonjour ".$context->getSessionAttribute("currentUser")->nom."!";
        }		

			else{
				return context::ERROR;
			}
		}
    else {
      $context->notif = "Already signed in";
    }

		return context::SUCCESS;

	}
}
?>