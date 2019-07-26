<?php

require_once("inc/config.inc.php");
require_once("inc/Utility/Page.class.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/CustomerDAO.class.php");

//Initialize Office DAO
CustomerDAO::init();


if(isset($_GET["Name"]))
{
    $newcustomer = new Customer();
    $newcustomer->setName($_GET["Name"]);
    $newcustomer->setAddress($_GET["Address"]);
    $newcustomer->setCity($_GET["City"]);
    CustomerDAO::createCustomer($newcustomer);
}

//Read all Offices
$customers = CustomerDAO::getCustomers();


if(isset($_GET["delete"]))
{
    echo $_GET["delete"];
    $customers = CustomerDAO::deleteCustomer($_GET["delete"]);
}
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


Page::$title = "CSIS 3280 Lab08";
Page::header();

// foreach ($offices as $office)   {
//     echo $office->getPhone()."<BR>";
// }

Page::listCustomer($customers);
Page::AddForm();

Page::footer();
