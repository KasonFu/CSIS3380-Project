<?php

function say_hello() {
    global $name;
    print 'Hello, ';
    print $name;
}

$name = 'Umberto';
say_hello();
?>