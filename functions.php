<?php
//Simple function wich prints "Hello from PHP"
function hello()
{
    echo "Hello from PHP"."<br>";
}
hello();
/************************ */
//function with argument
function printMyName($name) {
    echo "Hello I am $name". "<br>";
}
printMyName("Fatoom");
/********************* */
//function to sum two numbers
function sum($a, $b) {
    return $a + $b;
}
echo sum(2, 3)."<br>";
/*********************** */
//Create function that sum all numbers using spread 
function sumNumbers(...$nums){
    $sum = 0;
    foreach($nums as $num){
        $sum += $num;
    } 
    return $sum;
}
echo sumNumbers(1, 2, 3, 4, 5).'<br>';
/******************* */
//Arrow functions
function sumNumbersArrowFn(...$nums){
    return array_reduce($nums, fn($carry, $n)=> $carry + $n);
}
echo sumNumbers(1, 2, 3, 4, 5).'<br>';
?>