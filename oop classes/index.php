<?php
require_once 'Person.php';
require_once 'Car.php';
require_once 'Bus.php';
// require_once 'Student.php';
$p = new Person('Ahmed',  25, 2800);
// $s = new Student('Ahmed', 25, 2800, 1234, 'Web');
// $p1 = new Person('Ula', 'Ahmed', 25, 2900);

// echo 'Hello ' . $p->salary;

$c = new Car('BMW', 'zxd', 'white', 2016);
$c->setWheel(4);
$c->setSpeed(1500);
echo $c->getProduction_date() . '<br>';

// var_dump($c);
