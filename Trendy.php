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

session_start();
AlbumDAO::init();
PostDAO::init();
$trendyPost = TrendyPost::GetTrendyPost();

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
