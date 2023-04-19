<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reactions
 *
 * @ORM\Table(name="reactions", indexes={@ORM\Index(name="fk_a", columns={"id_a"})})
 * @ORM\Entity
 */
class Reactions
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
     * @var int
     *
     * @ORM\Column(name="id_a", type="integer", nullable=false)
     */
    private $idA;

    /**
     * @var int
     *
     * @ORM\Column(name="id_u", type="integer", nullable=false)
     */
    private $idU;

    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     */
    private $idC;


}
