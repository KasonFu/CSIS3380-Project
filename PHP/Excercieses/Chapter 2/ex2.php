<?php 
/*

Write a PHP program that computes the total cost of this restaurant meal: two hamburgers at $4.95 each, one chocolate milkshake at $1.95, and one cola at 85 cents. The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.


*/

$hamburger = 4.95; 
$shake = 1.95; 
$cola = 0.85;
$tip_rate = 0.16; 
$tax_rate = 0.075;

$food = (2 * $hamburger) + $shake + $cola; 
$tip = $food * $tip_rate; 
$tax = $food * $tax_rate;
$total = $food + $tip + $tax;
print 'The total cost of the meal is $' . $total;


?>

