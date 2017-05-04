<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
  @author=Gael Cuminal
*/

class chatTable {

	public static function getChats($offset = NULL)
  {
      $em = dbconnection::getInstance()->getEntityManager();

      $chatRepository = $em->getRepository('chat');
      $chat = $chatRepository->findBy(array(), ['id' => 'DESC'], 100, $offset);

      if ($chat === false) {
          echo 'Erreur sql';
      }
      return $chat;
  }

  public static function getLastChat()
  {
    $em = dbconnection::getInstance()->getEntityManager() ;
    $chatRepository = $em->getRepository('chat');
    $lastChat = $chatRepository->findOneBy([],['id', 'DESC']);

    return $lastChat;
  }

}

?>
