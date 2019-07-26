<?php

require_once("inc/config.inc.php");

require_once("inc/Entities/Customer.class.php");

require_once("inc/Utility/CustomerMapper.class.php");
require_once("inc/Utility/PDOAgent.class.php");
require_once("inc/Utility/Page.class.php");

//Initialize the Customer Mapper

CustomerMapper::initialize('Customer');

//Check if there was get data, perofrm the action
if (!empty($_GET))    {
    //Perform the Action
    if ($_GET["action"] == "delete")  {
        CustomerMapper::deleteCustomer($_GET["id"]);
    }

    //Otherwise it was an edit do something
    
}

//Check for post data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_POST["submit"]=="Add")
    {
        //Assemble the Customer
        $c = new Customer();
        $c->setAddress($_POST["address"]);
        $c->setName($_POST["name"]);
        $c->setCity($_POST["city"]);

        //Add the data
        CustomerMapper::createCustomer($c);
    }
    else if($_POST["submit"]=="Edit")
    {
        
        $c = new Customer();
        $c->setAddress($_POST["editaddress"]);
        $c->setName($_POST["editname"]);
        $c->setCity($_POST["editcity"]);
        $c->setCustomerId($_POST["editid"]);
        CustomerMapper::updateCustomer($c);
    }
    
}

//Get all the customers
$allCustomers = CustomerMapper::getCustomers();

Page::$title = "Lab 08_SWh-56789";
Page::header();

Page::listCustomers($allCustomers);

Page::addCustomer();

if (!empty($_GET))    {
    //Perform the Action
    if ($_GET["action"] == "edit")  {
        Page::editCustomer($_GET["id"]);
    }
}

Page::footer();
