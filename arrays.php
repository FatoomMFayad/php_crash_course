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
?>