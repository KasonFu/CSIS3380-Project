<?php

class TeamParser {

    //The team tha the Team parser will use


    //This function will parse our cars data to an array
static function parseRoster($fileContents)   {

try{
    //Instantiate a new team
    $team = new Team();
    //create an array out of each line of the file (split by newline character)
    $lines = explode("\n",$fileContents);
        
    //Iterating through each line of the file
        for($i=1;$i<count($lines);$i++)
        {
        //Split the columns up into an array
            $columns = explode(",",$lines[$i]);
            //Check we have the right amount of columns
            if(count($columns) != 9)
            {
                throw new Exception("There is a problem with the file on $i");
            }
            else
            {
             //Trim out the white space
                for($x=0; $x<9; $x++)
                {
                   $columns[$x] = trim($columns[$x]);     
                }
             //Split the name

                //Instantiate a new Player
                $p = new Player($columns[0], 
                    $columns[1],
                    $columns[2], 
                    $columns[3], 
                    $columns[4], 
                    $columns[5], 
                    $columns[6], 
                    $columns[7], 
                    $columns[8]);

                //Add the new player to the team
                $team->addPlayer($p);
            }
        }
                //REturn the team
                return $team;

    }catch(Exception $ex)
    {
        echo $ex->getMessage();
            error_log($ex->getMessage(), 0);
    }
}
 
}

?>