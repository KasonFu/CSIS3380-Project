<?php

//Add all the required files, make sure you have the right order!
require_once("inc/config.inc.php");
require_once("inc/logic.inc.php");

//Variable to hold the current monster
$monster = array();
//Random index order of arrays
config();
shuffle($monsters);
$index = 0;
$monster = $monsters[$index];
displayStatus($monster, $player);
//Drop the user into the loop
while(true)
    {
        //Make sure you have a current monster select

        echo "Would you like to (f)ight, (r)un or (q)uit?\n";
        $choice = stream_get_line(STDIN,1024,PHP_EOL);
        //Proccess the commands using a switch statement (we've dont this before)
        
        switch ($choice) {

            //Fight
            case 'f':
                fight($monster, $player);
                if($monster[1]<=0)
                    {
                        echo "$monster[0] IS DEAD!\n";
                        $index++;
                        if($index == 3)
                        {
                            echo "Congratulations! You win!\n";
                            exit();
                        }
                        $monster = $monsters[$index];
                    }
                    displayStatus($monster, $player);
            break;
            //Run!
            case 'r':
                run($monster, $player);
                displayStatus($monster, $player);
            break;

            //Quit!
            case 'q':
                echo "Bye Bye";
                exit();
            break;

            //Do the right thing!
            default:
                echo "Please enter a valid command\n";
            break;
        }
    }
?>