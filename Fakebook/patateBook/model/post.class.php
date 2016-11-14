<?php

/** 
 * @Entity
 * @Table(name="fredouil.message")
 * @author = PierreRudelou

 */
class post{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;
	
	/** @Column(type="string") */ 
	public $texte;	

	/** @Column(type="datetime") */ 
	public $date;

	/** @Column(type="string", length=45) */ 
	public $image;

	public function formattedDate()
	{
			return $this->date->format('Y-m-d H:i:s');
	}
}

?>
