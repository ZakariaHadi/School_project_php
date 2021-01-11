<?php
declare(strict_types=1);


namespace Ecole\models;

use Ecole\models\User;


class Teacher extends User
{

    public function __construct(string $fName,string $lName)
    {
        parent::__construct($fName,$lName);
    }

    
}