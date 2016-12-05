<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 * 
 */

class mainController{
  public static function index($request,$context){
    //Tester si user connecté -> login ou index
    return context::SUCCESS;
  }

 // @Author=PierreRudelou
  public static function showMessage($request,$context)
  {
    $context->dest = utilisateurTable::getUserById($request['id']);
    if ($context->dest == false){
      $context->notif = "No user with id ".$request['id'];
      return context::ERROR;
    }

    $context->messages = messageTable::getMessages($request['id']);
    if ($context->messages == false){
      $context->notif = "This user has no messages!";
      return context::ERROR;
    }

    return context::SUCCESS;    


  }

 // @Author=PierreRudelou
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