<?php
require_once("inc/config.inc.php");
require_once("inc/Entities/User.class.php");
require_once("inc/Entities/Album.class.php");
require_once("inc/Entities/Post.class.php");
require_once("inc/Utilities/Page.class.php");
require_once("inc/Utilities/PDOAgent.class.php");
require_once("inc/Utilities/UserDAO.class.php");
require_once("inc/Utilities/AlbumDAO.class.php");
require_once("inc/Utilities/PostDAO.class.php");
require_once("inc/Utilities/TrendyPost.class.php");
require_once("inc/Utilities/RestClient.class.php");

//Session start
session_start();

//Check if the form was posted
if (!isset($_SESSION) || !$_SESSION["loggedin"]) {
	session_destroy();
	header("location:The two.php");
	return;
}

//DAO init
AlbumDAO::init();
PostDAO::init();

//Get posts from API
$trendyPost = TrendyPost::GetTrendyPost();


//Check POST and GET
if (isset($_GET["url"])) {
	if(isset($_POST["addbtn"]))
	{
        if(isset($_POST["addradio"]))
        {
            $p = new Post();
            $p->setImageURL($_GET["url"]);
            $p->setAlbumID($_POST["addradio"]);
            $p->setImageType($_GET["type"]);
            PostDAO::createPost($p);
        }
        //Head to main page
        header("location:Main.php");
	}
	else{
		Page::header();
		Page::addimageform(AlbumDAO::getAlbums($_SESSION["userid"]));
		Page::footer();
	}
}
else{
    Page::header();
    Page::createList($trendyPost);
    Page::footer();
}
