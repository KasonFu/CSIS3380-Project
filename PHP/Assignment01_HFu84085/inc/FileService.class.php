<?php
class FileService implements IFileService{

    //Attributes for saving file content
    public static $contents = "";

    //reading the file
    static function read(){
        try{
            //Open a File Handle with the read mode
            $fh = fopen(ARTICLE_FILE,'r');
            //Check if file can not open, then throw exception
            if (!$fh){
                throw new Exception("Could not open file");
            }
            //Read the contents
            self::$contents = fread($fh,filesize(ARTICLE_FILE));
            //Close the file Handle
            fclose($fh);
        //Catch the exception
        }catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }

    //write the contents to the file
    static function write($Contents){
        try {
            //Open the file handle with the write mode
            $fh = fopen(ARTICLE_FILE,'w');
            //Check if the contents are empty, if they are then throw an exception
            if(empty($Contents)){
                throw new Exception("Did not have any contents to write");
            }
            ////Check if file can not open, then throw exception
            if (!$fh){
                throw new Exception("Could not open file");
            }
            //Add a form header for file
            $Contents = "shortname|title|summary|content|lastupdate\n".$Contents;
            //Write the contents to file with File Handle
            fwrite($fh,$Contents);
            //Close the File Handle
            fclose($fh);
        //Catch the exception
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }

    }

}
?>