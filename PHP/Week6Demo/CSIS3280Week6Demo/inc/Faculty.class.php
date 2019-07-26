<?php

class Faculty extends Employee  {
    
    public $workLoad = 0.0;

    public function getWorkLoad() : float {
        return $this->workLoad;
    }

    public function setWorkLoad(float $newWorkLoad)  {
        $this->workLoad = $newWorkLoad;

    }



}