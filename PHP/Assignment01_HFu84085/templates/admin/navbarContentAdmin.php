
<body>
     
     <div id="container">
         <div id="banner">
            <div id='bannertitle'>Admin-Articles</div>
            <div id ='bannersummary'><?php echo "Page for editing articles" ?></div>

         </div>
 
         <div id="outer">
              <div id="inner">
                  <div id="left">
                      <div class="verticalmenu">
                             <ul>                                 
                                 <li><a href="?action=listarticle">List Articles</a></li>
                                 <li><a href="?action=newarticle">New Article</a></li>
                             
                                
                             </ul>
                     </div> 
 
                    </div>
                <div id="content">
             
             
             <?php
 //show list of articles in the page, do not show the list in edit page.
 if(($switchKey == "listarticle")&&(!isset($_GET["Edit"])))
 {
     //Details of articles show in a table
     ?>
     <h2>Admin Page</h2>
     
     <TABLE BORDER=0>
     <TR class="list">
     <TD style="width: 25%">Article Shortname</TD>
     <TD style="width: 50%">Title</TD>
     <TD style="width: 12.5%">Edit</TD>
     <TD style="width: 12.5%">Delete</TD>
     </TR>
     <?php
         //Loop articles to show their shortname and title
         foreach((ArticleService::getArticles()) as $key){
            
             ?>
                 <TR class="link">
                 <TD style="width: 25%"><?php echo $key->getShortName()?></TD>
                 <TD style="width: 50%"><?php echo $key->getTitle()?></TD>
                 <?php
                 //If this row is homepage, not provide any click buttons
                 if($key->getShortName()=="homepage"){
                     ?>
                     <TD style="width: 12.5%">Edit</TD>
                     <TD style="width: 12.5%">Delete</TD>
                    <?php
                 //Click button to edit or delete article
                 }else{
                     ?>
                    <TD style="width: 12.5%"><a href="?Edit=<?php echo $key->getShortName()?>">Edit</a></TD>
                    <TD style="width: 12.5%"><a href="?Delete=<?php echo $key->getShortName()?>">Delete</a></TD>
                    <?php
                 }
                 ?>
                 </TR>
             <?php
             
        }
    ?>
    </TABLE>
 <?php
 //If user clicks NewArticle, create a form to recieve new article's information.
 }else if($switchKey == "newarticle")
 {?>
     <h2>New Article</h2>
     <FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
     <h3>Short Name: <textarea Name = "shname"rows=1 cols=70> </textarea></h3>
     <h3>Title: <textarea Name = "title"rows=1 cols=70> </textarea></h3>
 
     <h3>Summary: <textarea Name = "summary"rows=2 cols=70></textarea></h3>
     <h3>Content: <textarea Name = "content"rows=10 cols=70></textarea></h3>
     <h2><input type="submit" value ="New Article"></h2>
     </form>
 <?php 
 
 }
//After user inputs new article's information, create new article, insert to the object array. 
 if(isset($_POST["shname"])){
     $ar = new Article();
     $ar->setShortName(str_replace(array("\n", "\r"), ' ', $_POST["shname"]));
     $ar->setTitle(str_replace(array("\n", "\r"), ' ', $_POST["title"]));
     $ar->setSummary(str_replace(array("\n", "\r"), ' ', $_POST["summary"]));
     $ar->setContent(str_replace(array("\n", "\r"), ' ', $_POST["content"]));
     $ar->setLastUpdate(date("d/m/Y"));
     //Insert new article into array
     ArticleService::insertArticle($ar);
     //Refresh page to load new list 
     header("location:admin.php");
 }
 
//If user clicks article's edit, create a form to show article's current information.
 //Allow user to edit article's information.
 if (isset($_GET["Edit"])) {
     //Get article's shortname
     $edit = $_GET["Edit"];
     //Match article by shortname in article array
     $a = ArticleService::getArticle($edit);
     ?>
 
     <h2>Editing Article: <?php echo $edit;?></h2>
     <FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
     <h3>Short Name: <textarea Name = "sname"rows=1 cols=70> <?php echo $a->getShortName();?></textarea></h3>
     <h3>Title: <textarea Name = "title"rows=1 cols=70> <?php echo $a->getTitle();?></textarea></h3>
     <h3>Summary: <textarea Name = "summary"rows=2 cols=70><?php echo $a->getSummary();?></textarea></h3>
     <h3>Content: <textarea Name = "content"rows=10 cols=70><?php echo $a->getContent();?></textarea></h3>
     <h3><input Type = "Hidden", name = "objectLocation" value = <?php echo ArticleService::$x;?>></h3>
     <h2><input type="submit" value="Edit Article"></h2>
     </form>
 
 <?php 
 //If user clicks article's delete
 } else if(isset($_GET["Delete"])){
     //Get article's shortname
     $delete = $_GET["Delete"];
     //Delete article from article array
     ArticleService::deleteArticle($delete); 
     //Refresh page to load new list 
     header("location:admin.php");
 }
 //Recieve updated article's information after user edit. 
 if(isset($_POST["objectLocation"]))//&&isset($_GET["title"])&&isset($_GET["summary"])&&isset($_GET["content"]))
 {
     //Load updated article information into a new article object
     $newarticle = new Article();
     $newarticle->shortname = str_replace(array("\n", "\r"), ' ',$_POST["sname"]);
     $newarticle->title = str_replace(array("\n", "\r"), ' ',$_POST["title"]);
     $newarticle->summary = str_replace(array("\n", "\r"), ' ',$_POST["summary"]);
     $newarticle->content = str_replace(array("\n", "\r"), ' ',$_POST["content"]);
     $newarticle->lastupdate = "Last Updated: ".date("D,d M Y H:i:s");
     //Value of "objectLocation" is the index of the target object in array
     $index = (int)$_POST["objectLocation"];
     //Set staic variable TempArticle in ArticleService
     ArticleService::getArticle(ArticleService::$filecontents[$index]->getshortName());
     //Update article array with newarticle
     ArticleService::updateArticle($newarticle);
     //Refresh page to load new list
     header("location:admin.php");
 }
 