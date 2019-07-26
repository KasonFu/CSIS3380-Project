<?php

//References: https://www.elated.com/cms-in-an-afternoon-php-mysql/#step3

class Article implements IArticle
{
    //Attributes
    public $shortname = "";
    public $title = "";
    public $summary = "";
    public $content = "";
    public $lastupdate = "";

    //shortname getter
    function getShortName(): string
    {
        return $this->shortname;
    }
    //shortname setter
    function setShortName($newShortName)
    {
        $this->shortname = $newShortName;
    }

    //lastupdate time getter
    function getLastUpdate(): string
    {
        return $this->lastupdate;
    }
    //lastupdate time setter
    function setLastUpdate($pdate)
    {
        $this->lastupdate = $pdate;
    }
    //title getter
    function getTitle(): string
    {
        return $this->title;
    }
    //title setter
    function setTitle($title)
    {
        $this->title = $title;
    }
    //summary getter
    function getSummary(): string
    {
        return $this->summary;
    }
    //summary setter
    function setSummary($summary)
    {
        $this->summary = $summary;
    }
    //content getter
    function getContent(): string
    {
        return $this->content;
    }

    //content setter
    function setContent($content)
    {
        $this->content = $content;
    }

 
}

?>