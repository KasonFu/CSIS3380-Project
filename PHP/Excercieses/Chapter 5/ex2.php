<?php


/*

2. Modify the function in the previous exercise so that only the filename is passed to the function in the URL argument. Inside the function, prepend a global variable to the filename to make the full URL. For example, if you pass photo.png to the function, and the global variable contains /images/, then the src attribute of the returned <img> tag would be /images/photo.png. A function like this is an easy way to keep your image tags correct, even if the images move to a new path or server. Just change the global variable—for example, from /images/ to http://images.example.com/. 

*/

function html_img2($file, $alt = null, $height = null, $width = null)
{
    if (isset($GLOBALS['image_path'])) {
        $file = $GLOBALS['image_path'] . $file;
    }
    $html = '<img src="' . $file . '"';
    if (isset($alt)) {
        $html .= ' alt="' . $alt . '"';
    }
    if (isset($height)) {
        $html .= ' height="' . $height . '"';
    }
    if (isset($width)) {
        $html .= ' width="' . $width . '"';
    }
    $html .= '/>';
    return $html;
}
////<img width="48" height="24" alt="php" src="/images/logos/php-logo.svg">

//Set the Globals path
$GLOBALS['image_path'] = "http://php.net/images/logos/";
echo html_img2("php-logo.svg","PHP Logo", 24, 48);
