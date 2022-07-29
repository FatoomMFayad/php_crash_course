<?php
//Declaring numbers
$a = 5;
$b = 3;
$c = 2.5;
/********************************/
//Arithemtic operations
echo $a + $b + $c.'<br>';
echo $a % $b.'<br>';
echo ($a + $b) * $c.'<br>';
echo $a * $b / $c.'<br>';
echo $a + $c.'<br>';
/********************************/
//Assignment with math operators
$a += $b; echo $a.'<br>';// $a = $a + $b $a = 9
$a -= $b; echo $a.'<br>';// $a = $a - $b $a = 2
$a *= $b; echo $a.'<br>';// $a = $a * $b $a = 15
$a /= $b; echo $a.'<br>';// $a = $a / $b $a = 1.67
$a %= $b; echo $a.'<br>';// $a = $a % $b $a = 2
/********************************/
//Increment Operator
// echo $b++.'<br>'; // print the variable then increment it 
echo ++$b.'<br>'; //increment the varibale then print it 
/********************************/
//Decrement Operator
// echo $b--.'<br>'; // print the variable then decrement it 
echo --$b.'<br>'; //decrement the varibale then print it 
/********************************/
//Number checking functions
is_float($c);//true
is_double($c);//true the same function as is_float
is_int($b);//true
is_integer($b);//true the same as is_int
is_numeric('3.5');//true
is_numeric('3g.5');//false
/********************************/
//Conversion
$strNumber = '12.3';
$number = (float)$strNumber; //casting
$number = floatval($strNumber); //the same value
var_dump($number);
/********************************/
//Number functions
echo "abs(-10) ". abs(-10).'<br>';
echo "pow(3,3) ". pow(3,3).'<br>';
echo "sqrt(27) ". sqrt(27).'<br>';
echo "max(3,4) ". max(3,4).'<br>';
echo "min(3,4) ". min(3,4).'<br>';
echo "round(2.4) ". round(2.4).'<br>';
echo "round(2.7) ". round(2.7).'<br>';
echo "floor(2.2) ". floor(2.2).'<br>';
echo "ceil(2.2) ". ceil(2.2).'<br>';
/********************************/
//Formatting Numbers
$num = 123456789.12345;
echo number_format($num, 2,'.',',');
?>