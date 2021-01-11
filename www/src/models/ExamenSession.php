<?php

declare(strict_types=1);

namespace School\models;

use School\models\Enseignant;
use School\models\Etudiant;

class ExamenSession
{
    
    private $supervisor;
    private $students;
    private $cours;
    public function __construct(Enseignant $supervisor,Cours $cours, Etudiant &...$students){
        $this->supervisor = $supervisor;        
        $this->students = $students;
        $this->cours = $cours;

    }

    public function getStudents(): array {
        return $this->students;
    }

    public function getSupervisor(): Enseignant {
        return $this->supervisor;
    }
    
    

}