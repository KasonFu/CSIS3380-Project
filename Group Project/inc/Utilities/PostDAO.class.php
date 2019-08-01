<?php

class PostDAO   {

    //Store the PDO agent here.
    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOAgent("Post");
    }


    static function getPost($postid)  {

        $sqlQuery = "SELECT * FROM post WHERE postid = :postid";
        //Query!
        self::$db->query($sqlQuery);
        self::$db->bind(':postid',$postid);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }

    static function getPosts($albumid)  {

        $sqlQuery = "SELECT * FROM post where albumid = $albumid;";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->resultSet();
    }
    
    static function createPost(Post $p)  {

        $sqlInsert = "INSERT INTO post (imagetype,imageurl, albumid)
            VALUES (:imagetype, :imageurl, :albumid);";
        //Query!
        self::$db->query($sqlInsert);
        //Bind
        self::$db->bind(':imagetype',$p->getImageType());
        self::$db->bind(':imageurl',$p->getImageURL());
        self::$db->bind(':albumid',$p->getAlbumID());
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->lastInsertId();

    }

    
    
}