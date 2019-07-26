<?php

$courses['CSIS 1280'] = 'Bambang Serif';
$courses['CSIS 2300'] = 'Reza Ghaeli';
$courses['CSIS 3275'] = 'Rahim Virani';
$courses['CSIS 3330'] = 'Michael Ma';
$courses['CSIS 1280'] = 'Samuel Otim';
$courses[] = 'Gilbert Tsui';

 echo "Is Samuel Otim in the courses list?" . in_array('CSIS 1280', $courses)."\n";
 echo "Where is Samuel Otim in the courses list?" . array_search('Gilbert Tsui', $courses). "\n";
 echo "There are ". count($courses) . " courses.\n";

foreach ($courses as $key => $value)   {
    echo $key .":". $value . "\n";
}
sort($courses);
 var_dump($courses);

