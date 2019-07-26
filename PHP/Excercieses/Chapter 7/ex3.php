<?php
// This assumes FormHelper.php is in the same directory as // this file.
require 'FormHelper.php';
//Rahim added the following to files to clean up the controller.
require 'FormValidation.php';
require 'Html.php';
// Set up the arrays of choices in the select menu. 
// This is needed in display_form(), validate_form(), 
// and process_form(), so it is declared in the global scope.

$ops = array('+', '-', '*', '/');

// The main page logic: 
// - If the form is submitted, validate and then process or redisplay 
// - If it's not submitted, display 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {    
    // If validate_form() returns errors, pass them to show_form()    
    list($errors, $input) = validate_form();
    
    if ($errors) {
        show_form($errors);
    } else {        
        // The submitted data is valid, so process it        
        process_form($input);        
        // And then show the form again to do another calculation        
        show_form();
    }
} else {    
    // The form wasn't submitted, so display    
    show_form();
}
html_form();
?>

