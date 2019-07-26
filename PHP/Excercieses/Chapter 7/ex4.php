<?php

// This assumes FormHelper.php is in the same directory as 
// this file. 
require 'FormHelper.php';
// Set up the array of choices in the select menu. 
// This is needed in display_form(), validate_form(), 
// and process_form(), so it is declared in the global scope.


$states = ['AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DC', 'DE', 
'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 
'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ',
'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD',
'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV', 'WI', 'WY'];

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
    }
} else {    
            
    // The form wasn't submitted, so display    
    show_form();
}
function show_form($errors = array())
{   
     // Set up the $form object with proper defaults    
    $form = new FormHelper();

    // All the HTML and form display is in a separate file for clarity    
    include 'shipping-form.php';
}
function validate_form()
{
    $input = array();
    $errors = array();

    foreach (['from', 'to'] as $addr) {        
        // Check required fields
        foreach (['Name' => 'name', 'Address 1' => 'address1', 'City' => 'city', 'State' => 'state'] as $label => $field) {

            $input[$addr . '_' . $field] = $_POST[$addr . '_' . $field] ?? '';
            
            if (strlen($input[$addr . '_' . $field]) == 0) {
            
                $errors[] = "Please enter a value for $addr $label.";
            
            }
        }        // Check state        
        $input[$addr . '_state'] = $GLOBALS['states'][$input[$addr . '_state']] ?? '';
        if (!in_array($input[$addr . '_state'], $GLOBALS['states'])) {
            $errors[] = "Please select a valid $addr state.";
        }        // Check zip code        
        $input[$addr . '_zip'] = filter_input(
            INPUT_POST,
            $addr . '_zip',
            FILTER_VALIDATE_INT,
            ['options' => ['min_range' => 10000, 'max_range' => 99999]]
        );
        if (is_null($input[$addr . '_zip']) || ($input[$addr . '_zip'] === false)) {
            $errors[] = "Please enter a valid $addr ZIP";
        }        // Don't forget about address2!        
        $input[$addr . '_address2'] = $_POST[$addr . '_address2'] ?? '';
    }
    
    // height, width, depth, weight must all be numbers > 0    
    foreach (['height', 'width', 'depth', 'weight'] as $field) {
        $input[$field] = filter_input(INPUT_POST, $field, FILTER_VALIDATE_FLOAT);        
        
        // Since 0 is not valid, we can just test for truth rather than        
        // null or exactly false        
        if (!($input[$field] && ($input[$field] > 0))) {
            $errors[] = "Please enter a valid $field.";
        }
    }    
        // Check weight    
    if ($input['weight'] > 150) {
        $errors[] = "The package must weigh no more than 150 lbs.";
    }    
        // Check dimensions    
    foreach (['height', 'width', 'depth'] as $dim) {
        if ($input[$dim] > 36) {
            $errors[] = "The package $dim must be no more than 36 inches.";
        }
    }
    return array($errors, $input);
}
function process_form($input)   {    
    // Make a template for the report    
    $tpl = <<< HTML
    <p> Your package is {height} " x {width}" x {depth} " and weighs {weight} lbs.</p>
        <p> It is coming from :</p> 
        <pre> 
            {from_name}
            {from_address}
            {from_city}, {from_state} {from_zip}
        </pre>
        <p> It is going to : </p>
        <pre>
            {to_name}
            {to_address}
            {to_city},{to_state} {to_zip}
        </pre>
HTML;

        // Adjust addresses in $input for easier output   

        foreach(['from','to'] as $addr) {

            $address1 = $addr.'_address';
            $address2 = $addr.'_address1';

            $input[$address1] = $input[$address2];

            if (strlen($address2)) {
                $input[$address1] .= "\n" . $input[$address2];
            }
        }

         // Replace each template variable with the corresponding value
         // in $input
         $html = $tpl;
         foreach($input as $k => $v) {
             $html = str_replace('{'.$k.'}', $v, $html);
        }
    // Print the report
    print $html;
    }
    ?>

<form method="POST" action="<?php $form->encode($_SERVER['PHP_SELF']) ?>">
    <table>
        <?php if ($errors) { ?>
        <tr>
            <td>You need to correct the following errors:</td>
            <td>
                <ul>
                    <?php foreach ($errors as $error) { ?>
                    <li>
                        <?php $form->encode($error) ?>
                    </li>
                    <?php } ?>
                </ul>
            </td>
            <?php }  ?>
        <tr>
            <th>From:</th>
            <td></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>
                <?php $form->input('text', ['name' => 'from_name']) ?>
            </td>
        </tr>
        <tr>
            <td>Address 1:</td>
            <td>
                <?php $form->input('text', ['name' => 'from_address1']) ?>
            </td>
        </tr>
        <tr>
            <td>Address 2:</td>
            <td>
                <?php $form->input('text', ['name' => 'from_address2']) ?>
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>
                <?php $form->input('text', ['name' => 'from_city']) ?>
            </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>
                <?php $form->select($GLOBALS['states'], ['name' => 'from_state']) ?>
            </td>
        </tr>
        <tr>
            <td>ZIP:</td>
            <td>
                <?php $form->input('text', ['name' => 'from_zip', 'size' => 5]) ?>
            </td>
        </tr>
        <tr>
            <th>To:</th>
            <td></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td>
                <?php $form->input('text', ['name' => 'to_name']) ?>
            </td>
        </tr>
        <tr>
            <td>Address 1:</td>
            <td>
                <?php $form->input('text', ['name' => 'to_address1']) ?>
            </td>
        </tr>
        <tr>
            <td>Address 2:</td>
            <td>
                <?php $form->input('text', ['name' => 'to_address2']) ?>
            </td>
        </tr>
        <tr>
            <td>City:</td>
            <td>
                <?php $form->input('text', ['name' => 'to_city']) ?>
            </td>
        </tr>
        <tr>
            <td>State:</td>
            <td>
                <?php $form->select($GLOBALS['states'], ['name' => 'to_state']) ?>
            </td>
        </tr>
        <tr>
            <td>ZIP:</td>
            <td>
                <?php $form->input('text', ['name' => 'to_zip', 'size' => 5]) ?>
            </td>
        </tr>
        <tr>
            <th>Package:</th>
            <td></td>
        </tr>
        <tr>
            <td>Weight:</td>
            <td>
                <?php $form->input('text', ['name' => 'weight']) ?>
            </td>
        </tr>
        <tr>
            <td>Height:</td>
            <td>
                <?php $form->input('text', ['name' => 'height']) ?>
            </td>
        </tr>
        <tr>
            <td>Width:</td>
            <td>
                <?php $form->input('text', ['name' => 'width']) ?>
            </td>
        </tr>
        <tr>
            <td>Depth:</td>
            <td>
                <?php $form->input('text', ['name' => 'depth']) ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?php $form->input('submit', ['value' => 'Ship!']) ?>
            </td>
        </tr>
    </table>
</form>