<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
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
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_u", referencedColumnName="id")
     * })
     */
    private $idU;

    public function getIdColis(): ?int
    {
        return $this->idColis;
    }

    public function getNomexpediteur(): ?string
    {
        return $this->nomexpediteur;
    }

    public function setNomexpediteur(string $nomexpediteur): self
    {
        $this->nomexpediteur = $nomexpediteur;

        return $this;
    }

    public function getAdresseexpediteur(): ?string
    {
        return $this->adresseexpediteur;
    }

    public function setAdresseexpediteur(string $adresseexpediteur): self
    {
        $this->adresseexpediteur = $adresseexpediteur;

        return $this;
    }

    public function getNomdestinataire(): ?string
    {
        return $this->nomdestinataire;
    }

    public function setNomdestinataire(string $nomdestinataire): self
    {
        $this->nomdestinataire = $nomdestinataire;

        return $this;
    }

    public function getAdressedestinataire(): ?string
    {
        return $this->adressedestinataire;
    }

    public function setAdressedestinataire(string $adressedestinataire): self
    {
        $this->adressedestinataire = $adressedestinataire;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

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

    public function getDateexpedition(): ?\DateTimeInterface
    {
        return $this->dateexpedition;
    }

    public function setDateexpedition(\DateTimeInterface $dateexpedition): self
    {
        $this->dateexpedition = $dateexpedition;

        return $this;
    }

    public function getIdU(): ?User
    {
        return $this->idU;
    }

    public function setIdU(?User $idU): self
    {
        $this->idU = $idU;

        return $this;
    }


}
