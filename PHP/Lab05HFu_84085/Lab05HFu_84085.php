<?php
/*
 * This lab should have the following requirements:
 * POPO - Plain Old PHP Objects (Player Object).
 * File Agent - Utility Class for file operations.
 * Error Handling class - A custom error handline class.
 * HTML form to upload the CSV file. (via the page class)
 */


 //Require files
require_once("inc/config.inc.php");
require_once("inc/Page.class.php");
require_once("inc/Player.class.php");
require_once("inc/Team.class.php");
require_once("inc/FileAgent.class.php");
require_once("inc/TeamParser.class.php");
//Instantiate a new Team
$team = new Team();
//Instantiate a new Team Parser
$teamparser = new TeamParser();
//Instantiate a new FileAgent
$fileagent = new FileAgent();

//Render the page
$page = new Page("Lab05");
//Display the Page headder
$page->header();
//Show the upload form
$page->uploadForm();

//$contents = $fileagent::loadContents(DATA_FILE);

//$team = $teamparser::parseRoster($contents);

//var_dump($team);

//Check if the file was uploaded, if it was save it.
if (!empty($_FILES)) {

    //Load the file
    $contents = $fileagent::loadContents($_FILES['CSVUpload']['tmp_name']);
    FileAgent::write($contents);
    //Save the file
    //$team = $teamparser::parseRoster($contents);
}

$content = $fileagent::loadContents("New.csv");

$team = $teamparser::parseRoster($content);


if(isset($_GET["sortby"]))
{
    
    switch($_GET["sortby"])
    {
        case "No":
        $team->sortBy("no");
        break;
        case "Name":
        $team->sortBy("name");
        break;
        case "Postion":
        $team->sortBy("position");
        break;
        case "Bats":
        $team->sortBy("bats");
        break;
        case "Age":
        $team->sortBy("age");
        break;
        case "Throw":
        $team->sortBy("throw");
        break;
        case "Height":
        $team->sortBy("height");
        break;
        case "Weight":
        $team->sortBy("weight");
        break;
        case "BirthPlace":
        $team->sortBy("birthplace");
        break;
        default:
        break;
    }
    $content = "";
    for($i=0;$i<count($team->players)-1;$i++)
    {   
        $content .= $team->players[$i]->no.",";
        $content .= $team->players[$i]->name.",";
        $content .= $team->players[$i]->position.",";
        $content .= $team->players[$i]->bats.",";
        $content .= $team->players[$i]->throw.",";
        $content .= $team->players[$i]->age.",";
        $content .= $team->players[$i]->height.",";
        $content .= $team->players[$i]->weight.",";
        $content .=$team->players[$i]->birthplace;
        $content.="\n";
    }
        $content .= $team->players[count($team->players)-1]->no.",";
        $content .=  $team->players[count($team->players)-1]->name.",";
        $content .=  $team->players[count($team->players)-1]->position.",";
        $content .=  $team->players[count($team->players)-1]->bats.",";
        $content .=  $team->players[count($team->players)-1]->throw.",";
        $content .=  $team->players[count($team->players)-1]->age.",";
        $content .=  $team->players[count($team->players)-1]->height.",";
        $content .=  $team->players[count($team->players)-1]->weight.",";
        $content .=  $team->players[count($team->players)-1]->birthplace;

    FileAgent::write($content);
}
/*
//Load the current file
if (file_exists(DATA_FILE))   {
    
    //Load the file
    //$data = FileAgent::loadContents($_FILES['CSVUpload']['tmp_name']);
    //Parse the roster
    $team = TeamParser::parseRoster(FileAgent::loadContents($_FILES['CSVUpload']['tmp_name']));
    //Sort the team
    //$team->sortBy("firstname");
//There was no team file...
} else {
    //Initialize an empty team.
    $t = array();
}

//HAndle the sorting requested look for the $_GET parameter (I used $_GET["sortBy"])

if (isset($_GET["sortBy"])) {

    $team->sortBy($_GET["sortBy"]);

}*/



//Show the roster
$page->showRoster($team);
//Display the page footer
$page->footer();
?>
