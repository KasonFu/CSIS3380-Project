<?php

require_once("inc/html.inc.php");
require_once("inc/food.inc.php");
require_once("inc/file.inc.php");

if (isset($_FILES['CSVUpload'])) {
    $data = readContents($_FILES['CSVUpload']['tmp_name']);
    $foodData = parseFoodfile($data);

}

html_header("CSIS3280 Week4 Demo");

html_UploadForm();

 if(isset($foodData))   {
    html_table($foodData);
 }


html_footer();

?>