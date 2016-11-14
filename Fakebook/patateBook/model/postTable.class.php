<?php
// @Author=PierreRudelou

class postTable {

public static function getPostById($id)
{
		
	$em = dbconnection::getInstance()->getEntityManager() ;

	$postRepository = $em->getRepository('post');
	$post = $postRepository->findOneBy(['id' => $id]);	
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}
}
?>
