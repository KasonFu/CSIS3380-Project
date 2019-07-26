<?php

class FileService   {

    private static $fileName;

    //Setter
    public static function setFileName(string $fileName)    {
        self::$fileName = $fileName;
    }

    public static function readFile() : string {

        try {
            $fh = fopen(self::$fileName, 'r');
            $contents = fread($fh, filesize(self::$fileName));

            if (!$fh)    {
                throw new Exception("Problem reading file self::$fileName");
            }
        } catch (Exception $ex)   {

            echo $ex->getMessage();

        } finally {

            fclose($fh);
        
        }

        return $contents;
    } 

}