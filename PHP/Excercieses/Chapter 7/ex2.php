<?php
/* Since this is operating on form data, it looks directly at $_POST   instead of a validated $input array */
function process_form()
{
    print '<ul>';
    foreach ($_POST as $k => $v) {
        print '<li>' . htmlentities($k) . '=' . htmlentities($v) . '</li>';
    }
    print '</ul>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    process_form();
} else {
    echo "No POST data to be displayed";
}

?>