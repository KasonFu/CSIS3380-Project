<?php

require_once("inc/calculator.inc.php");
require_once("inc/greeting.inc.php");


// echo "Please enter number 1:"."\n";
// $number1 = stream_get_line(STDIN, 1024, PHP_EOL);

// echo "Please enter number 2:"."\n";
// $number2 = stream_get_line(STDIN, 1024, PHP_EOL);

// echo "Number 1 + Number 2 = ". add($number1, $number2)."\n";

$name = "Tom";
echo greeting($name);
echo "thanks for comming by $name";

?>
