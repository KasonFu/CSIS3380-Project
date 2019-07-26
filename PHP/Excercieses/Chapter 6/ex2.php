<?php

/*

2. Add a method to your IngredientCost class that changes the cost of an ingredient.


*/

require 'inc/Ingredeient.class.php';

$butter = new Ingredient('Butter', 0.55);
$butter->setCost(1.25);

echo "The ingredient is called: ".$butter->getName()."\n";
echo "The cost is: ".$butter->getCost();