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

//Session start
session_start();

//Check POST and GET
if(isset($_POST["logout"]))
{
    //Sesion destroy and head to login page
    session_destroy();
    header("location:The two.php");
    return;
}
  else if($_SESSION["loggedin"])
    {
        if(isset($_POST["back"]))
        {
            header("location:Main.php");
        }
        else
        {
            //DAO init
            UserDAO::init();

            //Get current user
            $username = $_SESSION["username"];
            $user = UserDAO::getUser($username);
            $userID = $user->getUserID();
            AlbumDAO::init();
            $Albums = AlbumDAO::getAlbums($userID);
            Page::header();
            Page::albumpage($Albums);
            if(isset($_POST["albumid"]))
            {
                PostDAO::init();
                Page::showimages($_POST["albumid"]);
            }
            Page::footer();
        }
    }
    else{
        session_destroy();
        header("location:The two.php");
        return;
    }

?>