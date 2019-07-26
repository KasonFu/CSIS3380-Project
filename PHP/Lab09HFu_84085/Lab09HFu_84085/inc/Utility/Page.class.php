<?php

class Page  {

    public static $title = "Lab 09 - SWh_56789";

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
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    static function showUserDetails(User $user) { ?>
    
            <TABLE >

            <?php
                echo '<TR>';
                echo '<TD>User Name: '.$user->getUsername().'</TD></TR>';
                echo '<TR><TD>First Name: '.$user->getFName().'</TD>';
                echo '<TD>Last Name: '.$user->getLName().'</TD></TR>';
                echo '<TR><TD>Email Address: '.$user->getEmail().'</TD>';
                echo '<TD>Phone Number: '.$user->getPhone().'</TD></TR>';
                echo '<TR><TD>Age: '.$user->getAge().'</TD>';
                echo '<TD>Gender: '.$user->getGender().'</TD></TR></Table>';
            ?>
            </TABLE>
            <form action="Lab09HFu_84085-logout.php">
            <input type="submit" value="Log out">
            </form>
   
<?php }

    static function showLogin() { ?>
    
        <h1>Please sign in</h1>
        <form action="" method = "POST">
        <input type="text" name="username" placeholder="Username"/><br/>
        <input type="text" name="password" placeholder="Password"/><br/>
        <input type="submit" value="Log in">

        </form>

    <?php }
    static function thankYou(){
        echo '<h1>Thank you for viewing this assignment!</h1>';
    }

}