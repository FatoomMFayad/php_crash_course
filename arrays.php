<?php
//Create array
$fruits = ["Apple", "Melon", "Kiwi"];
/******************************/
//Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Get element by index
echo $fruits[1].'<br>';
/******************************/
//set element by index
$fruits[3] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Check if array has element at specific index
echo isset($fruits[4]).'<br>';//false
echo isset($fruits[1]).'<br>';//true
/******************************/
//Append element
$fruits[] = 'Banana';   
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Print the length of the array
echo count($fruits).'<br>';
/******************************/
//Add element at the end of the array
array_push($fruits, 'dummy');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Remove element from the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
?>