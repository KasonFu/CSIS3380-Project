<?php

        class Drink
            {
                private $item ="";
                private $description = "";


                function getItem()
                {
                    return $this->item;
                }
                function setItem($newitem)
                {
                    $this->item = $newitem;
                }

                
                function getDescription()
                {
                    return $this->item;
                }
                function setDescription($newdesciption)
                {
                    $this->description = $newdesciption;
                }
            }

?>