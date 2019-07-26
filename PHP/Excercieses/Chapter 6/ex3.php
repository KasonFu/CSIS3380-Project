<?php

/*

3. Make a subclass of the Entree class used in this chapter that accepts Ingredient
objects instead of string ingredient names to specify the ingredients. Give your
Entree subclass a method that returns the total cost of the entrée.

Reference: https://www.taste.com.au/recipes/rockmelon-bruschetta-goats-cheese-prosciutto/444d97ba-8885-40ed-a1c1-297da956ba8a?r=entertaining/r9RVrYeu

*/

//Where are our objects?, we need to include them!

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