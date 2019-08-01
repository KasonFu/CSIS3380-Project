<?php
 
class Post  {

    private $postid;
    private $imageurl;
    private $imagetype;
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

    function getImageType()  {
        return $this->imagetype;
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

    function setImageType( $CustomerID) {
        $this->imagetype = $CustomerID;
    }

    //This releases the data to the web service
    function jsonSerialize() : stdClass    {

        //Declare our new object
        $obj = new stdClass;
        $obj->postid = $this->getPostID();
        $obj->imageurl = $this->getImageURL();
        $obj->albumid = $this->getAlbumID();
        $obj->imagetype = $this->getImageType();

        return $obj;

    }
}




?>