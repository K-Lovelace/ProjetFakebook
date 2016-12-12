<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 * 
 */

class mainController{
  public static function index($request,$context){
    //Tester si user connecté -> login ou index
    if ($context->getSessionAttribute("currentUser") == false){
      $context->left_view = 'view/index/_error_left_view.php';
      return context::ERROR;
    }
    return context::SUCCESS;
  }

  //author=Gael Cuminal
  //affiche le formulaire de création de compte
  public static function newUser($request, $context){
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
  public static function logout($request, $context) {
    if($context->getSessionAttribute("currentUser") != false) {
      $context->setSessionAttribute("currentUser", false);
      $context->notif = "User was successfully logout";
      return context::SUCCESS;
    }
  }

  // author = Gael Cuminal
  public static function profile($request, $context) {
    if($context->getSessionAttribute("currentUser") == false) {
      //User not signed in
      $context->notif = "You are not signed in!";
      return $context::ERROR;
    }

    if(isset($request["user"])) {
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

    $context->user = $user;
    return $context::SUCCESS;
  }
}
?>