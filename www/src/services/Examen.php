<?php

declare(strict_types=1);

namespace School\services;

use School/models/Etudiant;

interface Examen
{
    public function examinate(Etudiant ...$etudiants) : void;
    public function rank(...$sessionResults) : array;


}