<?php

class NameParser    {

    static function parseNames(string $fileName) : array  {
        FileService::setFileName($fileName);
        $contents = FileService::readFile();
        $names = explode("\n",$contents);
        array_shift($names);
        return $names;
    }

}