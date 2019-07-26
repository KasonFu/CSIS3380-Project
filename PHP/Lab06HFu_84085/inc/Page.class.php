<?php

class Page  {
    static function header($title)    {  ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

            <title><?php echo $title ?></title>
        </head>
        <body>
            <h1><?php echo $title ?></h1>

 <?php   }

    static function footer()    { ?>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        </body>
        </html>

<?php    }

    static function printMenu($menu)    {

        echo '<H3>Pizzas</H3>';
        echo '<TABLE CLASS="table-striped">';
        echo '<THEAD><TR><TH>Pizza Type</TH>
        <TH>Item</TH>
        <TH>Description</TH></TR></THEAD>';

        foreach ($menu->pizzas as $key => $pizzaType)   {

            foreach ($pizzaType as $pizza)  {
            echo "<TR><TD>".$pizza->getType()."</TD>
                    <TD>".$pizza->getItem()."</TD>
                    <TD>".$pizza->getDescription()."</TD></TR>";
            }
        }
        echo "</TABLE>";
        
        echo '<H3>Drinks</H3>';
        echo '<TABLE CLASS="table-striped">';
        echo '<THEAD><TR><TH>Drink Type</TH>
        <TH>Item</TH>
        <TH>Description</TH></TR></THEAD>';
        foreach ($menu->drinks as $key => $drinkType)   {
            foreach ($drinkType as $drink)  {
            echo "<TR><TD>".$drink->getType()."</TD>
            <TD>".$drink->getItem()."</TD>
            <TD>"."</TD>
            </TR>";
            }
        
        }
        echo "</TABLE>";

    }

    static function notify($messages)   {
        echo '<DIV>';
        foreach ($messages as $message) {
            echo '&bull;'.$message.'';
        }
        echo '</DIV>';
    }
}

?>