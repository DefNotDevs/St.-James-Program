<?php
session_start();

require('includes/dbcreds.php');


    $toggle = "SELECT available FROM toggle WHERE id = 1";
    $available = mysqli_query($cnxn, $toggle);

     foreach ($available as $row) {
         $status = $row['available'];
     }
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

    <title>Fill Out Form</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/multiStepForm.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<div class="hero-image mt-5">
    <div class="hero-text text-center text-white font-weight-bolder">
        <h1 id="herosection">St James Outreach Center</h1>
        <h5>Helping the Kent school district for almost 30 years.</h5>
    </div>
</div>

 <div class = "container <?php if($status == 'off'){echo 'd-none';}?>" >
        <div class="p-4 text-center">
            Appointments are made first come first served. Online form is only accessible during business hours. If you cannot access
            form it is either outside of business hours or we have filled our appointments for the week. Please try again next Monday
            beginning at 1pm.
        </div>

        <form id="regForm" method="post" action="thankYou.php" class=" rounded">
            <h1>Please Fill Out Our Contact Form:</h1>

            <!-- One fieldset for each step in the form: -->
            <!-- Name info -->
            <fieldset class="form-group border p-2">
                <legend>Please Enter Your Name:</legend>

                <div class ="row">
                    <div class="form-group col-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control w-50" id="fname" name="fname">
                        <span class="d-none text-danger font-weight-bold" id ="errFname">First name required</span>
                    </div>
                    <div class="form-group col-6">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control w-50" id="lname" name="lname">
                        <span class="d-none text-danger font-weight-bold" id ="errLname">Last name required</span>
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group border p-2" id="address">
                <legend>Address:</legend>
                <div class="form-group">
                    I have permanent shelter:
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="shelter" id="shelter-yes" value="yes">
                        <label class="form-check-label" for="shelter-yes">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="shelter" id="shelter-no" value="No" checked>
                        <label class="form-check-label" for="shelter-no">No</label>
                    </div>
                </div>

                <div id="display-address" class="d-none">

                <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control w-25" id="street" name="street">
                    <span class="d-none text-danger font-weight-bold" id ="errStreet">Street required</span>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control w-25" id="city" name="city">
                    <span class="d-none text-danger font-weight-bold" id ="errCity">City required</span>
                </div>
                <div class="form-group">
                    <label for="zip">Zip</label>
                    <select class="form-control w-25" id="zip" name="zip">
                        <option value="none">Select your zip</option>
                        <option value="98042">98042</option>
                        <option value="98030">98030</option>
                        <option value="98058">98058</option>
                        <option value="98031">98031</option>
                        <option value="98032">98032</option>
                        <option value="98010">98010</option>
                        <option value="other">Zip code not listed?</option>
                    </select>
                    <span class="d-none text-danger font-weight-bold" id ="errZip">Zip Code required</span>
                </div>

                </div>
            </fieldset>
            <fieldset class="form-group border p-2">
                <legend>How Should We Contact You?</legend>
                <span id="err-verbage" class="d-none text-danger font-weight-bold">Please provide either
                    an email address or phone number so that we can get in touch with you. Email is preferred!</span>

                <div class ="row">
                    <div class="form-group col-5">
                        <label for="email">Email</label>
                        <input type="text" class="form-control w-75" id="email" name="email">
                        <span id="err-email" class="d-none text-danger font-weight-bold">One of these fields is required</span>
                    </div>
                    <div class="form-group col-5">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control w-50" id="phone" name="phone">
                        <span id="errPhone" class="d-none text-danger font-weight-bold">One of these fields is required</span>
                    </div>
                </div>
            </fieldset>

            <!--How can we help-->
            <fieldset class="form-group border p-2 mt-5">
                <legend>What Assistance Are You Seeking? Check All That Apply.
                    <span id="errHelp" class="d-none text-danger font-weight-bold">Please Choose At Least One</span>
                </legend>

                <div class ="row-md justify-content-around">
                    <div class="form-check col-md-4 mt-2">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="utilities" value="utilities" >
                        <label class="form-check-label"
                               for="utilities">Utilities (electricity/water)</label>
                        <div id="utilitiesFile" class="d-none">
                            <div class="custom-file">
                         <!--   <input type="file" class="custom-file-input w-50" id="utilitiesnotice">
                          <label class="custom-file-label" for="utilitiesnotice">Upload Current
                                Bill With Name/Address</label>  -->
                                <br>
                                *You will need a copy of your current bill with your name and address for your appointment.
                        </div>
                        </div>
                    </div>
                    <div class="form-check col-md-4 mt-2">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="rent" value="rent" >
                        <label class="form-check-label"
                               for="rent">Rent</label>
                        <div id="rentFile" class="d-none">
                            <div class="custom-file">
                        <!--    <input type="file" class="custom-file-input w-50" id="eviction">
                            <label class="custom-file-label" for="eviction">Upload Eviction Notice</label>
                           -->     <br>
                                *You will need a copy of your eviction notice for your appointment.
                        </div>
                        </div>
                    </div>
                </div>
                <div class ="row-md justify-content-around">
                    <div class="form-check col-md-4 mt-4">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="gas" value="gas" >
                        <label class="form-check-label"
                               for="gas">Gas</label>
                        <div id="gasFile" class="d-none">
                            <div class="custom-file">
                        <!--    <input type="file" class="custom-file-input w-50" id="driver">
                            <label class="custom-file-label" for="driver" >Upload Photo of Driver\'s License</label>
                         -->   <br>
                                *You will need to bring your driver\'s license with you to your appointment.
                            </div>
                        </div>
                    </div>
                    <div class="form-check col-md-4 mt-4">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="clothing" value="clothing" >
                        <label class="form-check-label"
                               for="clothing">Clothing and Household Items</label>
                    </div>
                </div>
                <div class ="row-md justify-content-around">
                    <div class="form-check col-md-4 mt-4">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="id" value="id" >
                        <label class="form-check-label"
                               for="id">ID or Driver\'s License</label>
                    </div>
                    <div class="form-check col-md-4 mt-4">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="food" value="food" >
                        <label class="form-check-label"
                               for="food">Food</label>
                    </div>
                </div>
                <div class ="row-md justify-content-around">
                    <div class="form-check col-md-6 mt-4 mb-2">
                        <input class="form-check-input"
                               type="checkbox" name="help[]"
                               id="other" value="other" >
                        <label class="form-check-label"
                               for="other">Other</label>
                        <div class="d-none" id="otherFile">
                        <input type="text" class="form-control w-50 d-inline d-none" id="othertext" name="othertext">
                        <br>
                            <span id="otherError" class="d-none text-danger font-weight-bold">*Please specify</span>
                        </div>
                        <br>

                    </div>
                </div>

                <!-- Confirm button -->
                <input type="submit" value="Confirm" class="float-right btn-success">
            </fieldset>
        </form>
    </div>
</div>
<div class="contentVisibility">
    <br>
    <br>
    <div class = "container">
        <div class="p-4 text-center font-weight-bold <?php if($status == 'on'){echo 'd-none';}?>" id ="outmessage">
            You are currently trying to access the form outside of office hours or funds are no longer available.<br>
            Please refer to the additional resources or try again during office hours. <br>
            We sincerely apologize for the inconvenience.
        </div>
    </div>
    <br>
    <br>
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
                <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/requests.php">Directory</a>
            </div>
        </div>
        <p class="justify-content-center d-flex">Copyright © 2020 | DefNotDevs. | Privacy Policy</p>
    </div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="scripts/validateForm.js"></script>
<script src="scripts/formToggle.js"></script>
<!--<script src="scripts/form.js"></script> -->

</body>
</html>
