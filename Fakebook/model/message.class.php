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

	/** 
   * @ManyToOne(targetEntity="utilisateur")
   * @JoinColumn(nullable=false, name="emetteur", referencedColumnName="id")
   * @var utilisateur emetteur
   */ 
	public $emetteur;
		
	/**	
	 * @ManyToOne(targetEntity="utilisateur")
	 * @JoinColumn(nullable=false, name="destinataire", referencedColumnName="id")
   * @var utilisateur destinataire
	 */ 
	public $destinataire;

	/**	
	 * @ManyToOne(targetEntity="utilisateur")
	 * @JoinColumn(nullable=false, name="parent", referencedColumnName="id")
   * @var utilisateur parent	 
   */ 
	public $parent;

	/** 
   * @OneToOne(targetEntity="post") 
   * @JoinColumn(nullable=false, name="post", referencedColumnName="id")
   * @var post post   
   */ 
	public $post;

	/** @Column(type="integer") */ 
	public $aime;
	
}

?>
