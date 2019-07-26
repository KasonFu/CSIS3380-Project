<?php
//Require the files
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
    $action = "listarticle";
}
//Reading the file;
FileService::read();
//Parsing the file content to an object array
ArticleService::parse(FileService::$contents);


$switchKey = '';
//Run a case statement to see what was requested.
switch($action){
    //do the appropriate function for the respective action
        case $action:
            //view the list page or new article base on action;
            $switchKey = $action;
        break;
        //Show the list page
        default:
            $switchKey = "listarticle";
        break;
    }

include TEMPLATE_PATH.'admin/editAdmin.php';


?>