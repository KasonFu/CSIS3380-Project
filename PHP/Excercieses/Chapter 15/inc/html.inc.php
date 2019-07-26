<?php

function html_header($title)  { ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-full column" style="margin-top: 5%">
        <h1><?php echo $title; ?></h1>
<?php }

function html_body()    { ?>

        <p>This Excercise demonstrates a basic form post with a date and time selector.</a>.</p>
        <p>Pay attention to the following things:
            <ul>
                <li>html.inc.php is where all of the html and page rendering "view" logic is displayed.</li>
                <li>There is no "business" logic in the ex1.php file.  This is considered a "controller" file. The only logic in this file is how to route the appropriate data and how to behave if the post data is displayed</li>
                <li>$_SERVER["REQUEST_METHOD"] will always tell us if there was data posted via the GET or the POST action. (PUT and DELETE are covered later.)</li>
                <li>Notice the ternary operator used for the default date in the HTML form, we pre-populate with the last data the user inputted so as not to frustrate the user.  Remember, UX is king!</li>
        </p>

<?php }

function html_footer()  { ?>

      <hr>
      <div class="one-full column">This excercise was created with Skeleton: <a class="button button-primary" href="http://getskeleton.com">Try Skeleton</a></div>
      <hr>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

<?php }

function html_dateform()    { 
    
    //Capture the pre-filled in data, if not set the defaults.

    //If there is no date to Parse set, set it to the openning date of DC.
    $dateToParse = (isset($_POST['dateToParse'])) ? $_POST['dateToParse'] : "1970-09-14";
    ?>
    <p>Please select a date to parse:</p>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" METHOD="post">
        <input type="date" value="<?php echo $dateToParse; ?>" name="dateToParse"><BR>
        <input type="submit" value="Process date!" class="button-primary" >
    </form>

<?php }

function html_dateoutput()  { 
  //get the curDate as a timestamp
  $ts = strtotime($_POST['dateToParse']);
  ?>
  <table>
    <thead>
      <tr>
        <td>Date Part</td>
        <td>Number</td>
        <td>Text</td>
      </tr>
    </thead>
    <tr>
      <td>Day</td>
      <td><?php echo date("d", $ts); ?></td>
      <td><?php echo date("l", $ts); ?></td>
    </tr>
    <tr>
      <td>Week</td>
      <td><?php echo date("W", $ts); ?>&nbsp;week in the year.</td>
      <td><?php echo date("w", $ts); ?>&nbsp;day of the week.</td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td>Month</td>
      <td><?php echo date("m", $ts); ?></td>
      <td><?php echo date("F", $ts); ?></td>
    </tr>
    <tr>
      <td>Year</td>
      <td><?php echo date("Y", $ts); ?></td>
      <td>-</td>
    </tr>
  </table>
<?php }

function html_convertForm() { ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Enter or select a date.</h3>
    <table>
      <thead>
        <tr>
          <td>Date</td>
          <td>TimeStamp</td>
        </tr>
      </thead>
      <tr>
          <td><input type="date" name="getTs"></td>
          <td><input type="text" name="getDate"></td>
        </tr>
    </table>
    <input type="submit" value="Convert" class="button-primary" >
  </form>

<?php }

function html_convertResults($dateString, $timeStamp)  { ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <h3>Results</h3>
    <table>
      <thead>
        <tr>
          <td>Date</td>
          <td>TimeStamp</td>
        </tr>
      </thead>
      <tr>
          <td><input type="date" value="<?php echo $dateString; ?>"></td>
          <td><?php echo $timeStamp; ?></td>
        </tr>
    </table>
  </form>

<?php }

?>