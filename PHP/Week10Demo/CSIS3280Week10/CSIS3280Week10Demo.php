<?php

require_once("inc/config.inc.php");
require_once("inc/Entities/Customer.class.php");
require_once("inc/Utility/RestClient.class.php");
require_once("inc/Utility/Page.class.php");

//Check if there was get data, perofrm the action
// if (!empty($_GET))    {
//     //Perform the Action
//     if ($_GET["action"] == "delete")  {
//         CustomerMapper::deleteCustomer($_GET["id"]);
//     }

//     //Otherwise it was an edit do something

// }

//Check for post data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Assemble the Customer
        RestClient::call("POST", $_POST);
    
}

//Get all the customers
$jsonString = RestClient::call("GET", array());
$jsonCustomers = json_decode($jsonString);

//Store ;the customsers
$allCustomers = array();

foreach ($jsonCustomers as $jc) {

    $nc = new Customer();
    $nc->setCustomerID($jc->CustomerID);
    $nc->setName($jc->Name);
    $nc->setCity($jc->City);
    $nc->setAddress($jc->Address);

    $allCustomers[] = $nc;
}

Page::$title = "Lab 08_SWh-56789";
Page::header();

// var_dump($jsonCustomers);
Page::listCustomers($allCustomers);

Page::addCustomer();


Page::footer();
