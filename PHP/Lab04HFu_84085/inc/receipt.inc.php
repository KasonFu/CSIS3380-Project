<?php

function parseReceipt($fileContents) {

    //Declare a new array for receipts
    $receipt = array();

    try {
        //Parse the lines
        $lines = explode("\n" , $fileContents);

        for($x=0; $x<count($lines); $x++){
            //Parse the individual line
            $columns = explode(",", $lines[$x]);
            //Check it has the right count, if not throw an exception
            if(count($columns)!=4)
            {
                throw new Exception("Problems are on line: " . $x+1 . ".<BR>");
            }
            //Add each column of each line to the array
            $receipt[] = $columns;
        }
                //Add the column to the array of each line
    
    } catch (Exception $ex) {
    //Write to the error log
        echo $ex->getMessage();
        error_log($ex -> getMessage(),0);
    }
    //Return the multi-dimensional array
    return $receipt;

}

function calculateReceiptData($receipt) {

    //Open up each entry
    $receipt[0] = ["Item Number", "Item Description", "Cost", "Quantity", "Price"];
    for($x=1; $x<count($receipt); $x++){
        //Calculate the price
        $receipt[$x][] = '$'.sprintf('%0.2f',( ( (float)substr($receipt[$x][2],1) ) * $receipt[$x][3] ));
    }

    return $receipt;

}

function assembleCSVReceipt($receiptData)  {

    //Create the header for the CSV file
   $csvString = "";
    //Itereate through the array nd create the CSV file
    for($i=0; $i<count($receiptData); $i++)
    {
        $receiptItem = $receiptData[$i];
            for($x=0; $x<count($receiptItem); $x++)
            {   
                $csvString .= $receiptItem[$x].",";
            }
        $csvString .= "\n";
    }
    
    return $csvString;
}

function calculateTotalsnTax($receipt)  {

    //Intitialize subtotal
    $subtotal = 0;
    //Calculate the subTotal
    for($x=1; $x<count($receipt); $x++){
        //Add the value of the slubittal
        $str = substr($receipt[$x][4],1);
        $subtotal += (float)$str;
    }
    $tax = sprintf("%.2f",$subtotal * 0.14);
    //Calculate the Tax
    //Calculate the Total
    $total = $subtotal + $tax;
    //Return the associative array
    $totalsInfo = [$subtotal, $tax, $total];
    return $totalsInfo;
}

?>