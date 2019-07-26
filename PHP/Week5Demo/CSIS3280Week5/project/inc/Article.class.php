<?php

class Article {
    public $title = "";
    public $content = "";
    public $publishDate = "";

    function __construct()  {
        $this->publishDate = date('D, d M Y H:i:s');
    }

}

?>