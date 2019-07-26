<?php

class Page {


    static private $title = "";

    static public function setTitle(string $title) {
        self::$title = $title;
    }

    static function header()   { ?>
    
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

    static function footer()   { ?>
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
    
    <?php }


    static function printPersons($persons)  {

        $naText = "--";

     echo '<TABLE CLASS="table table-striped">';
     echo '<THEAD>
            <TH>Category</TH>
            <TH>FirstName</TH>
            <TH>LastName</TH>
            <TH>Age</TH>
            <TH>EmployeeNo</TH>
            <TH>WorkLoad</TH>

            <TH>Department</TH>
            <TH>Faculty</TH>

            </THEAD>';
    //Iterate through the persons
    foreach ($persons as $p)    {

        switch (get_class($p))  {
            case "Student":
                $faculty = $p->getFaculty();
                $empNo = $naText;
                $department = $naText;
                $workLoad = $naText;
            break;
            case "Staff":
                $faculty = $naText;
                $empNo = $p->getEmpNo();
                $department = $p->getDepartment();
                $workLoad = $naText;
            break;
            case "Faculty":
                $faculty = $naText;
                $empNo = $p->getEmpNo();
                $department = $naText;
                $workLoad = $p->getWorkLoad();
            break;
        }
        
        echo '<TR>
        <TD>'.get_class($p).'</TD>
        <TD>'.$p->getFirstName().'</TD>
        <TD>'.$p->getLastName().'</TD>
        <TD>'.$p->getAge().'</TD>
        <TD>'.$empNo.'</TD>
        <TD>'.$workLoad.'</TD>
        <TD>'.$department.'</TD>
        <TD>'.$faculty.'</TD>


                </TR>';
    }
     echo '</TABLE>';   
    }
}