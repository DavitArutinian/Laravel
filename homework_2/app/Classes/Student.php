<?php

namespace App\Classes;

class Student extends Person
{
    protected string $studentId;

    public function __construct(string $name, int $age, string $studentId)
    {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getAge()
    {
        return "Student ID: {$this->studentId}, Age: {$this->getAge()}";
    }

    public function getStudentId()
    {
        return $this->studentId;
    }
}
