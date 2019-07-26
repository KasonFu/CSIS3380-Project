<?php

class Student extends Person    {
    private $faculty = "";

    public function setFaculty(string $newFaculty) {
        $this->faculty = $newFaculty;
    }

    public function getFaculty() : string {
        return $this->faculty;

    }
}