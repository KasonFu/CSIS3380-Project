<?php

/*

1.  What does $_POST look like when the following form is submitted with the third option in the Braised Noodles menu selected, the first and last options in the Sweet menu selected, and 4 entered into the text box? 
2.  Write a process_form() function that prints out all submitted form parameters and their values. You can assume that form parameters have only scalar values. 
3. Write a program that does basic arithmetic. Display a form with text box inputs for two operands and a <select> menu to choose an operation: addition, subtraction, multiplication, or division. Validate the inputs to make sure that they are numeric and appropriate for the chosen operation. The processing function should display the operands, the operator, and the result. For example, if the operands are 4 and 2 and the operation is multiplication, the processing function should display something like 4 * 2 = 8. 4. Write a program that displays, validates, and processes a form for entering information about a package to be shipped. The form should contain inputs for the from and to addresses for the package, dimensions of the package, and weight of the package. The validation should check (at least) that the package weighs no more than 150 pounds and that no dimension of the package is more than 36 inches. You can assume that the addresses entered on the form are both US addresses, but you should check that a valid state and a zip code with valid syntax are entered. The processing function in your program should print out the information about the package in an organized, formatted report. 5. (Optional) Modify your process_form() function that enumerates all submitted form parameters and their values so that it correctly handles submitted form parameters that have array values. Remember, those array values could themselves contain arrays.
*/
?>

<form method="POST" action="ex1-1.php">
    Braised Noodles with:
    <select name="noodle">
        <option>crab meat</option>
        <option>mushroom</option>
        <option>barbecued pork</option>
        <option>shredded ginger and green onion</option>
    </select> 

    <br /> Sweet: 
    <select name="sweet[]" multiple>
        <option value="puff"> Sesame Seed Puff 
        <option value="square"> Coconut Milk Gelatin Square 
        <option value="cake"> Brown Sugar Cake 
        <option value="ricemeat"> Sweet Rice and Meat
    </select> 

    <br /> Sweet Quantity: <input type="text" name="sweet_q"> <br /> 
    <input type="submit" name="submit" value="Order">
</form>