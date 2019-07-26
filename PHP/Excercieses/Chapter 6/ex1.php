<?php

/*

1. Create a class called Ingredient. Each instance of this class represents a single
ingredient. The instance should keep track of an ingredient’s name and its cost.

*/

class Ingredient
{
    protected $name;
    protected $cost;
    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCost()
    {
        return $this->cost;
    }
}

$butter = new Ingredient('Butter', 0.55);

echo "The ingredient is called: ".$butter->getName()."\n";
echo "The cost is: ".$butter->getCost();