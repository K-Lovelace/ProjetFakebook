<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
  @author=Gael Cuminal
*/

class chatTable {

	public static function getChats()
  {
    $em = dbconnection::getInstance()->getEntityManager() ;
    $chatRepository = $em->getRepository('chat');
    return $chatRepository->findAll()
  }

  public static function getLastChat()
  {
    $em = dbconnection::getInstance()->getEntityManager() ;
    $chatRepository = $em->getRepository('chat');
    $lastChat = $chatRepository->findOneBy([],['id', 'DESC']);

    if($lastChat == false) {
      echo "Erreur sql";
    }

    return $lastChat;
  }

}

?>
