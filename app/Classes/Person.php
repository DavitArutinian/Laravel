<?php

namespace App\Classes;

use App\Traits\LogTrait;

class Person
{
    use LogTrait;

    public string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;

        $this->log();
    }

    public function personInfo()
    {
        echo "Persons info:"."\n"."Name: $this->name"."\n"."Age: $this->age"."\n";
    }

    public function getAge()
    {
        return $this->age;
    }

    public static function averageAgeOfPersons($persons):float
    {
        $sumAge = 0;
        foreach ($persons as $person)
        {
            $sumAge += $person->age;
        }
        return $sumAge/count($persons);
    }
}
