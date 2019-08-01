<?php
 
class User  {

    private $userid;
    private $username;
    private $password;
//Get function
    function getUserName(): String {
        return $this->username;
    }

    function getPassword(): String {
        return $this->password;
    }
    
    function getUserID(){
        return $this->userid;
    }
//Set function
    function setusername(String $newName)    {
      $this->username = $newName;  
    }

    function setpassword(String $newCity)   {
        $this->password = $newCity;
    }

    function setuserid(int $CustomerID) {
        $this->userid = $CustomerID;
    }

    //This releases the data to the web service
    function jsonSerialize() : stdClass    {

        //Declare our new object
        $obj = new stdClass;
        $obj->userid = $this->getUserID();
        $obj->username = $this->getUserName();
        $obj->password = $this->getPassword();

        return $obj;

    }

    function verifypassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        if($this->password == $passwordToVerify)
            return TRUE;
        else 
            return FALSE;
    }
}




?>