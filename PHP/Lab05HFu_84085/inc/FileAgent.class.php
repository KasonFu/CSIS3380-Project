<?php

class FileAgent {
    
    //attributes for the file name and the contents
    public static $contents = "";

    //This functio  loads the contents
    static function loadContents($fileName)
    {
        try {
            //Declare a file handle
            $fh = fopen($fileName,'r');
    
            if (!$fh)   {
                throw new Exception("Could not open $fileName");
            }
            //Read the conents
            $content = fread($fh,filesize($fileName));
    
            //close the file handle
            fclose($fh);
    
            //Return the file contents
            return $content;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            error_log($ex->getMessage(), 0);
        } 
    }
    //This function saves the file
    static function write($content)
    {
        $fh=fopen("New.csv",'w');
        fwrite($fh,$content);
        fclose($fh);
    }
}

    
?>