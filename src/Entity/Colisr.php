<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colisr
 *
 * @ORM\Table(name="colisr", indexes={@ORM\Index(name="fk_user", columns={"id_u"}), @ORM\Index(name="fk_c1", columns={"id_c"})})
 * @ORM\Entity
 */
class Colisr
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
     * @var \Colis
     *
     * @ORM\ManyToOne(targetEntity="Colis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_c", referencedColumnName="id_Colis")
     * })
     */
    private $idC;

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
