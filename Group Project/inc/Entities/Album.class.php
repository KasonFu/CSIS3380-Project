<?php
 
class Album  {

    private $albumid;
    private $albumname;
    private $userid;

//Get function
    function getAlbumName() {
        return $this->albumname;
    }

    function getAlbumID() {
        return $this->albumid;
    }
    
    function getUserID()   {
        return $this->userid;
    }

    
//Set function
    function setAlbumName(String $newName)    {
      $this->albumname = $newName;  
    }

    function setAlbumID(String $newCity)   {
        $this->albumid = $newCity;
    }

    function setUserID(int $CustomerID) {
        $this->userid = $CustomerID;
    }


    //This releases the data to the web service
    function jsonSerialize() : stdClass    {

        //Declare our new object
        $obj = new stdClass;
        $obj->userid = $this->getUserID();
        $obj->albumname = $this->getAlbumName();
        $obj->albumid = $this->getAlbumID();


        return $obj;

    }
}




?>