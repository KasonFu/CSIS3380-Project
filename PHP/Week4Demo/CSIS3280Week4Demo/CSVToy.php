<?php

require_once("inc/html.inc.php");
require_once("inc/food.inc.php");
require_once("inc/file.inc.php");



$data = readContents("data/data.csv");
$pinkponies = parseContents($data);

html_header("CSIS3280 Week4 Demo");



html_table($pinkponies);


html_footer();

?>