<?php

require_once("inc/config.inc.php");
require_once("inc/Article.class.php");


//Get the action
if (isset($_GET["action"]))    {
    $action = $_GET["action"];
} else {
    $action = "show";
}


if (isset($_GET["pagename"]))   {
    $pagename = $_GET["pagename"];
} else {
    $pagename = "homepage";
}


if ($pagename == "homepage")   {

    $a = new Article();
    $a->title = "Home Page";
    $a->content = "This  is Home Page Content";

    include TEMPLATE_PATH.'/showArticle.php';

} else {
    
    //Really you should get the page name based on the $pagename from your Article class using the getArticle() function

    $a = new Article();
    $a->title = "About Us";
    $a->content = "<p>Founded in 1970, Douglas College is the largest degree-granting college in British Columbia, Canada, educating close to 25,000 students per year. The College has two major campuses in Metro Vancouver (New Westminster and Coquitlam) as well as several smaller training centres in Surrey, Burnaby and Maple Ridge. With both main campuses directly on SkyTrain lines, Douglas is one of the most accessible post-secondary institutions in Metro Vancouver, drawing students from across the region.</p> 
    
    <p>Douglas offers the most bachelor’s degrees and post-degree programs of any college in B.C., and is noted for combining the academic foundations of a university with the career-ready skills of a college. Each year, close to 17,000 students (including 4,210 international students from over 92 countries) take for-credit courses at Douglas. Because of the college’s strong academic base, the majority of these for-credit courses transfer to different research universities in B.C. and across Canada, providing students with flexible pathways to reach their academic goals.</p>";

    include TEMPLATE_PATH.'/showArticle.php';

}           