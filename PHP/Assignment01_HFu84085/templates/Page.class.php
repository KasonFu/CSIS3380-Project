<?php
//This Class is to construct our view article page.
class Page
{
    //This function displays the html header
    static function  header()
    {?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

        <head>

            <title>CMS Templates</title>
            <!-- Required meta tags -->
            <meta http-equiv="content-type" content="text/html;charset=utf-8" />
            <meta name="author" content="fatma.hassan@gmail.com" />
            <meta name="description" content="FTM" />

            <!-- Required css file -->
            <link rel="stylesheet" href="templates/touching.css" type="text/css" />
        </head>

    <?php }
    //This function displays the html footer
    static function footer()
    {?>    
            </div><!-- end content -->
                </div><!-- end inner -->
                    </div><!-- end outer -->
                         <div id="footer"><h1>This assignment was submitted by Xinyi Liu(300307421) and Hongkun Fu(300284085)<BR>Design by <a href="http://www.oswd.org/user/profile/id/17916/">Timmytima</a></h1></div>
            </div><!-- end container -->
            </body></html>
            
    <?php }
    //This function displays the navigation pane and article contents with the shortname-$aShortname
    static function navAndCont($aShortname){
        //Get the array of objects, Get the target object
        $navList = ArticleService::getArticles();
        $article = ArticleService::getArticle($aShortname);  

        //Starting with printing the title and summary
        ?>
        <body>    
        <div id="container">
            <div id="banner">
                <div id='bannertitle'><?php echo $article->getTitle(); ?></div>
                <div id ='bannersummary'><?php echo $article->getSummary(); ?></div>
    
            <div id="outer">
                 <div id="inner">
                     <div id="left">
                         <div class="verticalmenu">
                                <ul><?php
                                    //Iterate through the shortnames and titles of objects and print the titles out as nav pane
                                    foreach($navList as $key){
                                        
                                        ?>                                   
                                            <li><a href="?action=<?php echo $key->getShortName(); ?>"> <?php echo $key->getTitle(); ?></a></li><BR>
                                        <?php
                                       
                                
                                    }
                                ?> 
                                </ul>
                        </div> 
                    
                       </div>
                   <div id="content">
                   <?php
                    //Build the Top navi, when user on home page, the navi pane only show a "home" text what can not click
                    if($article->getShortName()=='homepage'){
                        ?>
                        <div id ="shortnamenav">Home</a>
                        <?php
                    }
                    //When user on article page, the navi pane  show a "home" button can return to homepage, and the shortname of current article what can not click
                    else{
                        ?>
                         <div id ="shortnamenav"><a href="?action=homepage">Home</a> . <?php echo $article->getShortName();?></a> 
                                         
                        <?php
                    }
                    //Print out article title content and lastupdate time 
                    ?>
                </div>
                    <h2><?php echo $article->getTitle(); ?></h2>
                    <p><?php echo  $article->getContent(); ?></p>
                    <hr>
                    <p><?php echo  $article->getLastUpdate(); ?></p>
                <?php
    }
}
?>
                