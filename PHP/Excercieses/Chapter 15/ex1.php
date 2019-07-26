<?php

//Reference: http://getskeleton.com/

//Include the required files
require 'inc/html.inc.php';


//set the html page
html_header("Excercise 1 - Date and Time Information");

//If there was POST data process it
if ($_SERVER["REQUEST_METHOD"] == "POST")   {
    //Show the date info form
    //html_showDateInfo();
    var_dump($_POST);
    html_dateform();
    html_dateoutput();
    
} else {
    //Show the body of the html doc
    html_body();
//Show the date Form
html_dateform();

}

html_footer();

?>