<?php

class Customer {


    private $Name;
    private $City;
    private $Address;
    

    function setName(string $name)   {
        $this->Name = $name;
    }
    function setCity(string $newCity)   {
        $this->City = $newCity;
    }
    function setAddress(string $address) {
        $this->Address = $address;
    }
   
    
    //Getters
     function getName() : string {
        return $this->Name;
    }

     function getCity() : string {
        return $this->City;
    }

     function getAddress() : string {
        return $this->Address;
    }

    
}