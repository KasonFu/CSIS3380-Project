<?php

class FileService   {
    
    public static $contents = "";

    static function read($fileName) {

        try {
            $fh = fopen($fileName, 'r');

            if (!$fh)   {
                throw new Exception("We couldnt open the file $fileName.");

            }
            self::$contents = fread($fh, filesize($fileName));
            fclose($fh);
        } catch (Exception $ex) {
            System.out.println($ex->getMessage());
        }

    }
}
