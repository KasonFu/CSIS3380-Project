<?php

/*

Write a PHP program that sets the variable $first_name to your first name and $last_name to your last name. Print out a string containing your first and last name separated by a space. Also print out the length of that string.

 */

$first_name = 'Srinivasa';
$last_name = 'Ramanujan';
$name = "$first_name $last_name";
print $name;
print " " . strlen($name);