<?php

/*
    4. Put your Ingredient class into its own namespace and modify your other code
    that uses IngredientCost to work properly.
*/

//Where are our objects?, we need to include them

use Meals\Entree;
use Meals\PricedEntree;
use Meals\Ingredient;

require 'inc/Entree.class.php';
require 'inc/Ingredient.class.php';
require 'inc/PricedEntree.class.php';


//Add the ingredients
$ingredients = array(
    new Ingredient("Goat Cheese", 2.00),
    new Ingredient("Orange Rind", .50),
    new Ingredient("Lemon Rind", .50),
    new Ingredient("Sourdough Bread", 1.00),
    new Ingredient("prosciutto",  3.00),
    new Ingredient("Rock Melon", 1.50),
    new Ingredient("Honey", .25),
    new Ingredient("Mint Leaves", .50));


//Priced Entree
$rb = new PricedEntree("Rockmelon Bruschetta", $ingredients);
echo "The Price of: ".$rb->name." is ".$rb->getCost();