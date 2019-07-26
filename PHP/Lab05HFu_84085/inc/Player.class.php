<?php

class Player {

//Player attributes
    public $no = "";
    public $name ="";
    public $bats = "";
    public $age = "";
    public $position = "";
    public $throw = "";
    public $height = "";
    public $weight = "";
    public $birthplace = "";
    //Constructor

function __construct($no,$name,$bats,$age,$position,$throw,$hei,$wei,$bir)
{
    $this->no = $no;
    $this->name = $name;
    $this->bats = $bats;
    $this->age = $age;
    $this->position = $position;
    $this->throw = $throw;
    $this->height = $hei;
    $this->weight = $wei;
    $this->birthplace = $bir;
}

}


?>