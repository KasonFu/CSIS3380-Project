<?php

function get_ts($ds)    {
     return strtotime($ds);
}

function get_ds($ts)   {
    return date("Y-m-d",$ts);
}

?>