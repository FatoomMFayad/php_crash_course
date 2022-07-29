<?php
//Create simple string
$name = 'Fatoom';
$str = 'Hello, I am '.$name. ' From PHP';
$str2 = "Hello, I am $name  From PHP";
echo $str.'<br>';
echo $str2.'<br>';
/****************************/
//String Concatation
echo 'Hi '.'World'.'<br>';
/****************************/
//String functions
$string = "  Hello World  ";
echo "1- " . strlen($string) . '<br>'; //prints the length of the string
echo "2- " . trim($string) . '<br>'; // remove the spaces from beginning and ending of string
echo "3- " . ltrim($string) . '<br>';//remove spaces from left side
echo "4- " . rtrim($string) . '<br>';//remove spaces from right side
echo "5- " . str_word_count($string) . '<br>'; // count the words in the string
echo "6- " . strrev($string) . '<br>';//reverse the text
echo "7- " . strtoupper($string) . '<br>';//convert the string to upper case 'Capitlized'
echo "8- " . strtolower($string) . '<br>';//convert string to small letters
echo "9- " . ucfirst('hello') . '<br>';//upper case the first character
echo "10- " . lcfirst('HELLO') . '<br>';//lower case the first character
echo "11- " . ucwords('hello world') . '<br>';//convert the first letter of each word to capital letters
echo "12- " . strpos($string, 'world') . '<br>';//return the position of the first letter of the word in the string, if not exists return nothing
echo "13- " . stripos($string, 'world') . '<br>';//return the position of the first letter of the word in the string ignore case, if not exists return nothing
echo "14- " . substr($string, 8) . '<br>';//suib string of string starting from position 8 until the end
echo "15- " . str_replace('World', 'PHP',$string) . '<br>';//replace the first args with the second 
echo "16- " . str_ireplace('world', 'PHP',$string) . '<br>';//replace the first args with the second ignore case

/****************************/
//Multiline text and line breaks
$longText = "
Hello, my name is Fatoom 
I am a engineer,
I love programming
";
echo $longText.'<br>';//ignore new lines
echo nl2br($longText);//convert new line to html <br> tag
?>