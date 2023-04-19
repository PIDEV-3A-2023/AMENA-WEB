<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Validation
 *
 * @ORM\Table(name="validation", indexes={@ORM\Index(name="C_idim", columns={"idu"})})
 * @ORM\Entity
 */
class Validation
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
     * @var string
     *
     * @ORM\Column(name="imageA", type="string", length=255, nullable=false)
     */
    private $imagea;

    /**
     * @var string
     *
     * @ORM\Column(name="imageB", type="string", length=255, nullable=false)
     */
    private $imageb;

    /**
     * @var bool
     *
     * @ORM\Column(name="valide", type="boolean", nullable=false)
     */
    private $valide;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idu", referencedColumnName="id")
     * })
     */
    private $idu;


}
