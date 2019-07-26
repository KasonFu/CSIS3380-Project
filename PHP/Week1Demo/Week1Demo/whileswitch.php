<?php

while(true) {
    
    //Do stuff
    echo "Please enter a choice (c, g, q):\n";
    $cmd = stream_get_line(STDIN, 1024, PHP_EOL);
    
    switch ($cmd)   {

        case "c":
            echo "BOCK BOCK BOCK!!!!\n";
        break;

        case "g":
            echo "BAAAAAHHH!!!\n";
        break;

        case "q":
            echo "Thank you for comming to the farm!\n";
            exit();
        break;

        default:
            echo "Please enter a valid command!\n";
        break;

    }
}

?>