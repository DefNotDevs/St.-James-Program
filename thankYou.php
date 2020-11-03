<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/main.css">

    <title>Thank You</title>
</head>
<body>
<!-- Navigation Bar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-5" href="https://defnotdevs.greenriverdev.com/305/Sprint/index.html">St. James Outreach Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/multiStepForm.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container mt-5 h5 text-center justify-content-around align-items-center" id="main">


    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $help = implode(", ", $_POST['help']);
    $fromName = $fname . " " . $lname;
    $fromEmail = $email;
    $othertext = $_POST['othertext'];

    ?>
    <div>
        <h2>Thank you for reaching out, <?php echo $fname;?>!</h2>
    <?php

    if($email == "") {
        $email = "None listed.";
    }
    if($phone == "") {
        $phone = "None listed";
    }

        //send email

            $to = "tifferderer@yahoo.com";
            $subject = "Help Inquiry";
            $message = "Name: $fname $lname \n
                        Email: $email \n
                        Phone: $phone \n
                        Address: $street $city $zip \n
                        Services Requested: $help $othertext \n";

            $headers = "Name: $fromName <$fromEmail>";

            $success = mail($to, $subject, $message, $headers);


        //Shortcut
        echo $success ? "<p>We will be in contact with you shortly.</p>" :
            "<p>Sorry... there was a problem.</p>";

    ?>

</div>
</div>
<!--
<footer class="text-white bg-dark">
    <div class="container bg-dark">
        <div class="row">
            <div class="col-sm">
                <h4 class="p-3">Office Hours</h4>
                <p class=" p-3">
                    Monday:    1:00 PM - 4:00 PM <br>
                    Tuesday:   9:00 AM - 12:00 PM <br>
                    Wednesday: 1:00 PM - 4:00 PM
                </p>
            </div>
            <div class="col-sm">
                <h4 class="p-3">Additional Resources</h4>
                <p class="p-3">
                    <a href="https://www.211.org/">211</a><br>
                    <a href="https://kentmethodist.com/assistance">Kent Methodist</a>
                </p>
            </div>
            <div class="col-sm">
                <h4 class="p-3">Kent Office</h4>
                <p class="p-3">
                    24447 94th Ave S. <br>
                    Kent, WA 98030 <br>
                    253-852-4100 <br>
                </p>
            </div>
        </div>
        <p class="justify-content-center d-flex">Copyright © 2020 | DefNotDevs. | Privacy Policy</p>
   </div>
</footer> -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

