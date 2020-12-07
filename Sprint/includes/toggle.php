<?php
//Connect to Database
$database = "defnotde_grc";
$username = "defnotde_grcuser";
$password = "Most.Def.Not.Devs.";
$hostname = "localhost";

// @ suppresses error from that function call
// If connection fails. or die() function will handle the error.
$cnxn = mysqli_connect($hostname, $username, $password, $database)
or die("There was a problem");


if(isset($_POST['value'])) {$button = $_POST['value'];

//prevent SQL injection
    $button = mysqli_real_escape_string($cnxn, $button);

    $sql = "UPDATE toggle SET available ='$button' WHERE id = 1";

    $success = mysqli_query($cnxn, $sql);
    if(!$success) {
        echo "<p>Sorry something went wrong </p>";
    }
}
