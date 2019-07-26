<?php

require_once("inc/Page.class.php");

require_once("inc/Shoe.class.php");
require_once("inc/IShoeRack.class.php");
require_once("inc/ShoeRack.class.php");
require_once("inc/ShoeParser.class.php");

require_once("inc/FileService.class.php");


//Read the file
$contents = FileService::read("data/shoes.csv");

//Parse the Shoes
ShoeParser::parse(FileService::$contents);

//Declare Shoe Rack
$sr = new ShoeRack();

//Transfer the Shoes into the Shoe Rack
$sr->shoes = ShoeParser::$shoes;

//Sort the Shoes by Material
$sr->sortByMaterial();

$p = new Page("CSIS 3280 Week 5 Demo");
$p->title = "We renamed the title";

$p->header();

// $s = new Shoe();
// $s->laceUp();
// var_dump($s);
// $s->unLace();
// var_dump($s);

// var_dump(ShoeParser::$shoes);
$p->displayShoes($sr);
$p->footer();

?>