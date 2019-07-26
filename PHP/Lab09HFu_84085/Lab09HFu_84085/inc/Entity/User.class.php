<?php

class User {

    //Attributes
   private $first_name;
   private $last_name;
   private $username;
   private $email;
   private $phone;
   private $gender;
   private $age;
   private $password;
   private $id;

    //Getters
    function getId() : string {
        return $this->id;
    }
    function getFname() : string {
        return $this->first_name;
    }
    function getLname() : string {
        return $this->last_name;
    }
    function getUsername() : string {
        return $this->username;
    }
    function getEmail() : string {
        return $this->email;
    }
    function getPhone() : string {
        return $this->phone;
    }
    function getGender() : string {
        return $this->gender;
    }
    function getAge() : string {
        return $this->age;
    }
    function getPassword() : string {
        return $this->password;
    }

    //Verify the password
    function verifyPassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        if($this->password == $passwordToVerify)
            return TRUE;
        else 
            return FALSE;
    }
}



?>