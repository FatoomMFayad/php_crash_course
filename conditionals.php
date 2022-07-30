<?php
$age = 20;
$salary = 25000;
//simple if
if ($age === 20) { // === compares if the type and the value are equal, while == compares just values
    echo "I am $age years old<br>";
}
/**************************/
//if without curely braces, if with single line 
if($age === 20)
    echo "I am $age years old<br>";
/**************************/
//simple if-else
if($age > 20) {
    echo "I am in my $age's";
}else {
    echo "I am $age years old<br>";
}
/**************************/
//if AND
if($age === 20 && $salary === 25000) {
    echo "I am $age years old, and my salary is $salary $<br>";
}
/**************************/
//if OR
if($age === 20 || $salary === 2500) {
    echo "Hi I am $age <br>";
}
/************************/
//Ternary if
echo ($age === 20)?  "I am young<br>": "I am old<br>";
/************************/
//short ternary if
$myAge = $age?:18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

/************************/
//Null coalescing operator
$myName = $name ?? "Fatoom";
echo $myName . "<br>";

?>