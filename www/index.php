<?php

namespace Ecole; 

use Ecole\models\Student;
use Ecole\models\Teacher;

use Ecole\core\Exam;

require __DIR__.'/vendor/autoload.php';


$student1 = new Student("AB1_JEMNI","linda 1 ", "jemni");

$classMates[] = $student1;
$student2 = new Student("AB2_JEMNI","linda 2 " ,"jemni");

$student3 = new Student("AB3_JEMNI","linda 3 ", "jemni");

$student4 = new Student("AB4_JEMNI","linda 44 ", "jemni");


$student5 = new Student("AB5_JEMNI","linda 5 "," jemni");


array_push($classMates,$student2,$student3,$student4,$student5);



$exam = new Exam(new Teacher("MR BLABLA"," and blabla"),...$classMates);


$exam->noterExam();
$exam->classer();
$exam->printResultatSession();

echo "\nEND ... . . ;:)";