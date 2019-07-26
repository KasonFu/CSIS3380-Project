<?php

//Example function parameter that is pass by reference
// function greeting (& $name)   {


//This function is used to greet the user
function greeting (&$name)   {

    //global $name;
    $name = "Sam";
    return "Hello ".$name."!";
}

?>