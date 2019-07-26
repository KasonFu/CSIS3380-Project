
<?php

require_once("inc/config.inc.php");
require_once("inc/html.inc.php");

html_header("Date Demo");
 $timestamp = time();
 echo "The time is $timestamp <BR>";
 echo "The date in RSS format is: " . date('D, d M Y H:i:s',$timestamp). "<br/>";
 echo "Today is " . date("Y/m/d") . "</br>";
 echo "Today is " . date("l");

html_dateTimeForm();
if (isset($_POST["time"]))  {
    echo $_POST["time"];
    html_showDate($_POST["time"]);
}

html_footer();

?>