<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]



class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"nom obligatoire")]
    //#[Assert\Length((min:10,message:"Votre mot de passe ne contient pas {{limit }} caractères."))]
    private ?string $nom = null;
   
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"prenom obligatoire")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $adress = null;



    #[ORM\Column(length: 255)]
    private ?string $cin = null;


    #[ORM\Column(type: Types::DATE_MUTABLE, name: "dateNaissance")]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, name: "dateCreationC")]
    private ?\DateTimeInterface $dateCreationC = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\Column(length: 255)]
    private ?string $role = null;

    #[ORM\Column(length: 255, name: "motPass")]
    private ?string $motPass = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $Token = null;

    #[ORM\Column(length: 8)]
    private ?string $score = null;

    #[ORM\Column(length: 11)]
    private ?string $numtel = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $Compte_ex = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $token_ex = null;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->dateNaissance = $datenaissance;

        return $this;
    }

    public function getDatecreationc(): ?\DateTimeInterface
    {
        return $this->dateCreationC;
    }

    public function setDatecreationc(\DateTimeInterface $dateCreationC): self
    {
        $this->dateCreationC = $dateCreationC;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getMotpass(): ?string
    {
        return $this->motPass;
    }

    public function setMotpass(string $motpass): self
    {
        $this->motPass = $motpass;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->Token;
    }

    public function setToken(string $token): self
    {
        $this->Token = $token;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getNumtel(): ?string
    {
        return $this->numtel;
    }

    public function setNumtel(string $numtel): self
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCompteEx(): ?\DateTimeInterface
    {
        return $this->Compte_ex;
    }

    public function setCompteEx(?\DateTimeInterface $compteEx): self
    {
        $this->Compte_ex = $compteEx;

        return $this;
    }

    public function getTokenEx(): ?\DateTimeInterface
    {
        return $this->token_ex;
    }

    public function setTokenEx(?\DateTimeInterface $tokenEx): self
    {
        $this->token_ex = $tokenEx;

        return $this;
    }


    public function __toString()
    {
        return $this->nom;
    }

 
    public function setValidation(?Validation $validation): self
    {
        // unset the owning side of the relation if necessary
        if ($validation === null && $this->validation !== null) {
            $this->validation->setIdu(null);
        }

        // set the owning side of the relation if necessary
        if ($validation !== null && $validation->getIdu() !== $this) {
            $validation->setIdu($this);
        }

        $this->validation = $validation;

        return $this;
    }
}