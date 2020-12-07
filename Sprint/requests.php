<?php
// ERROR REPORTING
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Starts session
session_start();

if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: admin.php");
}
require('includes/dbcreds.php');
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
            <a class="navbar-brand ml-5" href="#">St. James Outreach Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/involved.php">Get Involved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/multiStepForm.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<div class="container mb-4  mt-5 text-black text-center font-weight-normal justify-content-center align-items-center">
<div class="mt-2">
    <?php
    $toggle = "SELECT available FROM toggle WHERE id = 1";
    $available = mysqli_query($cnxn, $toggle);

    $status = $available->fetch_row();

    ?>
    <label class="mt-2" for="visible">Form Visibility</label>
    <select id="visible" name="visible" >
        <option value='on'<?php if($status =='on') {echo "selected";}?>>Form: On</option>
        <option value='off'<?php if($status == 'off') {echo "selected";}?>>Form: Off</option>
    </select>
    <button id="go">Go</button> <br>
</div>

<br>

    <h1>Order Summary</h1>
    <table id = "service-table" class = "display mb-4">
        <thead>
        <tr>
            <td>Date Submitted</td>
            <td>Client Name</td>
            <td>Zip</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Service Requested</td>
        </tr>
        </thead>

        <tbody>

        <?php

        $sql = "SELECT * FROM outreach ORDER BY submit_date DESC";
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        foreach ($result as $row) {
            //var_dump($row);
            //$form_id = $row['form_id'];
            $fullname = $row['fname'] . " " . $row['lname'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            // $street = $row['street'];
            //$city = $row['city'];
            $zip = $row['zip'];
            $email = $row['email'];
            $phone = $row['phone'];
            $service = ($row['service']);
            if($row['service_other'] == "") {
                $serviceother = $row['service_other'];
            }
            else { $serviceother = '- ' . $row['service_other'];
            }
            $submit_date = date("M d, Y g:i a",strtotime( $row['submit_date'] . '- 3 hours'));

            echo "<tr>";
            echo"<td>$submit_date</td>
                <td>$fname $lname</td>
                <td>$zip</td>
                <td>$email</td>
                <td>$phone</td>
                <td>$service $serviceother</td>
                 ";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <br>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src ="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="scripts/formToggle.js"></script>

<script>
    $('#service-table').DataTable(
        {
            "order": [[ 10, "desc" ]]
        }
    );
</script>

<script>
    $('#go').on('click',
        function() {
            var value = $('#visible').val();
            alert("The form visibility is now " + value + ".");

            $.post("scripts/toggle.php", { value:value }, function(result){
            });
        });
</script>

</body>
</html>