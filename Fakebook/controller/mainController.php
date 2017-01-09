<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 * 
 */

class mainController{
  //author = Gael Cuminal
  public static function index($request,$context){
    //Tester si user connecté -> login ou index
    if ($context->getSessionAttribute("currentUser") === false){
      $context->left_view = false;
      return context::ERROR;
    }
    return context::SUCCESS;
  }

  //author=Gael Cuminal
  //affiche le formulaire de création de compte
  public static function newUser($request, $context){
    $context->left_view = 'empty';
    return context::SUCCESS;
  }

 
 // @Author= Pierre Rudelou
	public static function login($request, $context){
    global $action; // to redirect
    if ($context->getSessionAttribute("currentUser") === false){
      if(isset($request['user'])) 
      {
        $user = utilisateurTable::getUserByLoginAndPass($request['user']['name'], $request['user']['password']);
        if($user == false) {
          $context->notif = "Erreur: User does not exist";
          $context->left_view = false;
          return context::ERROR;
        }
				$context->setSessionAttribute("currentUser", $user->id);
        $context->notif = "Bonjour ".$user->nom."!";
      }		

  		else{
        $context->left_view = false;
  			return context::ERROR;
  		}
		}
    else {
      $context->notif = "Already signed in";
    }

    $action = 'index';
		return $context->executeAction($action, $request);
	}

  // author = Gael Cuminal
  public static function logout($request, $context) {
    if($context->getSessionAttribute("currentUser") !== false) {
      $context->setSessionAttribute("currentUser", false);
      $context->notif = "User was successfully logout";
      return context::SUCCESS;
    }
  }

  // author = Gael Cuminal
  public static function profile($request, $context) {
    if($context->getSessionAttribute("currentUser") === false) {
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
      $user = utilisateurTable::getUserById($context->getSessionAttribute('currentUser'));
    }

    $context->user = $user;
    return $context::SUCCESS;
  }

 // @Author= Pierre Rudelou
  public static function sendmessage($request, $context){

    global $action;

    if($context->getSessionAttribute("currentUser") == false) {
      //User not signed in
      $context->notif = "You are not signed in!";
      return $context::ERROR;
    }

    else {
      //Print current user's profile
      $expediteur = utilisateurTable::getUserById($context->getSessionAttribute('currentUser'));

      $destinataire = $request['message']['to'];
      $texte= $request['message']['texte'];

      $post = new post();
      $post->texte = $texte;
      $post->date  = date_create(date('Y-m-d H:i:s')); 

      postTable::save($post);

      // toDo image

      $message = new message();
      $message->emetteur = $expediteur;
      $message->destinataire = utilisateurTable::getUserByIdentifiant($destinataire);
      $message->post = $post;

      messageTable::save($message);


    }
    $action ='profile';
    $request['user']=$message->destinataire;
    return $context->executeAction($action,$request);

  }
}
?>