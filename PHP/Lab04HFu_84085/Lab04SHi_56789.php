<?php
//Require the files
require_once("inc/html.inc.php");
require_once("inc/file.inc.php");
require_once("inc/receipt.inc.php");


//Html header
html_header("Lab 04 - Recept Generator");

//Check if there where files posted,
if(isset($_FILES['CSVUpload']))
    {        
        //Read the file
        $data = file_read($_FILES['CSVUpload']['tmp_name']);
        //Parsee the File
        $recieptdata = parseReceipt($data);
        //Calculate
        $recieptdata = calculateReceiptData($recieptdata);
        //Calcualte the Totals and Tax
        $totalInfo = calculateTotalsnTax($recieptdata);
    }
        //Render the results
        if(isset($recieptdata))
        {
            html_printReceipt($recieptdata,$totalInfo);
        //Assemble the update CSV file with the total
        $newcsv = assembleCSVReceipt($recieptdata);

        //Write out the file;
        writeFile($newcsv);
        }
        //Render the upload form
        html_uploadForm();
//Html footer
html_footer();
?>