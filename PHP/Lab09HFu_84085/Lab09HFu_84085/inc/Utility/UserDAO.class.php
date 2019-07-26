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

        $sqlQuery = "SELECT * FROM users WHERE username=:username";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        self::$db->bind(":username",$username);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }
    
    static function createUser(User $user)  {

        $sqlInsert = "INSERT INTO customers (first_name, last_name, username,email,phone,gender,age,password)
            VALUES (:first_name, :last_name, :username, :email, :phone, :gender, :age, :password);";
        //Query!
        self::$db->query($sqlInsert);
        //Bind!
        self::$db->bind(':first_name',$user->getFname());
        self::$db->bind(':last_name',$user->getLname());
        self::$db->bind(':username',$user->getUsername());
        self::$db->bind(':email',$user->getEmail());
        self::$db->bind(':phone',$user->getPhone());
        self::$db->bind(':gender',$user->getGender());
        self::$db->bind(':age',$user->getAge());
        self::$db->bind(':password',$user->getPassword());
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->rowCount();

    }

    static function getUsers()  {

        $sqlQuery = "SELECT * FROM users;";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->getResultSet();
    }
    
    
}