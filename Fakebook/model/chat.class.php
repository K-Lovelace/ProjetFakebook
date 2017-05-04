<?php

/**
 * @Entity
 * @Table(name="fredouil.chat")
 * @author = Gael CUminal
 */
class chat
{
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
     * @OneToOne(targetEntity="post")
     * @JoinColumn(nullable=false, name="post", referencedColumnName="id")
     * @var post post
     */
    public $post;
}