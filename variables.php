<?php
    //This file is for declaring variables in php
    /* What is a variable?
        It is  a container that stores value
        Varibles in php do not have types: php is a lossly-typed language
        So when you declare a variable you don't specify a type, 
        variable has a dynamic data type that changes whenever you assign a value to it
    */
    /**********************************************/
    //Variable Types
    /*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
     */
    /**********************************************/
    // Declare Variables
    /* Variable name should start with $ then a letter or _  */
    $name = 'Ayham'; //String
    $age = 7; //integer
    $isChild = true; //boolean
    $height = 1.4; //float
    $job = null; //null
    /**********************************************/
    //print a variable
    echo 'My name is ' . $name . '<br>'; // . for contactation 
    echo 'I am ' . $age . ' years old <br>';
    echo 'My height is ' . $height . '  m<br>';
    echo 'Child ' . $isChild . '<br>'; // when trying to print boolean it converted into string as 1 for true and empty string for false
    echo 'My job is  ' . $job . '<br>'; // when trying to print null  it converted into empty string 
    /**********************************************/
    //Printing types of the variables
    echo gettype($name). '<br>';
    echo gettype($age). '<br>';
    echo gettype($isChild). '<br>';
    echo gettype($height). '<br>';
    echo gettype($job). '<br>';
    /**********************************************/
    //Printing the whole variable
    var_dump($name); // it prints the variables type, length, and value
    /**********************************************/
    //Changing the value of a variable
    $job = 'Engineer';
    echo '<br>'.gettype($job).'<br>';
    /**********************************************/
    //Variable checking functions
    is_string($name);//check if the variable is string: it return true for string and false otherwise
    is_int($age);//true
    is_bool($isChild);//true
    is_double($height);//true
    /**********************************************/
    //Check if variable is defined or declared
    isset($name);//true
    isset($address);//false
    /**********************************************/
    //Constants
    define('PI', 3.14);
    echo PI.'<br>'; 
    //Using PHP built-in constants
    echo PHP_INT_MAX.'<br>';
?>