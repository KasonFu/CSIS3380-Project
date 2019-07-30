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


session_start();

if(isset($_POST["logout"]))
{
    session_destroy();
    header("location:Login.php");
}
  else if(isset($_SESSION)&&$_SESSION["loggedin"])
  {
        AlbumDAO::init();
        UserDAO::init();
        $userid = UserDAO::getUser($_SESSION["username"])->getUserID();
        if(isset($_POST["addbtn"]))
        {

        }

        if(isset($_POST["createbtn"]))
        {
            if(!empty($_POST["newalbumname"]))
            {
                $newalbum = New Album();
                $newalbum->setAlbumName($_POST["newalbumname"]);
                $newalbum->setUserID($userid);
                var_dump($newalbum);
                AlbumDAO::createAlbum($newalbum);
            }
        }

        if(isset($_POST["deletebtn"]))
        {
            if(isset($_POST["deleteradio"]))
            {
                AlbumDAO::deleteAlbum($_POST["deleteradio"]);
                
            }
        }

        if(isset($_POST["updatebtn"]))
        {
            if(isset($_POST["editradio"])&&isset($_POST["newname"]))
            {
                $albumname = $_POST["newname"];
                $a = New Album();
                $a->setAlbumName($albumname);
                $a->setUserID($userid);
                $a->setAlbumID($_POST["editradio"]);
                AlbumDAO::updateAlbum($a);
            }
        }

        if(isset($_POST["showAlbum"]))
            {
                header("location:Album.php");
            }
            else
            {
                Page::header();
                Page::mainpage();
                $albums = AlbumDAO::getAlbums($userid);
                if(isset($_POST["addtoAlbum"]))
                {
                    Page::addimageform($albums);
                }
                if(isset($_POST["createAlbum"]))
                {
                    Page::createalbum();
                }
                if(isset($_POST["deleteAlbum"]))
                {
                    Page::deletealbum($albums);
                }
                if(isset($_POST["updateAlbum"]))
                {
                    Page::updatealbum($albums);
                }
                Page::footer();
            }
    }
    else{
        session_destroy();
        header("location:Login.php");
    }
        

?>