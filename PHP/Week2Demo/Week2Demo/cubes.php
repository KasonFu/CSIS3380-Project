<?php


$cubes = array(
    array(3,3,3),   //27
    array(5,4,1),   //20
    array(6,1,2)    //12
);

function compareVolume($x, $y)  {
    
    //Calculate teh volume of the cubes
    $xv = ($x[0] * $x[1] * $x[2]);
    $yv = ($y[0] * $y[1] * $y[2]);

    echo "The volume of X is: ". $xv ."\n";
    echo "The volume of Y is: ". $yv ."\n";
    
    if ($xv > $yv)  {
        return 1;
    } else if ($xv < $yv)   {
        return -1;
    } else {
        return 0;
    }
}

usort($cubes,'compareVolume');

var_dump($cubes);

?>