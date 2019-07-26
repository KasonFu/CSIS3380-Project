<?php

//Keep the total number of points
$totalPoints = 0;

//Keep the total score
$totalScore = 0;

//Keep the total number of missed points
$totalmiss = 0;

//Keep a variable for the report output
$report = "";
//Go into a loop until the user exits

while (true)    {
    //Prompt the user
    echo "Please enter your command in the form of (a, r, q)";
    //Read in the command
    $choice = stream_get_line(STDIN,1024,PHP_EOL);
    //If the command is ....
    switch($choice){

        case "q":
        //If quit then quit.
            echo "ByeBye";
            exit();
        break;
       
        case "a":
        //Prompt the user for assessment details
        echo "Please enter the name of the assessment:";
        $name = stream_get_line(STDIN,1024,PHP_EOL);
            //Enter the name of the assessment       
        echo "Please enter the number of points for the assessment:";
        $assessmentPoints = stream_get_line(STDIN,1024,PHP_EOL);
            //Enter the number of points for the assessment
            //Check if the user was absent, keep asking until the user enters a y or a n.
        $sentinel = false;
        $absent = "";
            //Another while loop
            while ($sentinel == false) {
                echo "Was the student absent? (y/n)";
                //Was the user absent?
                $absent = stream_get_line(STDIN,1024,PHP_EOL);
                if($absent == "y" || "n")
                    $sentinel = true;
                //If the user entered a y or a n then exit
            }
            //If the student was absent
            if ($absent == "y")    {
                
                //Write a message to the console
                echo "The student has been maked absent for this assignment.";
                //add the missed points to the total
                $totalmiss += $assessmentPoints;
                //SEt the score to zero
                $assessmentScore = 0;
            
            } else {

                echo "Please enter the student's score for the assessment: ";
                $assessmentScore = stream_get_line(STDIN,1024,PHP_EOL);

            }

            //Update the totals (Points and Score)
            $totalPoints += $assessmentPoints;
            $totalScore += $assessmentScore;

            //Start the Report we have all the data we need
            //print seperator
            $report .= sprintf("%'-80s\n",'');
            //Append the assignment name
            $report .= "Assignment: " . sprintf("%46s","") . $name . "\n";
            //Append the Total Points
            $report .= "Total Points: " . sprintf("%44s","") . $assessmentPoints . "\n"; 
            //Append the Total Score
            $report .= "Toal Score: " . sprintf("%46s","") . $assessmentScore. "\n";
            //Append the Missed
            $report .= "Missed: " . sprintf("%50s","") . $absent. "\n";
            //Append seperator
            $report .= sprintf("%'-80s\n",'');
         
        break;

        case "r":
        //If print the report.
        

             //Compile the final Report
           
             //Calculated the weighted average
            $average = $totalScore / $totalPoints;
             //Calculate the missed percentage
            $miss = $totalmiss / $totalPoints;
             //Whas it a UN?
            if($miss > 0.3)
                $outcome = "UN";
                //if not
                else{
                     if($average >=0.5)
                    //PASS
                        $outcome = "PASS";
                        else 
                            $outcome = "FAIL";}
                    //FAIL
               
            //Print seperator
            $finalReport = sprintf("%'-80s\n",'');
            
            $finalReport .= sprintf("%40s","FINAL REPORT")."\n";
            //Print the weighted average
            $finalReport .= "Weighted Average: " . sprintf("%40s","") . sprintf("%.2f",$average)*100 . "%\n";
            //Print the missed percentage
            $finalReport .= "Missed Percentage: " . sprintf("%39s","") . sprintf("%.2f",$miss)*100 . "%\n";
            //Print outcome final outcome
            $finalReport .= "Outcome: " . sprintf("%49s","") . $outcome . "\n";
            //Print seperator
            $finalReport .= sprintf("%'-80s\n",'');
            
             echo $report;
             echo $finalReport;

        break;

            //Hit the default? Cant recognize the command?
        default:
             echo "Please enter a valid command\n";
        break;
    
    }

}

?>