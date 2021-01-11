<?php

declare(strict_types=1);

namespace School\models;

use School\models\Enseignant;
use School\models\Etudiant;

class ExamenSession
{
    
    private $supervisor;
    private $students;
    
    public function __construct(Enseignant $supervisor, Etudiant &...$students){
        $this->supervisor = $supervisor;        
        $this->students = $students;

    }

    public function getStudents(): array {
        return $this->students;
    }

    public function getSupervisor(): Enseignant {
        return (Enseignant) $this->supervisor;
    }
    
    

}