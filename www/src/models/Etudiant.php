<?php
declare(strict_types=1);


namespace School\models;


use School\models\Utilisateur;


final class Etudiant extends Utilisateur
{
    private $ide ;

    public function __construct(string $ide,string $fName, string $lName)
    {
        parent::__construct($fName,$lName);
        $this->ide = $ide;


    }

    public function __toString()
    {
        return $this->ide;
    }

    public function getIde() : String
    {
        return $this->ide;
    }

    public function setIde(string $ide)
    {
        $this->ide = $ide ;
    }

    
}