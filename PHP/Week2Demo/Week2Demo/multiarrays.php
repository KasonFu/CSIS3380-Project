<?php

$courses = array(
    array("CSIS", 1280, "Bambang", "Serif"),
    array("CSIS", 2300, "Jisha", "Jameson"),
    array("CSIS", 3300, "Michael", "Ma"),
    array("BUSN", 1250, "Kenneth", "Eng")
);

function cmpLastName($x, $y)    {

    if ($x[3] > $y[3])  {
        return 1;
    } else if ($x[3] < $y[3])   {
        return -1;
    } else {
        return 0;
    }

}

usort($courses,'cmpLastName');

var_dump($courses);


?>