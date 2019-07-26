<?php

$number = 5;
var_dump($number);
var_dump((string)$number);
var_dump((float)($number));

$true = 1;
settype($true, "bool");
var_dump($true);
$str = 1;
settype($str, "string");
var_dump($str);
?>

