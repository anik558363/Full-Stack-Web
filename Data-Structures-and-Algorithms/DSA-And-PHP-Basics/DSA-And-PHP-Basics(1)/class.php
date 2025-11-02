<?php


class ClassRoom
{


    public $teacher;

    public $students = [];

    public function __construct($teacher)
    {
        $this->teacher = $teacher;
    }


    // public function setTeacher( string $teacher): void
    // {
    //     $this->teacher = $teacher;
    // }


    // public function getTeacher() : string
    // {
    //     return $this->teacher;
    // }

       public function setTeacher(): void
    {
        $this->teacher;
    }


    public function getTeacher() : string
    {
        return $this->teacher;
    }
}

// $room1 = new ClassRoom();
// $room1->setTeacher("dd");
// echo $room1->getTeacher();

$room1 = new ClassRoom("anik");

echo "class variable " . $room1->teacher . "<br>";

$room1->setTeacher();
echo $room1->getTeacher();
