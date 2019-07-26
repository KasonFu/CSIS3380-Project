<?php

// $courses = array();

$courses = ['Hongkun','Fu','Kason'];
$courses[] = "Xenia";

//krsort($courses);

// var_dump($courses[count($courses) - 1]);
function compare($x,$y)
{
    if($x > $y)
    {
        return 1;
    }
    else if($x < $y)
    {
        return -1;
    }
    else return 0;
}
usort($courses, "compare");
var_dump($courses);

?>
