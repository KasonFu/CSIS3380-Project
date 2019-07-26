<?php

/*

1. Write a function to return an HTML <img /> tag. The function should accept a mandatory argument of the image URL and optional arguments for alt text, height, and width. 

 */

function html_img($url, $alt = null, $height = null, $width = null)
{
    $html = '<img src="' . $url . '"';

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

//<img width="48" height="24" alt="php" src="/images/logos/php-logo.svg">
echo html_img("http://php.net/images/logos/php-logo.svg","PHP Logo", 24, 48);