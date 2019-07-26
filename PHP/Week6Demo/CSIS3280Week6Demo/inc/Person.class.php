<?php

class Person {
    
    private $firstName = "";
    private $lastName = "";
    private $age = 0;

    //Getters
    public function getFirstName() : string {
        return $this->firstName;
    }

    public function getLastName()  : string {
        return $this->lastName;
    }

    public function getAge() : int {
        return $this->age;
    }

    //Setters
    public function setFirstName(string $newFirstName)   {
        $this->firstName = $newFirstName;
    }

    public function setLastName(string $newLastName)    {
        $this->lastName = $newLastName;
    }

    public function setAge(int $newAge) {
        $this->age = $newAge;
    }
}