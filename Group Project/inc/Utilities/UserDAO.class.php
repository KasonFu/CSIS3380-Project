<?php

class UserDAO   {

    //Store the PDO agent here.
    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOAgent("User");
    }

    //Get the user
    static function getUser($username)  {

        $sqlQuery = "SELECT * FROM users WHERE UserName=:UserName";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        self::$db->bind(":UserName",$username);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }

    static function getUserbyID($userID)  {

        $sqlQuery = "SELECT * FROM users WHERE userid=:userid";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        self::$db->bind(":userid",$userID);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }
    
    static function createUser(User $user)  {

        $sqlInsert = "INSERT INTO customers (username, password)
            VALUES (:username, :password);";
        //Query!
        self::$db->query($sqlInsert);
        //Bind!
        self::$db->bind(':username',$user->getUserName());
        self::$db->bind(':password',$user->getPassword());
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->lastInsertId();

    }

    
    
}