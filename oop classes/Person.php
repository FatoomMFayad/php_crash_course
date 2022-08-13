<?php

use Person as GlobalPerson;

class Person
{
    //Access Modifiers
    //public : everywhere 
    //protected: 
    public $name;
    public static $surname;
    private $age;
    protected $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        // $this->surname = $surname;
        $this->salary = $salary;
        $this->age = $age;
    }
}
