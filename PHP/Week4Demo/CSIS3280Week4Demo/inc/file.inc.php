<?php

function readContents($fileName)    {

    try {

        //Declare a file handle
        $fh = fopen($fileName,'r');

        if (!$fh)   {
            throw new Exception("Could not open $fileName");
        }
        //Read the conents
        $contents = fread($fh,filesize($fileName));

        //close the file handle
        fclose($fh);

        //Return the file contents
        return $contents;
    } catch (Exception $ex) {
        echo $ex->getMessage();
        error_log($ex->getMessage(), 0);
    } 
}

?>