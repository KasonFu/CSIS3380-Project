<?php

include("inc/html.inc.php");
include("inc/math.inc.php");

html_header("Volume of a Cube");

var_dump($_POST);   

html_volumeForm();

//Check if ther was post data
if (isset($_POST["length"]) &&
    isset($_POST["width"]) &&
    isset($_POST["height"]) )   {

        //Calculate the volume
        $vl = calculateVolume($_POST["length"], $_POST["width"], $_POST["height"]);

        html_volume($vl);
    }
html_footer();