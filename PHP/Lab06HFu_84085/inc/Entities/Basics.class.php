<?php
    class Basics extends Pizza
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