<?php

//Require utility classes and config
require_once("inc/config.inc.php");
require_once("inc/Page.class.php");
require_once("inc/FileAgent.class.php");
require_once("inc/Menu.class.php");

//Require Pizza and all subclasses
require_once("inc/Entities/Pizza.class.php");
require_once("inc/Entities/Drink.class.php");
require_once("inc/Entities/Pop.class.php");
require_once("inc/Entities/Juice.class.php");
require_once("inc/Entities/Basics.class.php");
require_once("inc/Entities/Chicken.class.php");
require_once("inc/Entities/Veggie.class.php");
require_once("inc/Entities/Meat.class.php");

Page::header("Lab 06 - HFu_84085");


//Declare a new menu
$m = new Menu();
//read the file
$fileContents = FileAgent::read(PIZZA_FILE);
$m->parseMenuData($fileContents);

$m->buildMenu();

Page::printMenu($m);

Page::footer();


?>