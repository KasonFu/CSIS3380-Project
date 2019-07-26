<?php

//Require configuration
require_once('inc/config.inc.php');

//Require Entities
require_once('inc/Entities/Customer.class.php');

require_once('inc/Utilities/RestClient.class.php');
require_once('inc/Utilities/Page.class.php');

//Check if there was get data, perofrm the action
if (!empty($_GET))    {
    //Perform the Action
    if ($_GET["action"] ==  "delete")  {
        //Call the rest client with DELETE
        RestClient::call("DELETE",array('id'=>$_GET['id']));
    }

    $editc = new Customer();
    if ($_GET["action"] == "edit")  {
        //Call the rest client with GET, encode the result
        $jcstring = RestClient::Call("GET", array("id"=>$_GET["id"]));
        $jc = json_decode($jcstring);

        $editc->setCustomerID($jc->CustomerID);
        $editc->setName($jc->Name);
        $editc->setCity($jc->City);
        $editc->setAddress($jc->Address);
    }

}

//Check for post data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["action"]) && $_POST["action"] == "edit")    {
        //Assemble the the postData
        $postData = array("Id"=>$_POST["id"], "Name"=>$_POST["name"],"City"=>$_POST["city"],"Address"=>$_POST["address"]);
        //Call the RestClient with PUT
        RestClient::call("PUT",$postData);
        
    //Was probably a create
    } else {
        //Assemble the Customer
        $postData = array( "Name"=>$_POST["name"],"City"=>$_POST["city"],"Address"=>$_POST["address"]);
        
        RestClient::Call("POST", $postData);
    }
}

//Get all the customers from the web service via the REST client
$jCustomers = json_decode(RestClient::call("GET",array()));
//Store the customer objects 
$customers = array();
//Iterate through the customers and convert them back to Customer objects
foreach($jCustomers as $jc)
{
    $nc = new Customer();
    $nc->setCustomerID($jc->CustomerID);
    $nc->setName($jc->Name);
    $nc->setCity($jc->City);
    $nc->setAddress($jc->Address);
    $customers[] = $nc;
}



Page::$title = "Lab 10_HFu-84085";
Page::header();
Page::listCustomers($customers);
//Check Get again
    if (!empty($_GET) && $_GET["action"] == "edit") {
    //Page Edit
        Page::editCustomer($editc);
    } else {
	//Page Add
        Page::addCustomer();
    }

Page::footer();

?>