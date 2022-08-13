<?php
require_once './Person.php';
class Student extends Person
{
    public $stdId;
    protected $planCode;


    public function __construct($name, $age, $salary, $stdId, $planCode)
    {
        $p = new Person($name, $age, $salary, $stdId, $planCode);
        $this->name = $p->name;
        echo $p->salary . '<br>';
        // parent::name
    }
}
