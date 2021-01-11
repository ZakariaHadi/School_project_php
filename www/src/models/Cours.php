<?php
declare(strict_types=1);


namespace School\models;


class Cours 
{
    private $title;

    public function __construct(string $title)
    {
       $this->title = $title;
    }

    
    
}