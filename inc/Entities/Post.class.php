<?php
 
class Post  {

    private $postid;
    private $imageurl;
    private $albumid;

    function getAlbumID(): String {
        return $this->albumid;
    }

    function getPostID(): String {
        return $this->postid;
    }
    
    function getImageURL()  {
        return $this->imageurl;
    }

    function setAlbumID($newName)    {
      $this->albumid = $newName;  
    }

    function setPostID( $newCity)   {
        $this->postid = $newCity;
    }

    function setImageURL( $CustomerID) {
        $this->imageurl = $CustomerID;
    }

    //This releases the data to the web service
    function jsonSerialize() : stdClass    {

        //Declare our new object
        $obj = new stdClass;
        $obj->postid = $this->getPostID();
        $obj->imageurl = $this->getImageURL();
        $obj->albumid = $this->getAlbumID();

        return $obj;

    }
}




?>