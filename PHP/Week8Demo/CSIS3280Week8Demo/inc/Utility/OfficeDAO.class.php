<?php

class OfficeDAO {

    private static $db;

    //Initialize DAO class
    static function init()  {
        
        self::$db = new PDOAgent("Office");

    }

    static function getOffices()    {

        $sqlQuery = "SELECT * FROM offices;";

        //Query!
        self::$db->query($sqlQuery);
        //Execute!
        self::$db->execute();
        //Return the results!
        return self::$db->resultSet();

    }

    // +--------------+-------------+------+-----+---------+-------+
    // | Field        | Type        | Null | Key | Default | Extra |
    // +--------------+-------------+------+-----+---------+-------+
    // | officeCode   | varchar(10) | NO   | PRI | NULL    |       |
    // | city         | varchar(50) | NO   |     | NULL    |       |
    // | phone        | varchar(50) | NO   |     | NULL    |       |
    // | addressLine1 | varchar(50) | NO   |     | NULL    |       |
    // | addressLine2 | varchar(50) | YES  |     | NULL    |       |
    // | state        | varchar(50) | YES  |     | NULL    |       |
    // | country      | varchar(50) | NO   |     | NULL    |       |
    // | postalCode   | varchar(15) | NO   |     | NULL    |       |
    // | territory    | varchar(10) | NO   |     | NULL    |       |
    // +--------------+-------------+------+-----+---------+-------+

    static function createOffice(Office $no)    {

        $sqlInsert = "INSERT INTO offices (officeCode, city, phone, addressLine1, addressLine2, state, country, postalCode, territory)
            VALUES (:officeCode, :city, :phone, :addressLine1, :addressLine2, :state, :country, :postalCode, :territory);";

        //Query!
        self::$db->query($sqlInsert);
        //Bind!
        self::$db->bind(':officeCode',$no->getOfficeCode());
        self::$db->bind(':city',$no->getCity());
        self::$db->bind(':phone',$no->getPhone());
        self::$db->bind(':addressLine1',$no->getAddressLine1());
        self::$db->bind(':addressLine2',$no->getAddressLine2());
        self::$db->bind(':state',$no->getState());
        self::$db->bind(':country',$no->getCountry());
        self::$db->bind(':postalCode',$no->getPostalCode());
        self::$db->bind(':territory',$no->getTerritory());

        //Execute!
        self::$db->execute();

        //Get Affected rows
        return self::$db->rowCount();

    }



}