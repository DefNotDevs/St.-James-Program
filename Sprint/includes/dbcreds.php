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

