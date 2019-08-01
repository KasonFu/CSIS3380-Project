<?php

class AlbumDAO   {

    //Store the PDO agent here.
    private static $db;

    static function init()  {
        //Initialize the internal PDO Agent
        self::$db = new PDOAgent("Album");
    }


    static function getAlbum($albumid)  {

        $sqlQuery = "SELECT * FROM album WHERE albumid = :albumid";
        //Query!
        self::$db->query($sqlQuery);
        self::$db->bind(':albumid',$albumid);
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->singleResult();
    }

    static function getAlbums($userid)  {

        $sqlQuery = "SELECT * FROM album where userid = $userid;";
        //Query!
        self::$db->query($sqlQuery);
        //Bind!
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        return self::$db->resultSet();
    }
    
    static function createAlbum(Album $a)  {

        $sqlInsert = "INSERT INTO album (albumname, userid)
            VALUES (:albumname, :userid);";
        //Query!
        self::$db->query($sqlInsert);
        //Bind!
        self::$db->bind(':albumname',$a->getAlbumName());
        self::$db->bind(':userid',$a->getUserID());
        //Execute!
        self::$db->execute();
        //Return the reuslts!
        
        return  self::$db->lastInsertId();

    }

    static function deleteAlbum(int $id): bool {

        try {

            //Create the delete query
            $deleteQuery = "DELETE FROM album WHERE albumid = :albumid";
            self::$db->query($deleteQuery);
            //Bind the id
            self::$db->bind(':albumid', $id);
            //Execute the query
            self::$db->execute();

            if (self::$db->rowCount() != 1) {
                throw new Exception("There was an error deleting customer $id");
            } 
        
        } catch (Exception $ex) {

            echo $ex->getMessage();
            self::$db->debugDumpParams();
            return false;
        
        }
        return true;
    }



    static function updateAlbum(Album $a): int   {
        try {
            //Create the query
            $updateQuery = "UPDATE album SET albumname = :albumname, userid = :userid WHERE albumid = :albumid;";

            self::$db->query($updateQuery);

            $data = [
                ':albumname' => $a->getAlbumName(),
                ':userid' => $a->getUserID(),
                ':albumid' => $a->getAlbumID()
            ];
            
            //Execute the query
            self::$db->execute($data);

            //Check the appropriate updates
            if (self::$db->rowCount() !=1)    {
                throw new Exception("There was an error updating the database!");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            self::$db->debugDumpParams();
        }    

        //Get the number of affected rows
        return self::$db->rowCount();
    }


}