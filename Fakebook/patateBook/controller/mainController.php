<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 * 
 */

class mainController{
  public static function index($request,$context){
    //Tester si user connecté -> login ou index
    if ($context->getSessionAttribute("currentUser") == false)
      return context::ERROR;
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
	    	if(isset($request['user'])) 
        {
          $user = utilisateurTable::getUserByLoginAndPass($request['user']['name'], $request['user']['password']);
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

  // author = Gael Cuminal
  public static function logout($request, $context)
  {
    if($context->getSessionAttribute("currentUser") != false) {
      $context->setSessionAttribute("currentUser", false);
      $context->notif = "User was successfully logout";
      return context::SUCCESS;
    }
  }

  // author = Gael Cuminal
  public static function profile($request, $context)
  {
    if($context->getSessionAttribute("currentUser") == false) {
      //User not signed in
      $context->notif = "You are not signed in!";
      return $context::ERROR;
    }

    if(is_set($request["user"])) {
      //A user was passed through parameters
      $user = utilisateurTable::getUserById($request["user"]);
      if($user == false) {
        $context->notif = "User was not found";
        return $context::ERROR;
      }
    }

    else {
      //Print current user's profile
      $user = $context->getSessionAttribute('currentUser');
    }

    return $context::SUCCESS;
  }
}
?>