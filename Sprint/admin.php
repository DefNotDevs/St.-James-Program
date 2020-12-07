<?php

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variable
$err = false;
$username = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
//    echo "Form has been submitted";

    //Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    //If they are correct
    //Actual username and password need to be stored in a seperate file
    //Should be moved to home directory ABOVE public-html
    require ('includes/admin-creds.php');

    if ($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = 'requests.php';
        }
        header("location: " . $_SESSION['page']);

    }
    $err = true;
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>St. James Outreach</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand ml-5" href="#">St. James Outreach Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/index.php">Home</a>
                    </li></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/admin.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<div class="hero-image mt-5">
    <div class="hero-text text-white text-center font-weight-bolder">
        <h1 id="herosection">St James Outreach Center</h1>
        <h5>Helping the Kent school district for almost 30 years.</h5>
    </div>
</div> <!-- hero image and text div-->

<form method="post" action="#">
    <div class="container mt-5 mb-5 border border-light rounded" id="landing-container">
        <br>
            <div class="form-group">
                <label for="username"><strong>Administrator Login for requests page</strong></label>
                <br>
                <br>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <span class="d-none err text-dark" id="err-admin">⚠ Invalid Credentials</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <span class="d-none err text-dark" id="err-password">⚠ Invalid Password</span>
            </div>
            <?php
            if ($err) {
                echo '<span class="err">⚠ Incorrect login</span><br>';
            }
            ?>
            <br>
            <input type="submit" value="Login">
            <br>
            <br>
    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>