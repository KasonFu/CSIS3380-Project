<?php

//This Class is to construct our html page.
class Page  {

  //We store the title in an attribute
  public $title = "Please set the title";

  //Constructor
  function __construct($newTitle)  {
    $this->title = $newTitle;
}


  //This function displays the html header
  function header()
  {?>
          <!doctype html>
          <html lang="en">
          <head>
              <!-- Required meta tags -->
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

              <!-- Bootstrap CSS -->
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

              <title><?php echo $this->title?></title>
          </head>
          <body>
              <h1><?php echo $this->title?></h1>

  <?php }

  //This function displays the html footer
  function footer()
  {?>

      <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
      </html>
  <?php }


  //This function displays the upload form for the CSV file
  function uploadForm() { ?>

    <p>Please select a file to upload</p>
    <FORM METHOD="POST" ACTION="" ENCTYPE="multipart/form-data">
    <INPUT TYPE="file" NAME="CSVUpload">
    <INPUT TYPE="Submit" VALUE="Upload File">
    </FORM>
    
  <?php }


 //This function shows the roster
    function showRoster($team)  {
      //If the team is empty, display a mesage
      
      if($team->getCount() == 0)
      { echo "There is no data at this time.";}
      
      ?>
      
      <!-- Setup the table roster -->
      <TABLE BORDER=1>
      <TR><TD COLSPAN=10><H1><?php echo $team->teamName; ?></H1></TD></TR>
      <TR>
          <TH><a href="?sortby=No">Player No.</a></TH>
          <TH><a href="?sortby=Name">Name</a></TH>
          <TH><a href="?sortby=Position">Position</a></TH>
          <TH><a href="?sortby=Bats">Bats</a></TH>
          <TH><a href="?sortby=Throw">Throw</a></TH>
          <TH><a href="?sortby=Age">Age</a></TH>
          <TH><a href="?sortby=Height">Height</a></TH>
          <TH><a href="?sortby=Weight">Weight</a></TH>
          <TH><a href="?sortby=BirthPlace">BirthPlace</a></TH>
      </TR>

      <?php 
      //Iterate through the roster and print it out
      foreach($team->players as $player){
        echo '<TR>
          <TD>'.$player->no.'</TD>
          <TD>'.$player->name.'</TD>
          <TD>'.$player->position.'</TD>
          <TD>'.$player->bats.'</TD>
          <TD>'.$player->throw.'</TD>
          <TD>'.$player->age.'</TD>
          <TD>'.$player->height.'</TD>
          <TD>'.$player->weight.'</TD>
          <TD>'.$player->birthplace.'</TD>
          </TR>'."\n";

      }

      ?>
      <!-- End the table roster -->
      </TABLE>
      Total Player Count: <?php echo $team->getCount(); ?>.
      <?php
      }
    


}

?>
