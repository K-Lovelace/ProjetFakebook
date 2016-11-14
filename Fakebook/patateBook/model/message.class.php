<?php

/** 
 * @Entity
 * @Table(name="fredouil.message")
 * @author = Gael CUminal

 */
class message{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="integer") 
	 *	@ManyToOne(targetEntity="utilisateur")
	*/ 
	public $emetteur;
		
	/** @Column(type="integer") 
	 *	@ManyToOne(targetEntity="utilisateur")
	*/ 
	public $destinataire;

	/** @Column(type="string") 
	 *	@ManyToOne(targetEntity="utilisateur")
	*/ 
	public $parent;

	/** @Column(type="integer") 
	 *	@ManyToOne(targetEntity="post")
	*/ 
	public $post;

	/** @Column(type="integer") */ 
	public $aime;
	
}

?>
