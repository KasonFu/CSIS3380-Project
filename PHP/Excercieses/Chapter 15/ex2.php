<?php
require 'inc/html.inc.php';
require 'inc/date.inc.php';

html_header("Exercise 2 - datestamp converter.");
if ($_SERVER['REQUEST_METHOD'] == "POST")    {
    if (!empty($_POST['getTs']))    {
        
        $timeStamp = get_ts($_POST['getTs']);
        $dateString = $_POST['getTs'];

    } else if (!empty($_POST['getDate']))   {
        
        $timeStamp = $_POST['getDate'];
        $dateString = get_ds($_POST['getDate']);

    }
    html_convertResults($dateString, $timeStamp);
} else {
    html_convertForm();
}
html_footer();

?>