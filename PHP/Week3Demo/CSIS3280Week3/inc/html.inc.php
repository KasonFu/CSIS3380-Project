<?php

function html_header($title)  { ?>
<HTML>
    <HEAD>
    <TITLE><?php echo $title; ?></TITLE>
    </HEAD>

    <BODY>
    <H1><?php echo $title; ?></H1>

 <?php }


function html_footer()  { ?>
    </BODY>
</HTML>
<?php }

function html_helloForm()   { ?>

<p>What is your name?</p>
<FORM METHOD="GE" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
<INPUT TYPE="text" NAME="first">
<INPUT TYPE="Submit">
</FORM> 


<?php }

function html_greet($name)  {
    echo "<H3>Hello $name!</H3>";
}


function html_volume($volume)  {
    echo "<H3>The volume is $volume!</H3>";
}

function html_volumeForm()  { ?>

<p>Please enter the height, width and length of a cube.</p>
<FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
<p>Please enter the length<INPUT TYPE="text" NAME="length"></p>
<p>Please enter the width<INPUT TYPE="text" NAME="width"></p>
<p>Please enter the height<INPUT TYPE="text" NAME="height"></p>
<INPUT TYPE="Submit">
</FORM> 


<?php }

function html_showDate($string)    {
    $timestamp = strtotime($string);
    var_dump($timestamp);
    echo "<H3>". $timestamp ."</H3>";
    echo "Month: ". date('M',$timestamp)."<BR>";
    echo "Days: ". date('d',$timestamp)."<BR>";
    echo "Hours: ". date('g',$timestamp)."<BR>";
    echo "Minutes: ". date('i',$timestamp)."<BR>";
    echo "Seconds: ". date('s',$timestamp)."<BR>";
}


function html_dateTimeForm()   { ?>

    <p>Please select a date</p>
    <FORM METHOD="POST" ACTION="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <INPUT TYPE="datetime-local" NAME="time">
    <INPUT TYPE="Submit">
    </FORM> 
    
    
    <?php }

?>