<?php
    class Juice extends Drink
    {
        private $type = "";

        
        function getType()
        {
            return $this->type;
        }
        function setType($newtype)
        {
            $this->type = $newtype;
        }

    }

?>