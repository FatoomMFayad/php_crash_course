<?php
$fruits = ['apple', 'orange', 'banana', 25];
$colors = array("red", "blue", "yellow");

// var_dump($fruits);

// echo '<br>' . $fruits[0];
// $array = ['winter', 'autom', 'summer', 'spring'];
// print_r($array) . '<br>';
// print ($array[2]) . '<br>';
// echo isset($array[3]); //true
// echo isset($array[4]); //false

$array[4] = 'nothing';
$array[6] = 'six';

// array_push($array, 'Five');
// array_unshift($array, 'first');
// echo '<br>' . 'Before Removing' . '<br>';
// print_r($array) . '<br>';
// array_pop($array);
// echo '<br>' . 'After Removing' . '<br>';
// print_r($array) . '<br>';
// //removing fro beginning
// array_shift($array);
// echo '<br>' . 'After Removing from beginning' . '<br>';

// print_r($array) . '<br>';

$collection = (array_merge($fruits, $colors));
// echo in_array('sky', $collection);
// echo array_search('sky', $collection);
// print_r($collection);
// var_dump($collection);
// echo isset($array[6]); //true
$Employee = [
    'name' => 'Ola',
    'age' => 29,
    'salary' => 2550,
    'address' => 'Gaza'
];
// var_dump($Employee);
// echo $Employee['name'];
// print_r(array_keys($Employee));
// print_r(array_values($Employee));
$Employee['greeting'] = 'hi';
print_r($Employee);
// print_r(array_keys($Employee));
print_r(array_search('hi', $Employee));
