<?php

//Require Files
require_once('inc/config.inc.php');
require_once('inc/Entities/Customer.class.php');
require_once('inc/Utility/PDOAgent.class.php');
require_once('inc/Utility/CustomerDAO.class.php');

CustomerDAO::initialize();

parse_str(file_get_contents('php://input'), $requestData);

switch ($_SERVER['REQUEST_METHOD']) {
    case "GET":
    //Get all the things
    $customers = CustomerDAO::getCustomers();
    //This is to store our std Objects for conversion to json
    $jsonCustomers = array();

    foreach ($customers as $c)  {
        $jsonCustomers[] = $c->jsonSerialize();
    }

    //Set the header to json
    header('Content-Type: application/json');
    //Return a serialized version of the stdObjects
    echo json_encode($jsonCustomers);


    break;

    case "POST":
    //Insert all the things
    $nc = new Customer();
    $nc->setName($requestData['name']);
    $nc->setAddress($requestData['address']);
    $nc->setCity($requestData['city']);

    //Add the new customer
    CustomerDAO::createCustomer($nc);

    
    break;

    case "PUT":
    //Update all the things
    break;

    case "DELETE":
    //Delete all the things.
    break;

    default:
        echo json_encode(array("message" => "Voce fala HTTP?"));
}