<?php
namespace App\Entity;

use App\Entity\Vehicule;

class SearchData
{
    public ?int $page = 1;
   
    public ?string $q = '';

    //public ?Vehicule $vehicules = [] ; 

    public ?int $max=null;

    public ?int $min=null;

}