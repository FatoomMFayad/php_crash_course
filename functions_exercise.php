<?php
// function hello()
// {
//     echo 'Hello from php <br>';
// }

// hello();



// echo add(4, 6);
// function add($a, $b)
// {
//     return $a + $b;
//     // echo $a + $b;
// }
// echo $c . '<br>';

// دالة تقوم بجمع عناصر المصفوفة ومن 
//  باستخدام دالة اخرى تقسمه على عددها
// دالة تقوم بطباعة عناصر المصفوفة
$numbers = [1, 2, 3, 4, 5];
$salaries = [100, 2000, 300, 4000, 500];
$d = 2;
/*
function that returns sum of array element or -1 if not array
*/
function sum($array)
{
    $sum = 0;
    if (is_array($array)) {
        // for ($i = 0; $i < sizeof($array); $i++) {
        //     $sum += $array[$i];
        // }
        foreach ($array as $a) {
            $sum += $a;
        }
    } else
        $sum = -1;
    return $sum;
}

function average($myArr)
{
    return sum($myArr) / count($myArr);
}

function printArr($array)
{
    foreach ($array as $a) {
        echo $a . '<br>';
    }
}
// echo $array;
echo sum($numbers) . "<br>";
echo average($numbers) . "<br>";
echo printArr($numbers);
// echo sum($d);
//is_array(2) --- false
//else $sum = -1
//return $sum ** -1
