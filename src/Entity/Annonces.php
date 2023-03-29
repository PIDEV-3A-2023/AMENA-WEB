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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ida_U", referencedColumnName="id")
     * })
     */
    private $idaU;

    /**
     * @var \Colis
     *
     * @ORM\ManyToOne(targetEntity="Colis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idColis", referencedColumnName="id_Colis")
     * })
     */
    private $idcolis;

    public function getIdAnnonce(): ?int
    {
        return $this->idAnnonce;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getVilleDep(): ?string
    {
        return $this->villeDep;
    }

    public function setVilleDep(string $villeDep): self
    {
        $this->villeDep = $villeDep;

        return $this;
    }

    public function getVilleArr(): ?string
    {
        return $this->villeArr;
    }

    public function setVilleArr(string $villeArr): self
    {
        $this->villeArr = $villeArr;

        return $this;
    }

    public function getDateDep(): ?string
    {
        return $this->dateDep;
    }

    public function setDateDep(string $dateDep): self
    {
        $this->dateDep = $dateDep;

        return $this;
    }

    public function getDateArr(): ?string
    {
        return $this->dateArr;
    }

    public function setDateArr(string $dateArr): self
    {
        $this->dateArr = $dateArr;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdaU(): ?User
    {
        return $this->idaU;
    }

    public function setIdaU(?User $idaU): self
    {
        $this->idaU = $idaU;

        return $this;
    }

    public function getIdcolis(): ?Colis
    {
        return $this->idcolis;
    }

    public function setIdcolis(?Colis $idcolis): self
    {
        $this->idcolis = $idcolis;

        return $this;
    }


}
