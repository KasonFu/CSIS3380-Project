<?php
    class Meat extends Pizza
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