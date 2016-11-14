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

    $messages = $messageRepository->findBy(['destinataire' => $id]);

    return $messages;
  }

}

?>
