<?php

$start = date("s");

do
{
    echo $start;
    sleep(1);
    $start = date("s");
}while($start % 10 != 0)
?>