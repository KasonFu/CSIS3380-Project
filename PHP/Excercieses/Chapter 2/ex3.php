<?php 

/*

Modify your solution to the previous exercise to print out a formatted bill. For each item in the meal, print the price, quantity, and total cost. Print the pre-tax food and drink total, the post-tax total, and the total with tax and tip. Make sure that prices in your output are vertically aligned



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

printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger, 2 * $hamburger);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake', $shake, $hamburger);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola', $cola, $cola);
printf("%25s: \$%5.2f\n", 'Food Total', $food);
printf("%25s: \$%5.2f\n", 'Food and Tax Total', $food + $tax);
printf("%25s: \$%5.2f\n", 'Food, Tax, and Tip Total', $total); 
