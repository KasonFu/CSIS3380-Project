<?php

class FileAgent {
    
        private $content ="";

        static function read($fileName)    {

                try{
                    $fh = fopen($fileName, 'r');
                    $content = fread($fh,filesize($fileName));
                    if(!$fh)
                    {
                        throw new Exception("Could not open file handler");
                    }

                    fclose($fh);
                    return $content;

                }catch(Exception $ex)
                {
                    echo $ex->getMessage();
                }
        }
}

?>