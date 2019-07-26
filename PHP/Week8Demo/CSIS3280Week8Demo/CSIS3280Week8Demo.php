<?php

require_once("inc/config.inc.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Entities/Office.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/OfficeDAO.class.php");

//Initialize Office DAO
OfficeDAO::init();

//Read all Offices
$offices = OfficeDAO::getOffices();

// //Create new Office Object
// $newOffice = new Office();
// $newOffice->setOfficeCode(99);
// $newOffice->setCity("Vancouver");
// $newOffice->setPhone('604-555-1234');
// $newOffice->setAddressLine1("66 Royal Avenue");
// $newOffice->setAddressLine2("");
// $newOffice->setCountry("Canada");
// $newOffice->setPostalCode("V3T 2M6");
// $newOffice->setTerritory("British");



// OfficeDAO::createOffice($newOffice);


Page::$title = "CSIS 3280 Week 8 Demo";
Page::header();

// foreach ($offices as $office)   {
//     echo $office->getPhone()."<BR>";
// }

Page::listOffices($offices);



Page::footer();
