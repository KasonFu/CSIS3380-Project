<?php

require_once("inc/config.inc.php");
require_once("inc/Page.class.php");

require_once("inc/Person.class.php");
require_once("inc/Student.class.php");

require_once("inc/Employee.class.php");
require_once("inc/Staff.class.php");
require_once("inc/Faculty.class.php");

require_once("inc/FileService.class.php");
require_once("inc/NameParser.class.php");
require_once("inc/PersonFactory.class.php");



$persons = array();

for ($i = 0; $i < 15; $i++) {

    $persons[] = PersonFactory::getPerson();

}

Page::setTitle("CSIS Week6 Demo");
Page::header();
Page::printPersons($persons);
Page::footer();