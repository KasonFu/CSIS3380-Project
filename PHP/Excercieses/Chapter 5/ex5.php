<?php

/*
    
    5.  Web colors such as #ffffff and #cc3399 are made by concatenating the hexadecimal color values for red, green, and blue. Write a function that accepts decimal red, green, and blue arguments and returns a string containing the appropriate color for use in a web page. For example, if the arguments are 255, 0, and 255, then the returned string should be #ff00ff. You may find it helpful to use the built-in function dechex(), which is documented at http://www.php.net/ dechex.

 */

/* Using dechex(): */ 
function web_color1($red, $green, $blue)  {

    $hex = [dechex($red), dechex($green), dechex($blue)];    
    
    // Prepend a leading 0 if necessary to 1-digit hex values    
    foreach ($hex as $i => $val) {
        if (strlen($i) == 1) {
            $hex[$i] = "0$val";
        }
    }
    return '#' . implode('', $hex); 
}

/* You can also rely on sprintf()'s %x format character to do   hex-to-decimal conversion: */ 
function web_color2($red, $green, $blue)    {
    return sprintf('#%02x%02x%02x', $red, $green, $blue);
}

echo web_color1(255,152,152);
print '<BR>';
echo web_color2(255,152,152);