<?php

namespace App\Entity;

use App\Repository\ColisRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use App\Repository\UserRepository;


use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Table(name: '`colis`')]
#[ORM\Entity(repositoryClass: ColisRepository::class)]
class Colis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id")]
    private ?int $id = null;

    #[ORM\Column(length: 50, name: "nomExpediteur")]
    private ?string $nomExpediteur = null;

    #[ORM\Column(length: 50, name: "adresseExpediteur")]
    private ?string $adresseExpediteur = null;

    #[ORM\Column(length: 50, name: "nomDestinataire")]
    private ?string $nomDestinataire = null;

    #[ORM\Column(length: 50, name: "adresseDestinataire")]
    private ?string $adresseDestinataire = null;

    #[ORM\Column(name: "poids")]
    private ?float $poids = null;

    #[ORM\Column(length: 30, name: "statut")]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, name: "dateExpedition")]
    private ?\DateTimeInterface $dateExpedition = null;




   
    #[ORM\OneToMany(mappedBy: 'idColis', targetEntity: Annonces::class)]
    private Collection $annonces;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }

   


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomExpediteur(): ?string
    {
        return $this->nomExpediteur;
    }

    public function setNomExpediteur(string $nomExpediteur): self
    {
        $this->nomExpediteur = $nomExpediteur;

        return $this;
    }

    public function getAdresseExpediteur(): ?string
    {
        return $this->adresseExpediteur;
    }

    public function setAdresseExpediteur(string $adresseExpediteur): self
    {
        $this->adresseExpediteur = $adresseExpediteur;

        return $this;
    }

    public function getNomDestinataire(): ?string
    {
        return $this->nomDestinataire;
    }

    public function setNomDestinataire(string $nomDestinataire): self
    {
        $this->nomDestinataire = $nomDestinataire;

        return $this;
    }

    public function getAdresseDestinataire(): ?string
    {
        return $this->adresseDestinataire;
    }

    public function setAdresseDestinataire(string $adresseDestinataire): self
    {
        $this->adresseDestinataire = $adresseDestinataire;

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

    public function getDateExpedition(): ?\DateTimeInterface
    {
        return $this->dateExpedition;
    }

    public function setDateExpedition(\DateTimeInterface $dateExpedition): self
    {
        $this->dateExpedition = $dateExpedition;

        return $this;
    }

   


  
    public function __toString()
    {
        return $this->nomExpediteur;
    }

    /**
     * @return Collection<int, Annonces>
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonces $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces->add($annonce);
            $annonce->setIdColis($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonces $annonce): self
    {
        if ($this->annonces->removeElement($annonce)) {
            // set the owning side to null (unless already changed)
            if ($annonce->getIdColis() === $this) {
                $annonce->setIdColis(null);
            }
        }

        return $this;
    }

}
