<?php

/** 
 * @Entity
 * @Table(name="fredouil.utilisateur")
 */
class utilisateur{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string", length=45) */ 
	public $identifiant;
		
	/** @Column(type="string", length=45) */ 
	public $pass;

	/** @Column(type="string", length=45) */ 
	public $nom;

	/** @Column(type="string", length=45) */ 
	public $prenom;

	/** @Column(type="string", length=100) */ 
	public $statut;

	/** @Column(type="string", length=200) */ 
	public $avatar;

	/** @Column(type="datetime") */ 
	public $date_de_naissance;

	public function formattedBirthDate()
	{
		return $this->date_de_naissance;
	}

	// author = Gael Cuminal
	public function getStatut()
	{
		return strip_tags(filter_var($this->statut, FILTER_SANITIZE_STRING));
	}
	
}

?>