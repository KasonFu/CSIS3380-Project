<?php

class Employee extends Person   {
    
    private $empno = "";

    public function setEmpNo(string $newNumber)  {
        $this->empno = $newNumber;
    }

    public function getEmpNo() : string   {
        return $this->empno;
    }
}

?>