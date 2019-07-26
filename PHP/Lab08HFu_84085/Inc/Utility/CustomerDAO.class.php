<?php

class CustomerDAO {

    private static $db;

    //Initialize DAO class
    static function init()  {
        
        self::$db = new PDOAgent("Customer");

    }

    static function getCustomers()    {

        $sqlQuery = "SELECT * FROM customers;";

        //Query!
        self::$db->query($sqlQuery);
        //Execute!
        self::$db->execute();
        //Return the results!
        return self::$db->resultSet();

    }

   
    static function createCustomer(Customer $no)    {

        $sqlInsert = "INSERT INTO customers (Name, City, Address)
            VALUES (:Name, :City, :Address);";

        //Query!
        self::$db->query($sqlInsert);
        //Bind!
        self::$db->bind(':Name',$no->getName());
        self::$db->bind(':City',$no->getCity());
        self::$db->bind(':Address',$no->getAddress());

        //Execute!
        self::$db->execute();

        //Get Affected rows
        return self::$db->rowCount();

    }

    static function deleteCustomer($name)
    {
        $sqlDelete = "DELETE FROM Customers Where Name = $name";
        self::$db->query($sqlDelete);
        self::$db->execute();
        return self::$db->resultSet();
    }



}