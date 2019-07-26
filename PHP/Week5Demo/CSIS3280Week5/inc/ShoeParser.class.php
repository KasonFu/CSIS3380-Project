<?php

class ShoeParser    {

    public static $shoes = array();

    static function parse($contents)    {

        $lines = explode("\n",$contents);
        
        foreach ($lines as $key=>$value)   {
            if ($key == 0)  {
                //Its the header, we dont want it, no hard feelings.

            } else {
                //Get the columns
                $columns = explode(",",$value);
                if (count($columns) != 4)   {
                    throw new Exception("There is a problem with the file on $key");
                } else {
                    //Make shoes!
                    
                    //Shoes for days!

                    //color,size,brand,material
                    $s = new Shoe();
                    $s->color = trim($columns[0]);
                    $s->size = trim($columns[1]);
                    $s->brand = trim($columns[2]);
                    $s->material = trim($columns[3]);
 
                    self::$shoes[] = $s;
                }
            }
        }

    }
}