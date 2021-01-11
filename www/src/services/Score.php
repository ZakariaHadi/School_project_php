<?php

declare(strict_types=1);

namespace School\services;

use School\services\ExaminationException;

class Score
{
    
    private $score;
    private $comment;

    public static function generateRandomScore(): int {
        return rand(0,20);
    }
    
    public function __construct(int $score=-1)
    {
        if($score < -1 || $score > 20)
            throw new ExaminationException('Erreur !! be sure that score is between 0 and 20 ', 1);
        
        $this->score = $score;
        $this->comment = "non affectée";

    }

   

    public function setScore($score): void {
        
        if($score < 0 || $score > 20)
            throw new ExaminationException('Erreur !! be sure that score is between 0 and 20 ', 1);

        $this->score = $score;

        $this->generateComments();
        return;
    }

    public function getScore(): int {
        return $this->score;
    }

    public function getComment(): string {
        return $this->comment;
    }

    private function generateComments(): void {

        $this->comment = ($this->score >= 0 && $this->score <10 ? "ELIMINATOIRE :(" : "VALIDE :)");
            
    }

    public function __toString(){
        return strval($this->score);
    }


}