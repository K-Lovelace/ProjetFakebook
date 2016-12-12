<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
  @author=PierreRudelou
*/

class messageTable {

 // @Author=PierreRudelou
	public static function getMessages($id)
  {
    $em = dbconnection::getInstance()->getEntityManager() ;
    $messageRepository = $em->getRepository('message');

    $messages = $messageRepository->findBy(
    	[
    		'destinataire' => $id,
    	]
	);

    return $messages;
  }

  public static function getAllMessages(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$messageRepository = $em->getRepository('message');
	$message = $messageRepository->findAll();
	
	if ($message == false){
		echo 'Erreur sql';
	}
	return $message; 
	}

	public static function getAllUserMessages($id){

    $em = dbconnection::getInstance()->getEntityManager() ;
    $messageRepository = $em->getRepository('message');

    $messages = $messageRepository->findBy(
    	[
    		'destinataire' => $id,
    		'emetteur' => $id
    	]
    );
  
    return $messages;
	}

}

?>
