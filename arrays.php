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
/******************************/
//Add element at the beginning of the array
array_unshift($fruits, 'Grapes');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Remove element from the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/******************************/
//Split the string into array
$myStr = "Banana, Apple, Orange";
echo '<pre>';
var_dump(explode(',', $myStr));
echo '</pre>';
/******************************/
//Combine array elements into string
echo implode(", ", $fruits).'<br>';
/******************************/
//Check if element exists in array
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';
/******************************/
//Search element index in array
echo '<pre>';
var_dump(array_search('Melon', $fruits));//returns false if not exists and the index if exists
echo '</pre>';
/******************************/
//Merge two arrays
$colors =['Blue', 'Red', 'Yellow'];
echo '<pre>';
var_dump(array_merge($fruits, $colors));
echo '</pre>';
/******************************/
//Merge two arrays using spread operator
$colors =['Blue', 'Red', 'Yellow'];
echo '<pre>';
var_dump([...$fruits, ...$colors]);
echo '</pre>';
/***********************/
//Sorting array
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/***********************/
//Sorting array desc
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/***********************/
//Associative array : key-value pairs
$person = [
    'name' => 'Ola',
    'suname' => 'Ali',
    'Age' => 18,
    'Skills'=> ['SQL', 'PHP','JS'],
];
echo '<pre>';
var_dump($person);
echo '</pre>';
/************************/
//Get element by key
echo $person['name'].'<br>';
/************************/
//Set element by key
$person['job'] = 'Software Engineer';
echo $person['job'].'<br>';
/************************/
//Null coalescing assignment operator
$person['address']??='Gaza'; // if the key is not set, give it Gaza value
echo '<pre>';
var_dump($person);
echo '</pre>';
/******************************/
//print array keys
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
/******************************/
//print array values
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
/******************************/
//sorting  associative arrays by key
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';
/******************************/
//sorting  associative arrays by value
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';
/******************************/
//Two dimensional arrays
$tasks = [
    ['title'=>'Wake up', 'compeleted'=>true],
    ['title'=>'Go to work', 'compeleted'=>true],
    ['title'=>'Back Home', 'compeleted'=>false],
];
echo '<pre>';
var_dump($tasks[0]['title']);
echo '</pre>';
?>