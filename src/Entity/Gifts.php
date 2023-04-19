<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\GiftsRepository ; 
#[ORM\Table(name: 'Gifts')]
#[ORM\Entity(repositoryClass :GiftsRepository::class)]
class Gifts
{
  
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

    #[Assert\NotBlank(message:"Le nom ne doit pas être vide")]
    #[Assert\Length(max:15,maxMessage:"La longueur maximale du nom est 15")]
    #[ORM\Column(length:100)]
    private ?String $name=null;

    #[ORM\Column(length:100)]
    #[Assert\NotBlank(message:"La description ne doit pas être vide")]
    #[Assert\Length(max:50,maxMessage:"La longueur maximale du description est 50")]
    private ?String $description=null;

    #[ORM\Column(length:100)]
    #[Assert\NotBlank(message:"La valeur ne doit pas être vide")]
    private ?String  $value=null;

    #[ORM\Column(length:100)]
    private ?String $photo=null;

    #[ORM\ManyToOne(inversedBy: 'gifts')]
    private ?Competition $idC = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getIdC(): ?Competition
    {
        return $this->idC;
    }

    public function setIdC(?Competition $idC): self
    {
        $this->idC = $idC;

        return $this;
    }
    public function __toString(): string
    {
        return 'bla bla';
    }
}