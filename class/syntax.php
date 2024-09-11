<?php

// echo 'syntax class' . '<br>';

// comment (single line comment)
/* mulitiline comment */

// php is case insensitive or not case sensitive
// ECHO same as echo same as Echo

// echo 'Helloooo';

// $name is not same as $Name is not same as $NAME

// $name = 'godbless';
// echo $name;

// data types (simple or primitive data types)
/* 
1) int
2) float(double)
3) string
4) boolean
5) NULL
*/

// integer (a whole number)
// $age = 23;
// echo $age;

// float or double (a decimal number)
// $rating = 4.5;
// echo $rating;


// strings (are sequence of characters enclosed in single or double quotes)

// $person = 'godbless';
// $full_name = "Ejovwo Godbless";

// echo $full_name, $person;

// string  concatenation

// $greet = 'Hello my name is ' . $name . ' and I am ' . $age . ' years old';
// echo $greet;

// $is_married = true;
// echo $is_married;

// NULL ()
// $empty_table = NULL;

// echo $empty_table;

// php output
// echo, print, print_r, var_dump, var_export

// echo
// 1) outputs string 2) it takes multiple argument
// echo 'Hello world', 23, true;
// print 
// 1) outputs string 2) con only take a single argument
// print('Hello world');

// print_r (for strings)
$names = ['godbless', 'emmanuel', 'benjamin'];
print_r($names);
echo '<br>';

// var_dump (for strings)
$names = ['godbless', 'emmanuel', 'benjamin'];
var_dump($names);
echo '<br>';

// var_export (for any kind of data type)
$names = ['godbless', 'emmanuel', 'benjamin'];
var_export($names);
$name = 'Godbless';
var_export($name);
$age = 34;
var_export($age);
