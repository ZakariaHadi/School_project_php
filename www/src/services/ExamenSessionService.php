<?php

declare(strict_types=1);

namespace School\services;

use School\models\Etudiant;
use School\models\ExamenSession;

class ExamenSessionService implements Examen
{
    private $examenSession;
    private $sessionResults;  // Map<Etudiant,Note> 
    private $rankedSet;  // Set(Etudiant)

    public function __construct(ExamenSession $session){

        $this->examenSession = $session;
        $this->sessionResults = array_fill_keys($this->examenSession->getStudents(),null);


    }

    # Override Examen::examinate
    public function examinate(): void
    {
        try {
            foreach($this->examenSession->getStudents() as $student){
                $this->sessionResults[((string) $student)] = new Score(Score::generateRandomScore());
                $this->sessionResults[((string) $student)]->generateComments();

            }

        } catch (ExaminationException $exception) {
            echo 'Exception=> CLASS: ExamenSessionService # FCT:examinate() # TYPE: ExaminationException  ',  $exception->getMessage(), "\n";
            $this->sessionResults = array_fill_keys($students,null);
            
        } 
        
    }

    # Override Examen::rank
    public function rank(): void {

        usort($this->sessionResults, array($this, "__comparator"));

        return;
    }

    private function __comparator($a, $b) {
        return ($a->getScore() <= $b->getScore());
    }
    

    public function printResults() : void {
        echo nl2br("Nom et Prenom ### Score ### comments \n");
        foreach($this->sessionResults as $key=>$value)
            echo nl2br ($key." => ".$value."  ".$value->getComment()." \n");

          
}

}