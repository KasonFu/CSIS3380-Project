<?php

//Reference https://www.elated.com/cms-in-an-afternoon-php-mysql/#step5

//Require the files
require_once("templates/Page.class.php");
require_once("inc/IArticleService.class.php");
require_once("inc/IFileService.class.php");
require_once("inc/IArticle.class.php");
require_once("inc/Article.class.php");
require_once("inc/ArticleService.class.php");
require_once("inc/FileService.class.php");
require_once("inc/config.inc.php");

//If there was an action, write it to $action
if (isset($_GET["action"]))    {
    $action = $_GET["action"];
} else {
    $action = "homepage";
}
//Reading the file;
FileService::read();
//Parsing the file content to an object array
ArticleService::parse(FileService::$contents);

//Run a case statement to see what was requested.
switch($action){
//do the appropriate function for the respective action
    //view the Article
    case $action:
        viewArticle($action);  
    break;
    //Show the homepage
    default:
        homepage();
    break;
}
//View Article Function
function viewArticle($aShortName)  {
    //Render Page header
    Page::header();    
    //See if the articleShortName was passed in
    if(!empty(ArticleService::getArticle($aShortName))){      
        //Render Page navigation pane and contents
        Page::navAndCont($aShortName);      
        //Render Page footer
        Page::footer();
    //Otherwise render the home page
    } else {
        //Otherwise just call the homepage function
        homepage();        
    }
    
}


//This function shows the homepage
function homepage() {
    //Render Page header
    Page::header();
    //Render Page navigation pane and homepage contents
    Page::navAndCont("homepage");
    //Render Page footer
    Page::footer();
}

