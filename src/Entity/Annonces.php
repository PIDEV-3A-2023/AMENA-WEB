<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonces
 *
 * @ORM\Table(name="annonces", indexes={@ORM\Index(name="c_idua", columns={"ida_U"}), @ORM\Index(name="c_idcolis", columns={"idColis"})})
 * @ORM\Entity
 */
class Annonces
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_dep", type="string", length=20, nullable=false)
     */
    private $villeDep;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_arr", type="string", length=20, nullable=false)
     */
    private $villeArr;

    /**
     * @var string
     *
     * @ORM\Column(name="date_dep", type="string", length=20, nullable=false)
     */
    private $dateDep;

    /**
     * @var string
     *
     * @ORM\Column(name="date_arr", type="string", length=20, nullable=false)
     */
    private $dateArr;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;

    /**
     * @var \Colis
     *
     * @ORM\ManyToOne(targetEntity="Colis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idColis", referencedColumnName="id_Colis")
     * })
     */
    private $idcolis;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ida_U", referencedColumnName="id")
     * })
     */
    private $idaU;


}
