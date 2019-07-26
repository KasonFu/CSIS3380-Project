<?php

class Page  {

    public static $title = "Please set the title";

    static function header() { ?>
            
        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <title><?php echo self::$title; ?></title>
        </head>
        <body>
            <h1><?php echo self::$title; ?></h1>

    <?php }

    static function footer() { ?>
    
        <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
        </html>

    <?php }

    static function listCustomer($customers)  { ?>

        <TABLE CLASS="table table-striped">
            <TR>
                <TH>Name</TH>
                <TH>City</TH>
                <TH>Address</TH>
                <TH>Delete</TH>
                <TH>Edit</TH>
            </TR>

            <?php

            foreach ($customers as $customer)   {
                echo '<TR>';
                echo '<TD>'.$customer->getName().'</TD>';
                echo '<TD>'.$customer->getCity().'</TD>';
                echo '<TD>'.$customer->getAddress().'</TD>';
                echo "<TD><a href=?delete=".$customer->getName().">Delete</TD>";
                echo "<TD><a href=?edit=".$customer->getName().">Edit</TD>";
                echo '</TR>';
            }
            ?>

            </TABLE>

    <?php }

    static function AddForm(){ ?>

        <h1>Add Customer</h1>
        <form action ="" method ="get">
        name<br/>
        <INPUT TYPE = "TEXT" NAME = "Name" /><br />
        city<br/>
        <INPUT TYPE = "TEXT" NAME = "City" /><br />
        address<br/>
        <input TYPE = "TEXT" NAME = "Address" /><br />
        <input type ="submit" />
        </form>
    <?php }


}