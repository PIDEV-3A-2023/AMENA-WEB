<?php

namespace App\Entity;
use App\Entity\User ;
use App\Entity\Vehicule ;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Table(name : 'reservation')]
#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_deb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column]
    private ?float $somme = null;

    #[ORM\Column(length: 30)]
    private ?string $etat = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vehicule $idre = null;

    


    

    public function getDateDeb(): ?\DateTimeInterface
    {
        return $this->date_deb;
    }

    public function setDateDeb(\DateTimeInterface $date_deb): self
    {
        $this->date_deb = $date_deb;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getSomme(): ?float
    {
        return $this->somme;
    }

    public function setSomme(float $somme): self
    {
        $this->somme = $somme;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

   
    public function __toString(): string
    {
        return $this->etat;
    }

    public function getIdVeh(): ?Vehicule
    {
        return $this->idVeh;
    }

    public function setIdVeh(?Vehicule $idVeh): self
    {
        $this->idVeh = $idVeh;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdre(): ?Vehicule
    {
        return $this->idre;
    }

    public function setIdre(?Vehicule $idre): self
    {
        $this->idre = $idre;

        return $this;
    }
}