<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colis
 *
 * @ORM\Table(name="colis", indexes={@ORM\Index(name="c_idu", columns={"id_u"})})
 * @ORM\Entity
 */
class Colis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Colis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColis;

    /**
     * @var string
     *
     * @ORM\Column(name="nomExpediteur", type="string", length=50, nullable=false)
     */
    private $nomexpediteur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseExpediteur", type="string", length=50, nullable=false)
     */
    private $adresseexpediteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDestinataire", type="string", length=50, nullable=false)
     */
    private $nomdestinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseDestinataire", type="string", length=50, nullable=false)
     */
    private $adressedestinataire;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=30, nullable=false)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpedition", type="date", nullable=false)
     */
    private $dateexpedition;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_u", referencedColumnName="id")
     * })
     */
    private $idU;


}
