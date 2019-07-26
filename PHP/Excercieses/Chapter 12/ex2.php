<?php

/*
 * Modify the validate_form() function in your answer to Exercise 3 in Chapter 7
(see “Exercise 3” on page 345) so that it prints in the web server error log the
names and values of all of the submitted form parameters.
NOTE: Take a look at FormValidation.php for the answer to this excercise.
 */

// This assumes FormHelper.php is in the same directory0as // this file.
require 'inc/FormHelper.php';

//Rahim added the following to files to clean up the controller.
require 'inc/FormValidation.php';
require 'inc/Html.php';

//Because we split the logic properly we have to declare the $form object at this scope otherwise it will not be found.
// Set up the $form object with proper defaults
$defaults = array(
    'num1' => 2, 'op' => 2, // the index of '*' in $ops
    'num2' => 8
);
$form = new FormHelper($defaults);
//Need to declare errors for validate_form();
$errors = array();

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

