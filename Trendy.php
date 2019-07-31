<?php

require_once("inc/config.inc.php");
require_once("inc/Utilities/TrendyPost.class.php");
require_once("inc/Utilities/RestClient.class.php");
require_once("inc/Utilities/Page.class.php");

$trendyPost = TrendyPost::GetTrendyPost();
// var_dump($trendyPost);

Page::header();
Page::createList($trendyPost);

Page::footer();