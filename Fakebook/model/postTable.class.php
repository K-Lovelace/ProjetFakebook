<?php
// @Author=PierreRudelou

class postTable {

public static function getPostById($id)
{
		
	$em = dbconnection::getInstance()->getEntityManager() ;

	$postRepository = $em->getRepository('post');
	$post = $postRepository->findOneBy(['id' => $id]);	

	return $post; 
}

public static function getPosts(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$postRepository = $em->getRepository('post');
	$post = $postRepository->findAll();
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}

public static function save($post){

$em = dbconnection::getInstance()->getEntityManager() ;

$em->persist($post); //$em is an instance of EntityManager
$em->flush();

}

}
?>
