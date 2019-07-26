<?php

class ShoeRack  implements IShoeRack  {

    public $shoes = array();

    function sortByMaterial()   {
        
        usort($this->shoes,'self::cmpMaterial');
        // usort($this->shoes,array('ShoeRack','cmpMaterial'));
    }

    function cmpMaterial($x, $y)    {
        if ($x->material > $y->material)    {
            return 1;
        } else if ($x->material < $y->material) {
            return -1;
        } else {
            return 0;
        }
    }
}