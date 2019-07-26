 <?php

//This is the function to fight, it rolls the dice and determines
function fight($monster, $player)
{   
    //Make sure the appropriate variables are accessible
    global $monster, $player;

    //roll the dice and save it to a variable
    $dice = rollDice();
    /**
     * Roll the dice, if the percentage is greater than HIT_PROBABILITY 
     * then you hit (deice roll - 20) * 5 to determine hit points.
     */
    //Calculate the hit probabililty 50/50
    //Calculate the damge

    $hitdice = rand(1,10);
    $damage = (20 - $dice) * 5;
    if($hitdice > 5)

        {
            //Notify the user of how much damage they inflicted
            echo "Hit! Monster lost $damage health.\n";
            //Remove the damage from the current Monster
            $monster[1] -= $damage;
        }
         //otherwise the oponent hits
    else{
             //Notify the player they missed
            echo "You missed! " . $player["name"] . ", the monster countered with $damage \n";
             //Calculate the damage the player inflicted
             //Remove the datmaage from the player
            $player["Health"] -= $damage;
        }
     
    if($player["Health"] <= 0)
        {
            echo "Sorry, you died!";
            exit();
        }

}   


function run($monster, $player)
{
    global $monster, $player;
    $dice = rollDice();
    $rundice = rand(1,10);
    $damage = (20 - $dice) * 5;
    if($rundice <= 7)
        {
            $player["Health"] += $dice;
            echo "You are able to get a rest. \n";
            echo "Your health has incresed by $dice. \n";
        }
    else
        {
            echo "You were not able to run! You must fight! \n";
            fight($monster, $player);
        }
}

//This function handles rolling the dice.  It returns an integer which represents the result of rolling the dice.
function rollDice(){
    //Return a dice roll between  and 20.
    return rand(1,20);
}



//This function displays the status of the player and the current monster
function displayStatus($monster, $player)    {
    
    //Make sure all the variables you need are in place.
    

    /**
     * Display should be as follows:
     * 
     * Player Stats: Name: Sam Health: 20
     * Monster Stats: Type: Beast Health: 15
     */
    echo "          NEW MONSTER HAS ARRIVED! TYPE: " . $monster[0] . "\n";
    echo "Player Status: Name: " . $player["name"] . " Health: " . $player["Health"] . "\n";
    echo "Monster Status: Type: " . $monster[0] . " Health: " . $monster[1] . "\n";
    printf("%'-80s\n","");
   

}


?>