<?php

interface IFileService {

    static function read();

    static function write($contents);
}

?>