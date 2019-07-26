<?php

//Require
require_once("inc/Utility/LoginManager.class.php");
require_once("inc/config.inc.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");

//Verify the Login
if(LoginManager::verifyLogin()){
        //Initialize the user DAO
        UserDAO::init();
        //Get the current User thats logged in from the session
        $user = UserDAO::getuser($_SESSION["username"]);

        Page::$title = "CSIS 3280 Lab09";
        Page::header();

        Page::showUserDetails($user);
        Page::footer();
}

?>