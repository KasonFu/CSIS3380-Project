<?php

echo "What is your name?\n";
$name = stream_get_line(STDIN,1024,PHP_EOL);
echo "Hello, $name!";

?>