<?php

        class Pizza
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
                    return $this->description;
                }
                function setDescription($newdesciption)
                {
                    $this->description = $newdesciption;
                }
            }

?>