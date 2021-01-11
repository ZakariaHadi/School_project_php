<?php

namespace School; 

use School\models\Etudiant;
use School\models\Enseignant;
use School\models\Cours;
use School\models\ExamenSession;

use School\services\ExamenSessionService;

require __DIR__.'/vendor/autoload.php';

echo nl2br("#BEGIN => Start data factory \n");

$student1 = new Etudiant("IDE1","HADI", "Zakaria 1");
$student2 = new Etudiant("IDE2","HADI", "Zakaria 2");
$student3 = new Etudiant("IDE3","HADI", "Zakaria 3");
$student4 = new Etudiant("IDE4","HADI", "Zakaria 4");
$student5 = new Etudiant("IDE5","HADI", "Zakaria 5");
$student6 = new Etudiant("IDE6","HADI", "Zakaria 6");
$student7 = new Etudiant("IDE7","HADI", "Zakaria 7");

$classRoom = array();
array_push($classRoom,$student1,$student2,$student3,$student4,$student5,$student6,$student7);

echo nl2br("##### => Initiate tp quiz\n");
$examenTP = new ExamenSession(new Enseignant("Professeur PHP","nup"),$classRoom,new Cours("Web PHP"));

echo nl2br("##### => get the service wrapper\n");
$serviceWrapper = new ExamenSessionService($examenTP);

$serviceWrapper->Examinate();
$serviceWrapper->rank();

echo nl2br("##### => Print results \n");
$serviceWrapper->printResults();

