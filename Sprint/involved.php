<?php
session_start();
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
    <link rel="stylesheet" href="styles/services.css">

    <!-- **********************************************
                    Title & Favicon
  ********************************************** -->
    <title>St. James Outreach</title>
</head>


<body>

<!-- **********************************************
                   Navigation
  ********************************************** -->
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
                    <li class="nav-item active">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/involved.php">Get Involved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://defnotdevs.greenriverdev.com/305/Sprint/multiStepForm.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<!-- **********************************************
                    Start of Page
  ********************************************** -->
    <div class="hero-image mt-5">
        <div class="hero-text text-white text-center font-weight-bolder">
            <h1 id="herosection">St James Outreach Center</h1>
            <h5>Helping the Kent school district for almost 30 years.</h5>
        </div>
    </div> <!-- hero image and text div-->

<!-- **********************************************
                        Body
  ********************************************** -->
    <div class="container mt-5 mb-5 border border-dark rounded text-center" id="landing-container">
        
        <br>
        <br>

        <!-------------DONATE ------------------>
        <div class="container">
            <h3><strong>Thank you for your interest in helping our community.</strong></h3>
            <div class="row row-cols-1">
                <div class="col">
                    <section class="card mb-5">
                        <img class="card-img-top " src="https://media.istockphoto.com/photos/friends-linking-arms-in-unity-picture-id1199706305?b=1&k=6&m=1199706305&s=170667a&w=0&h=HBr55sRC9x94mY7l2gZwfVt_94WSlLUmYiOtZ5Qe4mo=" alt="DonorsComingTogether">
                        <div class="card-body">
                            <h4 class="card-title"><strong>Together We Can</strong></h4>
                                
                            <p class="card-text">Make a difference in your community. Help out your neighbors today by donating online. We are always accepting canned goods, non perishables, diapers, personal/feminine hygiene items.</p>
                            
                            <a href="http://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H9ERUZQAKHFUA" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Give Now</a>
                        </div>
                    </section><!-- card -->
                </div>
            </div>
        </div>
    </div>

        <!-------------VOLUNTEER ------------------>
    <div class="container mt-5 mb-5 border border-dark rounded text-center landing-container">
        <div class = "container">
            <br>
            <h3><strong>Volunteer Opportunities</strong></h3>
            <div class="row row-cols-1 row-cols-sm-2">
                <div class="col">
                    <section class="card mb-5" id="thrift">
                        <img class="card-img-top" src="https://images.freeimages.com/images/premium/small-comps/9272/9272125-shopping-for-clothes.jpg" alt="Thrift Shop">
                        <div class="card-body">
                            <h4 class="card-title">Volunteer at our Thrift Shop</h4>
                            <h5 class="card-subtitle text-secondary">Email <a href="mailto:jcinta@stjameskent.org">jcinta@stjameskent.org</a> for more information</h5>
                            <p class="card-text">Volunteers are needed for weekdays
                                and sale days. Hours are flexible.</p>
                        </div>
                    </section><!-- card -->
                </div>
                <div class="col">
                    <section class="card mb-5" id="office">
                        <img class="card-img-top" src= "https://images.pexels.com/photos/3063/person-woman-smartphone-calling.jpg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Phone image">
                        <div class="card-body">
                            <h4 class="card-title">Volunteer in our office</h4>
                            <h5 class="card-subtitle text-secondary">Email <a href="mailto:postrander@stjameskent.org">postrander@stjameskent.org</a> for more information</h5>
                            <p class="card-text">You can make a difference simply by answering a phone call.
                                 Help us connect to those who need our help the most and make a meaningful
                                impact on lives around our neighborhood.</p>
                        </div>
                    </section><!-- card -->
                </div>
            </div>
        </div>
    </div>

        <!-------------SEASONAL ------------------>
    <div class="container mt-5 mb-5 border border-dark rounded text-center landing-container">
        <div class = "container">
            <br>
            <h3><strong>Seasonal Opportunities</strong></h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <section class="card mb-5">
                        <img class="card-img-top" src="https://www.shedoesthecity.com/wp-content/uploads/files/2017/11/coats.jpg" alt="winter">
                        <div class="card-body">
                            <h4 class="card-title">Winter Drive</h4>
                            <h5 class="card-subtitle text-secondary">Fall/Winter</h5>
                            <p class="card-text">As the seasons change, so do our community needs.
                                Help us keep Kent warm by donating gloves, socks, and hand warmers.</p>
                        </div>
                    </section><!-- card -->
                </div>
                <div class="col">
                    <section class="card mb-5">
                        <img class="card-img-top" src= "https://cdn.pixabay.com/photo/2017/02/26/08/49/ruler-2099742_960_720.jpg" alt="School Supplies">
                        <div class="card-body">
                            <h4 class="card-title">Back to School Drive</h4>
                            <h5 class="card-subtitle text-secondary">End of Summer/Early Fall</h5>
                            <p class="card-text">Keep our community children eager to learn. We ask for backpacks, and other school supplies. </p>
                        </div>
                    </section><!-- card -->
                </div>
                <div class="col">
                    <section class="card mb-5">
                        <img class="card-img-top" src= "https://cdn.pixabay.com/photo/2017/11/24/18/27/christmas-2975401_960_720.png" alt="Gifts/Presents">
                        <div class="card-body">
                            <h4 class="card-title">Angel Tree</h4>
                            <h5 class="card-subtitle text-secondary">Winter</h5>
                            <p class="card-text">This seasonal donation helps keep joy and hope alive for local families. Help give by bringing in christmas gifts.</p>
                        </div>
                    </section><!-- card -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- **********************************************
                    Footer
  ********************************************** -->
    <footer class="text-white bg-dark">
        <div class="container">
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
    
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>