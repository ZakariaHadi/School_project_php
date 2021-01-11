<?php
declare(strict_types=1);


namespace School\models;

use School\models\Utilisateur;


class Enseignant extends Utilisateur
{

    public function __construct(string $fName,string $lName)
    {
        parent::__construct($fName,$lName);
    }

    
}