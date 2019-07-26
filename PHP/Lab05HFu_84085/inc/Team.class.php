<?php

class Team  {

    //These are the attributes
    public $players = array();
    public $teamName = "Orioles";

    //This function by addPlayer
    function addPlayer(Player $player) {
        $this->players[] = $player;
    }

    //Returns the count of the players
    function getCount() {
        return count($this->players);
    }

    //This function takes the sort by paremter and assocites the approrpaite self::cmpFunction
    function sortBy($sortType)  {

        switch ($sortType)  {
            case "no": 
                
                usort($this->players, 'self::cmpno');
            break;
            case "name": 
            echo "name";
                usort($this->players, 'self::name');
            break;
            case "position": 
                usort($this->players, 'self::position');
            break;
            case "bats": 
                usort($this->players, 'self::bats');
            break;
            case "throw": 
                usort($this->players, 'self::throw');
            break;
            case "height": 
                usort($this->players, 'self::height');
            break;
            case "weight": 
                usort($this->players, 'self::weight');
            break;
            case "birthplace": 
                usort($this->players, 'self::birthplace');
            break;
            default:
                usort($this->players, 'self::age');
            break;
        }
    }


    //All the custom compatators for each attribute ...
    function cmpno($x,$y)
    {
        if($x->no > $y->no)
        {
            return 1;
        }
        else if($x->no < $y->no)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function name($x,$y)
    {
        if($x->name > $y->name)
        {
            return 1;
        }
        else if($x->name < $y->name)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }


    function age($x,$y)
    {
        if($x->age > $y->age)
        {
            return 1;
        }
        else if($x->age < $y->age)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function position($x,$y)
    {
        if($x->position > $y->position)
        {
            return 1;
        }
        else if($x->position < $y->position)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function bats($x,$y)
    {
        if($x->bats > $y->bats)
        {
            return 1;
        }
        else if($x->bats < $y->bats)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function throw($x,$y)
    {
        if($x->throw > $y->throw)
        {
            return 1;
        }
        else if($x->throw < $y->throw)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function height($x,$y)
    {
        if($x->height > $y->height)
        {
            return 1;
        }
        else if($x->height < $y->height)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function weight($x,$y)
    {
        if($x->weight > $y->weight)
        {
            return 1;
        }
        else if($x->weight < $y->weight)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }

    function birthplace($x,$y)
    {
        if($x->birthplace > $y->birthplace)
        {
            return 1;
        }
        else if($x->birthplace < $y->birthplace)
        {
            return -1;
        }
        else{
            return 0;
        } 
    }
}?>