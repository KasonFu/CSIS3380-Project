<?php

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

class Office {

    //Make sure your attributes match the table!
    private $officeCode;
    private $city;
    private $phone;
    private $addressLine1;
    private $addressLine2;
    private $state;
    private $country;
    private $postalCode;
    private $territory;

    //Constructor
    // function __construct(

    //     $newOfficeCode, 
    //     $newCity, 
    //     $newPhone, 
    //     $newAddressLine1, 
    //     $newAddressLine2, 
    //     $newState, 
    //     $newCountry, 
    //     $newPostalCode, 
    //     $newTerritory)  {

    //     $this->officeCode = $newOfficeCode;
    //     $this->city = $newCity;
    //     $this->phone = $newPhone;
    //     $this->addressLine1 = $addressLine1;
    //     $this->addressLine2 = $addressLine2;
    //     $this->state = $newState;
    //     $this->country = $newCountry;
    //     $this->postalCode = $newPostalCode;
    //     $this->territory = $newTerritory;

    // }

    //Setters
    function setOfficeCode(string $newOfficeCode)   {
        $this->officeCode = $newOfficeCode;
    }
    function setCity(string $newCity)   {
        $this->city = $newCity;
    }
    function setPhone(string $newPhone) {
        $this->phone = $newPhone;
    }
    function setAddressLine1(string $newAddressLine1)   {
        $this->addressLine1 = $newAddressLine1;
    }
    
    function setAddressLine2(string $newAddressLine2)   {
        $this->addressLine2 = $newAddressLine2;
    }

    function setState(string $newState) {
        $this->state = $newState;
    }

    function setCountry(string $newCountry) {
        $this->country = $newCountry;
    }

    function setPostalCode(string $newPostalCode)   {
        $this->postalCode = $newPostalCode;
    }

    function setTerritory(string $newTerritory) {
        $this->territory = $newTerritory;
    }

    
    //Getters
     function getOfficeCode() : string {
        return $this->officeCode;
    }

     function getCity() : string {
        return $this->city;
    }

     function getPhone() : string {
        return $this->phone;
    }

     function getAddressLine1() : string {
        return $this->addressLine1;
    }

     function getAddressLine2() {
        return $this->addressLine2;
    }

     function getState() {
        return $this->state;
    }

    function getPostalCode() : string {
        return $this->postalCode;
    }

     function getCountry() : string {
        return $this->country;
    }

     function getTerritory() : string {
        return $this->territory;
    }

}