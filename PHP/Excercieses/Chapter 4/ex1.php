<?php

/*

According to the US Census Bureau, the 10 largest American cities (by population) in 2010 were as follows: 

    • New York, NY (8,175,133 people) 
    • Los Angeles, CA (3,792,621) 
    • Chicago, IL (2,695,598) 
    • Houston, TX (2,100,263) 
    • Philadelphia, PA (1,526,006) 
    • Phoenix, AZ (1,445,632) 
    • San Antonio, TX (1,327,407) 
    • San Diego, CA (1,307,402) 
    • Dallas, TX (1,197,816) 
    • San Jose, CA (945,942) 
    
    Define an array (or arrays) that holds this information about locations and populations. Print a table of locations and population information that includes the total population in all 10 cities. 
 */

 ?>

<html>
<table> <tr> <th>City</th><th>Population</th></tr >

<?php 

    $census = [
    'New York, NY' => 8175133, 
    'Los Angeles, CA' => 3792621, 
    'Chicago, IL' => 2695598, 
    'Houston, TX' => 2100263, 
    'Philadelphia, PA' => 1526006,
    'Phoenix, AZ' => 1445632,
    'San Antonio, TX' => 1327407,
    'San Diego, CA' => 1307402,
    'Dallas, TX' => 1197816,
    'San Jose, CA' => 945942 ];

$total = 0;

foreach ($census as $city => $population) {
    $total += $population;
    print "<tr><td>$city</td><td>$population</td></tr>\n";
}

print "<tr><td>Total</td><td>$total</td></tr>\n";
print "</table></html>";