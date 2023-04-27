<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: '`colisr`')]
#[ORM\Entity(repositoryClass: ColisRepository::class)]
class Colisr
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $id;

    


    public function getId(): ?int
    {
        return $this->id;
    }



}
