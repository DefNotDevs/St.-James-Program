<?php
// ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Connect to Database

// @ suppresses error from that function call
// If connection fails. or die() function will handle the error.
$cnxn = mysqli_connect($hostname, $username, $password, $database)
    or die("There was a problem");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS (Make sure Bootstrap is first) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="styles/toggleSwitch.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Requests</title>
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
                    <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/index.html">View Homepage</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/multiStepForm.html">View Form</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container  vh-100  mt-5 text-black text-center font-weight-normal justify-content-center align-items-center">

<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
<p>Form Visibility</p>
<br>

    <h1>Order Summary</h1>
    <table id = "service-table" class = "display">
        <thead>
        <tr>
            <td>Guest ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Street</td>
            <td>City</td>
            <td>Zip</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Service Requested</td>
            <td>Other Request</td>
            <td>Date Submitted</td>
        </tr>
        </thead>

        <tbody>

        <?php

        $sql = "SELECT * FROM outreach";
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        foreach ($result as $row) {
            //var_dump($row);
            $form_id = $row['form_id'];
            $fullname = $row['fname'] . " " . $row['lname'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $street = $row['street'];
            $city = $row['city'];
            $zip = $row['zip'];
            $email = $row['email'];
            $phone = $row['phone'];
            $serviceid = $row['serviceid'];
            $serviceother = $row['serviceother'];
            $submit_date = date("M d, Y g:i a",strtotime( $row['submit_date']));

            echo "<tr>";
            echo"<td>$form_id</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$street</td> 
                <td>$city</td>
                <td>$zip</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$serviceid</td>
                <td>$serviceother</td>
                <td>$submit_date</td>
                 ";
            echo "</tr>";
        }
        ?>
        </tbody>

    </table>
</div>



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
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src ="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $('#service-table').DataTable();
</script>
</body>
</html>