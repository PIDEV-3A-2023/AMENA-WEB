<?php

namespace App\Entity;

use App\Repository\AnnoncesRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
#[ORM\Table(name: '`annonces`')]
#[ORM\Entity(repositoryClass: AnnoncesRepository::class)]
class Annonces
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_dep = null;

    #[ORM\Column(length: 255)]
    private ?string $ville_arr = null;

    #[ORM\Column(length: 255)]
    private ?string $date_dep = null;

    #[ORM\Column(length: 255)]
    private ?string $date_arr = null;

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

 


    /*#[ORM\ManyToOne(inversedBy: 'annonces')]
    private ?Colis $idColis = null;

    private ?Colis $idColis = null;

    public function getId(): ?int
    {
        return $this->id;
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
        return $this->ville_dep;
    }

    public function setVilleDep(string $ville_dep): self
    {
        $this->ville_dep = $ville_dep;

        return $this;
    }

    public function getVilleArr(): ?string
    {
        return $this->ville_arr;
    }

    public function setVilleArr(string $ville_arr): self
    {
        $this->ville_arr = $ville_arr;

        return $this;
    }

    public function getDateDep(): ?string
    {
        return $this->date_dep;
    }

    public function setDateDep(string $date_dep): self
    {
        $this->date_dep = $date_dep;

        return $this;
    }

    public function getDateArr(): ?string
    {
        return $this->date_arr;
    }

    public function setDateArr(string $date_arr): self
    {
        $this->date_arr = $date_arr;

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



    public function getIdColis(): ?Colis
    {
        return $this->idColis;
    }

    public function setIdColis(?Colis $idColis): self
    {
        $this->idColis = $idColis;

        return $this;
    }

   /* public function getIdcolis(): ?Colis
    {
        return $this->idcolis;
    }

    public function setIdcolis(?Colis $idcolis): self
    {
        $this->idcolis = $idcolis;

        return $this;
    }
*/

   /*public function getIdColis(): ?Colis
   {
       return $this->idColis;
   }

   public function setIdColis(?Colis $idColis): self
   {
       $this->idColis = $idColis;

       return $this;
   }*/
    

   

  
    
}
