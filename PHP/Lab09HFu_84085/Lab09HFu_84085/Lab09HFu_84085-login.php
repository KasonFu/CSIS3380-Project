<?php
//Require Files
require_once("inc/config.inc.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Entity/User.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/UserDAO.class.php");


$username = $password = "";
$username_err = $password_err = "";

//Check if the form was posted
if(!empty($_POST)){
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username";
        }
            else if(empty(trim($_POST["password"])))
            {
                $password_err = "Please enter password";
            }
                else 
                {
                    $username = trim($_POST["username"]);
                    $password = trim($_POST["password"]);
                }

                if(empty($username_err)&&empty($password_err))
                {
                    //Initialize the DAO
                    UserDAO::init();
                    //Get the current user 
                    $authUser = UserDAO::getuser($username);
                    //Check the DAO returned an object of type user
                        //Check the password
                        if ($authUser->verifyPassword($password))  {
                
                            //Start the session
                            session_start();
                            
                            //Set the user to logged in
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;
                
                            //Send the user to the user managment page Lab09SHi_56789-updateaccount.php
                            header("location:Lab09HFu_84085-updateaccount.php");
                        }
                        else 
                        {
                            echo "Please enter correct Username/Password.";
                        }
                }
                else 
                {
                    echo $username_err;
                    echo $password_err;
                }
                
}



//Set the age Title
Page::$title = "CSIS 3280 Lab09";
Page::header();
Page::showLogin();
Page::footer();


?>