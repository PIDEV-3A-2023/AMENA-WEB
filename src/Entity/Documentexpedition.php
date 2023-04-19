<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documentexpedition
 *
 * @ORM\Table(name="documentexpedition", indexes={@ORM\Index(name="colis_id", columns={"colis_id"})})
 * @ORM\Entity
 */
class Documentexpedition
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSignature", type="date", nullable=false)
     */
    private $datesignature;

    /**
     * @var int
     *
     * @ORM\Column(name="colis_id", type="integer", nullable=false)
     */
    private $colisId;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=false)
     */
    private $statut;


}
