<?php

function show_form($errors = array())
{
    //Declare the form as global from the controller file.
    global $form;

    // All the HTML and form display is in a separate file for clarity
    include 'inc/math-form.php';
}
function validate_form()
{
    global $errors;

    $arr = "\n";
    //As this function takes no paraters we have to pull the $_POST  (as this is what ex3 chapter 7 uses) to dump all the values.
    foreach ($_POST as $key=>$value) {
        $arr .= $key."=>".$value."\n";
    }

    error_log($arr, 0);

    $input = array();
    $errors = array();

    // op is required
    $input['op'] = $GLOBALS['ops'][$_POST['op']] ?? '';
    if (!in_array($input['op'], $GLOBALS['ops'])) {
        $errors[] = 'Please select a valid operation.';
    }    // num1 and num2 must be numbers
    $input['num1'] = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    if (is_null($input['num1']) || ($input['num1'] === false)) {
        $errors[] = 'Please enter a valid first number.';
    }
    $input['num2'] = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    if (is_null($input['num2']) || ($input['num2'] === false)) {
        $errors[] = 'Please enter a valid second number.';
    }
    // Can't divide by zero
    if (($input['op'] == '/') && ($input['num2'] == 0)) {
        $errors[] = 'Division by zero is not allowed.';
    }
    return array($errors, $input);
}
function process_form($input)
{
    $result = 0;
    if ($input['op'] == '+') {
        $result = $input['num1'] + $input['num2'];
    } elseif ($input['op'] == '-') {
        $result = $input['num1'] - $input['num2'];
    } elseif ($input['op'] == '*') {
        $result = $input['num1'] * $input['num2'];
    } elseif ($input['op'] == '/') {
        $result = $input['num1'] / $input['num2'];
    }
    $message = "{$input['num1']} {$input['op']} {$input['num2']} = $result";
    print "<h3>$message</h3>";
}
