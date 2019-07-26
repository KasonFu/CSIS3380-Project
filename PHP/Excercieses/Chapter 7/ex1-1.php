<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    var_dump($_POST);
} else {
    echo "No POST data to be displayed";
}

?>