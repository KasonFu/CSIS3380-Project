<?php

class PersonFactory   {

    private static function generatePerson(string $classType) : Person {
         //Generate a student
         $np = new $classType();
         $np->setFirstName(self::getFirstName());
         $np->setLastName(self::getLastName());
         $np->setAge(self::getAge());

         return $np;
    }

    public static function getPerson()    : Person    {

        //Pick a type of person
        $pType = self::getPersonType();

        switch ($pType)   {
            case "Student":
            
                //Get a new Person
                $np = self::generatePerson('Student');
                //Add the class specific information
                $np->setFaculty(self::getFaculty());

            break;

            case "Faculty":
                //Get a new Person
                $np = self::generatePerson('Faculty');
                //Set the employee number for the faculty
                $np->setEmpNo(self::generateEmployeeNo());
                //Set the workload
                $np->setWorkLoad(self::generateWorkLoad());
            break;

            case "Staff":
                //Get a new Person
                $np = self::generatePerson('Staff');
                //Set the employee number for the faculty
                $np->setEmpNo(self::generateEmployeeNo());
                //Set the department
                $np->setDepartment(self::getDepartment());
            break;


            default:
                $np = self::generatePerson('Person');
            break;
        }

        return $np;
    }

    private static function getAge() : int {
        return rand(15, 110);
    }

    private static function getFirstName() : string {
        //Call the name parser
        $names = NameParser::parseNames(FIRST_NAME_FILE);
        return $names[rand(0, count($names) -1)];
    }

    private static function getLastName() : string {
        //Call the name parser
        $names = NameParser::parseNames(LAST_NAME_FILE);
        return $names[rand(0, count($names) -1)];
    }
    
    private static function getFaculty() :string  {
        return FACULTY[rand(0,count(FACULTY) -1)];
    }

    private static function getPersonType() : string {
        return PERSON_TYPES[rand(0,count(PERSON_TYPES) - 1)];
    }

    private static function getDepartment() : string {
        return DEPARTMENTS[rand(0,count(DEPARTMENTS) - 1)];
    }

    private static function generateWorkLoad() : float {
        return (float) rand(0,100) /1;
    }

    private static function generateEmployeeNo() : string {
        return (string) rand(0,999999999);
    }

}