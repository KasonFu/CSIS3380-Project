<?php

class ArticleService implements IArticleService{

    //Attributes
    //Saving the Article objects in a array
    public static $filecontents = array();
    //Temporary attribute , tranfer the object from getArticle() to updateArticle()
    private static $TempArticle;
    //an index for markint the target object in array
    public static $x = 0;

    //Insert new Article object at end of array
    static function insertArticle(Article $newArticle): bool
    {

        if(isset($newArticle)){
            self::$filecontents[] = $newArticle;
            
            //Saving the change to file
            return self::writeArticles();
        }
        else{
            return false;
        }

    }


    static function getArticle(string $aShortName): Article
    {
        //Check the first Article object is null or not
        if((self::$filecontents[0])!=NULL){
            //looping the array to find the Object with $aShortName
            for($i=0; $i<count(self::$filecontents); $i++)
            {
                if(self::$filecontents[$i]->getShortName() == trim($aShortName))
                {
                    //save the index
                    self::$x = $i;
                }
                
            }
            //Set $TempArticle and the target Object in array to be references, later using in function updateArticle()
            self::$TempArticle = &self::$filecontents[self::$x];
            //return the target Object;
            return self::$filecontents[self::$x];
        }
        //This function require a return type "Article". If the first object is null, return a Article object with empty attributes.
        else{
            $empt = new Article();
            $empt->setShortName('');
            $empt->setTitle('');
            $empt->setSummary('');
            $empt->setContent('');
            $empt->setLastupdate('');
            return $empt;
        }

    }

    //Return the full array of objects
    static function getArticles(): array
    {
        return self::$filecontents;
    }
    
    //Delete the Object with the $shortName in array
    static function deleteArticle(string $shortName): bool
    {
        //looping the array to find the Object with $shortName
        for($i=0; $i<count(self::$filecontents); $i++)
        {
            if(trim(self::$filecontents[$i]->getShortName()) == trim($shortName))
            {
                //Remove the target object in the array with index i 
                array_splice(self::$filecontents, $i, 1);
                //Saving the change to file
                return self::writeArticles();
            }
        }
        return false;
    }

    //Update the current loaded object
    static function updateArticle(Article $updatedArticle): bool
    {
        if(!empty($updatedArticle)){
            //$TempArticle and current loaded object are references, updating the attributes of $TempArticle means that the current loaded object has been updated                     
            self::$TempArticle->setShortName($updatedArticle->getShortName());
            self::$TempArticle->setTitle($updatedArticle->getTitle());
            self::$TempArticle->setSummary($updatedArticle->getSummary());
            self::$TempArticle->setContent($updatedArticle->getContent());
            self::$TempArticle->setLastUpdate($updatedArticle->getLastUpdate());
            //Saving the change to file
            return self::writeArticles();
        }
        else{
            return false;
        }
    }
    //Convert the array to string then send it to Fileservice
    static function writeArticles(): bool
    {
        $output = "";
        //Itereate through the array to creat the new article.psv file as string first.
        foreach(self::$filecontents as $key){
            $output .= $key->getShortName()."|";
            $output .= $key->getTitle()."|";
            $output .= $key->getSummary()."|";
            $output .= $key->getContent()."|";
            $output .= $key->getLastupdate()."\n";
        }

        //Write out the file;
        FileService::write($output);
        return true;
    }

    //Parsing $contents to the $filecontents array
    static function parse($contents){
        try{
            //Parse the lines
            $lines = explode("\n",$contents);
            //Check the contents are more than a form header;
            if(count($lines)>1){
                //Parse the individual line and remove the form header
                for ($x = 1; $x < count($lines); $x++){
                    //Ending the parsing when reaching a empty line;
                    if($lines[$x]==''){
                        break;
                    }
                    //Parse the elements
                    $columns = explode("|", $lines[$x]);
                    //Check it has the right count = 5;
                    if (count($columns) != 5)  {
                        throw new Exception("Problem parsing file on index: ".($x+1) ."<BR>");
                    }
                    //Declare a new object, seting the elements into the object
                    else{
                        $a = new Article();
                        $a->setShortName(trim($columns[0]));
                        $a->setTitle(trim($columns[1]));
                        $a->setSummary(trim($columns[2]));
                        $a->setContent(trim($columns[3]));
                        $a->setLastupdate(trim($columns[4]));
                        //Insert the object at end of array
                        self::$filecontents[] = $a;
                    }
                }
            }
        //Catch the exception
        }catch (Exception $ex) {           
            echo $ex->getMessage();
        }
    }
}