<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\VehiculeRepository ; 
#[ORM\Table(name: '`vehicule`')]

#[ORM\Entity(repositoryClass :VehiculeRepository::class)]
class Vehicule
{


   #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column (name:"id")]
   private ?int $idV=null;


    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message:"Le type ne doit pas être vide")]
    private ?string $type = null ; 

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message:"L'immatiricule ne doit pas être vide")]
    private ?string $immat = null ; 

    #[ORM\Column]
    #[Assert\NotBlank(message:"L'etat ne doit pas être vide")]
    private ?int $etat ;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message:"La valeur de la Kilometrage doit être remplie")]
    private ?string $kilometrage = null ; 
  
    #[ORM\Column]
    #[Assert\NotBlank(message:"La valeur des chevaux ne doit pas être vide")]
    private ?int $chevaux=0 ;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message:"La valeur de la marque doit être remplie")]
    private ?string $marque = null ;
    
    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message:"La valeur de la modele doit être remplie")]
    private ?string $modele = null ;
    
    #[ORM\Column(length: 15)]
    #[Assert\NotBlank(message:"La valeur de la couleur doit être remplie")]
    private ?string $couleur = null ;


    #[ORM\Column]
    #[Assert\NotBlank(message:"La valeur de la prix doit être remplie")]
    private ?float $prix = null ;

    #[ORM\Column(length: 150,name : 'img')]
    private ?string $img = null ;

    #[ORM\OneToMany(mappedBy: 'idVeh', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    
    


   


    public function getidV(): ?int
    {
        return $this->idV;
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

    public function getImmat(): ?string
    {
        return $this->immat;
    }

    public function setImmat(string $immat): self
    {
        $this->immat = $immat;

        return $this;
    }

    public function isEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getChevaux(): ?int
    {
        return $this->chevaux;
    }

    public function setChevaux(int $chevaux): self
    {
        $this->chevaux = $chevaux;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    
    public function __toString(): string
    {
        return $this->immat;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setIdVeh($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdVeh() === $this) {
                $reservation->setIdVeh(null);
            }
        }

        return $this;
    }

    

}