<?php

/*

    3. Put your function from the previous exercise in one file. Then make another file that loads the first file and uses it to print out some <img /> tags.
 */

// The html_img2() function from the previous exercise is saved in this file include "ex2.php";
include "ex2.php";

$image_path = '/images/';
print html_img2('puppy.png');
print html_img2('kitten.png', 'fuzzy');
print html_img2('dragon.png', null, 640, 480);
