<?php

require_once("inc/html.inc.php");

//Show the header
html_header("CSIS 3280 Week3Demo");
//Hello form
html_helloForm();
if (isset($_GET["first"]))  {
    html_greet($_GET["first"]);
}

//Show the footer
html_footer();

?>