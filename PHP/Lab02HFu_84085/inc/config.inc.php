<?php

function config(){
    //Define the constant for the probability for RUN and HIT
    define("RUN_PROBABILITY", 0.7);
    define("HIT_PROBABILITY", 0.5);

    /*
    * Store the following information for all three monsters, use an indexed array
    * Monster Type: Beast, Dragon, Elemental
    * Monster Health: 100, 100, 150
    * Monster status (dead/alive)
    */
    global $monsters;
    $monsters = array(
        array("Beast", 100, "alive"),
        array("Dragon", 100, "alive"),
        array("Elemental", 150, "alive")
    );

    /*
    * Store all the information in an array called $player, use an associative array
    * Name
    * Health
    */
    global $player;
    $player["name"] = "Hongkun";
    $player["Health"] = 100;
}
?>