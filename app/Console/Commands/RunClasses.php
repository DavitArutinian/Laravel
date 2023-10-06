<?php

namespace App\Console\Commands;

use App\Classes\Person;
use App\Classes\Student;
use App\Classes\Circle;
use App\Classes\Rectangle;
use Illuminate\Console\Command;

class RunClasses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-classes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executes class commands for testing.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $person1 = new Person('Levani', 19);
        $person2 = new Person('Mate', 10);
        $pers = [$person1, $person2];
        $person1->personInfo();
        echo "Average age: ".Person::averageAgeOfPersons($pers)."\n";

        $shapes = [new Circle(3), new Rectangle(4, 6)];

        foreach ($shapes as $shape)
        {
            $area = $shape->calculateArea();
            echo "Shape Area: $area\n";
        }

        $student1 = new Student('Gio', 13, '01901123456');
//        dd(['student' => $student1]);
    }
}
