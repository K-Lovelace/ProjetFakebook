<?php

/* Classe Outils en lien avec l'entité chat
	composée de méthodes statiques
  @author=PierreRudelou
*/

class messageTable
{

    // @Author=PierreRudelou
    public static function getMessages($id)
    {
        $em = dbconnection::getInstance()->getEntityManager();
        $messageRepository = $em->getRepository('message');

        $messages = $messageRepository->findBy(
            [
                'destinataire' => $id,
            ]
        );

        return $messages;
    }


    /**
     * Get the 100 next messages, if skip is defined, offset it
     * @param null $offset :
     * @return array
     */
    public static function getAllMessages($offset = NULL)
    {
        $em = dbconnection::getInstance()->getEntityManager();

        $messageRepository = $em->getRepository('message');
        $message = $messageRepository->findBy(array(), ['id' => 'DESC'], 100, $offset);

        if ($message == false) {
            echo 'Erreur sql';
        }
        return $message;
    }

    public static function getAllUserMessages($id)
    {

        $em = dbconnection::getInstance()->getEntityManager();
        $messageRepository = $em->getRepository('message');

        return $messageRepository->findBy(['destinataire' => $id]);

    }

    public static function save($message)
    {

        $em = dbconnection::getInstance()->getEntityManager();


        $em->persist($message); //$em is an instance of EntityManager
        $em->flush();

    }

}

?>
