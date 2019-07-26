<?php

class Staff extends Employee    {

    public $department = "";

    public function getDepartment() : string {
        return $this->department;
    }

    public function setDepartment(string $newDepartment)    {
        $this->department = $newDepartment;
    }

}

?>