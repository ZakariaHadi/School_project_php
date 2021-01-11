<?php

declare(strict_types=1);

namespace School\services;


interface Examen
{
    public function examinate() : void;
    public function rank() : void;


}