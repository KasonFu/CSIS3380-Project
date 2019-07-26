<?php

function getFood()  {
    $data = array(
    array("Cheese","Yellow","Dairy"),
    array("Lettuce","Green", "Fruits & Vegetables"),
    array("Bread", "Brown", "Wheat & Grains"),
    array("Eggs", "White","Meats & Poultry")
);

return $data;
}

//this function parses any contents of a CSV
function parseContents($fileContents)   {

    //An array to store our food
    $foodData = array();

    //Seperate the file by lines
    $lines = explode("\n",$fileContents);

    for ($x = 0; $x < count($lines); $x++)    {

        //Seperate the lines by commas
        $columns = explode(",", $lines[$x]);

        $foodData[] = $columns;

    }

    return $foodData;
}

function parseFoodFile($fileContents)   {

    //An array to store our food
    $foodData = array();

    //Seperate the file by lines
    $lines = explode("\n",$fileContents);

    for ($x = 0; $x < count($lines); $x++)    {

        try { 
        //Seperate the lines by commas
        $columns = explode(",", $lines[$x]);
        if (count($columns) != 4)   {
            throw new Exception("Problem parsing file on line: ".($x + 1)."<BR>");
        }
        $foodData[] = $columns;

        } catch (Exception $ex) {
            echo $ex->getMessage();
            error_log($ex->getMessage(), 0);
        }
    }

    return $foodData;
}

?>