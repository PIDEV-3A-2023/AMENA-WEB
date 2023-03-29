<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatesignature(): ?\DateTimeInterface
    {
        return $this->datesignature;
    }

    public function setDatesignature(\DateTimeInterface $datesignature): self
    {
        $this->datesignature = $datesignature;

        return $this;
    }

    public function getColisId(): ?int
    {
        return $this->colisId;
    }

    public function setColisId(int $colisId): self
    {
        $this->colisId = $colisId;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }


}
