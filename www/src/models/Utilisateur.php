<?php
declare(strict_types=1);

namespace School\models;

abstract class Utilisateur
{
    protected $Nom;
    protected $Prenom;

    protected function __construct(string $nom , string $prenom)
    {
        $this->Nom = $nom;
        $this->Prenom = $prenom;
    }

    public function getNom() : string
    {
        return $this->Nom;
    }

    public function getPrenom() : string
    {
        return $this->Prenom;
    }

    
    public function setNom(string $fName)
    {
        $this->Nom = $fName;
    }

    public function setPrenom(string $lName)
    {
        $this->Prenom = $lName;
    }


}