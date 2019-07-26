<?php

class Shoe  {

    //Attributes
    public $color = "";
    public $size = "";
    public $brand = "";
    public $material = "";

    public $laced = false;
    
    function laceUp()   {
        if ($this->laced)   {
            echo "The shoe is already laced up!";
        } else {
            //Lace the shoe up
            $this->laced = true;
        }
    }

    function unLace()   {
        if (!$this->laced)  {
            echo "The shoe is already unlaced.";
        } else {
            //Unlace the shoe
            $this->laced = false;
        }
    }
}


?>