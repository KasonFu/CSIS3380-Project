<?php
 
 class Menu {

    //
    public $menuItems = array();

    //Build an array for each class type for all the classes.
    public $pizzas = array();
    public $drinks = array();

    //This function returns a flat array of objects and puts them to $this->menuItems
    function parseMenuData($fileContents)   {

    try{
        $i = "";
        //Lines
        $lines = explode("\n", $fileContents);
        //Walk the lines
            for($x=1; $x<count($lines)-1; $x++)
            {
            //Pull the columns
                $columns = explode("|",$lines[$x]);

                if(count($columns) != 4)
                {
                    throw new Exception("Somethng wrong on line $x");
                }
            //If the class is Pizza

                if($columns[0] == "pizza")
                {
                //Parse the different kinds of pizza
                    switch ($columns[1])    {
                        case "Basics":
                            //Make a new pizza
                            $i = new Basics();
                        break;
                        case "Chicken":
                            //Make a new pizza
                            $i = new Chicken();
                        break;
                        case "Meat":
                            //Make a new pizza
                            $i = new Meat();
                        break;
                        case "Veggie":
                            //Make a new pizza
                            $i = new Veggie();
                        break;
                        default:
                            Page::notify(array("Problem we dont know where to put this item!"));
                        break;
                }

            }
            //Or if its a Drink
                if ($columns[0] == "drink") {

                    //Parse the different kinds of drinks
                    switch ($columns[1])    {
                        case "Pop":
                        //Make a new pizza
                            $i = new Pop();
                        break;
                         case "Juice":
                        //Make a new pizza
                            $i = new Juice();
                        break;
                        default:
                            Page::notify(array("Problem we dont know where to put this item!"));
                        break;
                    }
                }
            
            $i->settype($columns[1]);
            $i->setItem($columns[2]);
            $i->setDescription($columns[3]);

            //Add the item
            $this->menuItems[] = $i;
        }
    }catch(Exception $ex)
    {
        echo $ex->getMessage();
    }
}

    



    /* Build the menu into specific categories based on the subclass and the claa name
    * Pizzas should go in the pizzas array
    * Drinks should go in the drinks array
    */

    function buildMenu() {

            //Sort the arrays
            usort($this->menuItems,array("Menu","sortbyclass"));


            //Walk through the entire menu, put each item in its respective array by class and type. HINT use is_subclass_of
            foreach($this->menuItems as $item){
                //If its a drink (check is_subclass_of)
                if (is_subclass_of($item, "Drink"))   {
                    //Check what type. HINT use gettype
                    //If its Pop
                    //Use getClass
                    switch (get_class($item)) {
                        case "Pop":
                            //Add to the drinks array with the key "pop"
                            $this->drinks["pop"][] = $item;
                        break;

                        case "Juice":
                        //Add to the drinks array with the key "juice"
                        $this->drinks["juice"][] = $item;
                        break;

                        default:
                            Page::notify(array("Problem we dont know where to put this drink!"));
                        break;
                    }
                }

                //If its Pizza ... is_subclass_of()
                if (is_subclass_of($item, "Pizza"))   {

                    switch (get_class($item)) {
                        case "Basics":
                            //Add to the pizzas array with the "basics" key
                            $this->pizzas["basics"][] = $item;
                        break;

                        case "Meat":
                        //Add to the pizzas array with the "basics" key
                        $this->pizzas["meat"][] = $item;
                        break;

                        case "Veggie":
                            //Add to the pizzas array with the "basics" key
                            $this->pizzas["veggie"][] = $item;
                        break;

                        case "Chicken":
                            //Add to the pizzas array with the "basics" key
                            $this->pizzas["chicken"][] = $item;
                        break;

                        default:
                            Page::notify(array("Problem we dont know where to put this Pizza". get_class($item)));
                        break;
                    }
                }

            }


    }


    // Sort function
        function sortbyclass($x,$y)
        {
            if(get_class($x)>get_class($y))
            {
                return 1;
            }
            else if(get_class($x)<get_class($y))
            {
                return -1;
            }
            else return 0;
        } 
    
}

 ?>