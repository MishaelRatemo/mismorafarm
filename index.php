<?php
   // session_start();
    include 'includes/signuphandler.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mismora Farm</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/bootstrap-icons"></script>

    <!--    //font awesome-->
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">

</head>
<style>
    #abtus{
        overflow: hidden;

        background: #edc0bf;
        background: linear-gradient(90deg, #edc0bf 0,#c4caef 58%);
    }
    #abt1{
        padding: 5px;
        background: rgba(125, 155, 9, .1);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(5px);
        border-radius: 1rem;
    }
    #abt2{
        padding: 5px;
        background-color: seagreen;
    }

    #abt1:hover{
        background-color: #0f5132;
        background: linear-gradient(90deg, #edc0bf 0,#c4caef 58%);
    }

    .ZZZ {
        height: 300px; /* Modify this according to your need */
        overflow: hidden; /* Removing this will break the effects */
    }

    .zoom img {
        transition: transform 2s, filter 1.5s ease-in-out;
        transform-origin: center center;
        filter: brightness(50%);
    }

    /* The Transformation */
    .zoom:hover img {
        filter: brightness(100%);
        transform: scale(1.3);
    }
</style>
<body>
<div class="container-fluid">
    <?php
    //faile to reh
        if (isset($_SESSION['error']))
    {
        ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ATTENTION!!</strong> <?php echo$_SESSION['error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php

        unset($_SESSION['error']);
    }
        //pass error
        if (isset($_SESSION['error']))
    {
        ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>ATTENTION!!</strong> <?php echo$_SESSION['pass_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php

        unset($_SESSION['error']);
    }
        if (isset($_SESSION['status']))
        {
            ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thanks!</strong> You Registered Successfully -:
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php

            unset($_SESSION['status']);
        }
    ?>
    <header class="p-2 bg-success  text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img src="images/logo.PNG" alt="logo" height="100" width="">
                </a>

                <ul class="  nav col-12 col-lg-auto me-lg-auto mb-2 nav-tabs justify-content-center mb-md-0">
                    <li><a href="#home" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="#products" class="nav-link px-2 text-white">Products</a></li>
                    <li><a href="frontends/login.php" class="nav-link px-2 text-white">Shop here</a></li>
                    <li><a href="#aboutus" class="nav-link px-2 text-white">About Us</a></li>
                    <li><a href="#contactus" class="nav-link px-2 text-white">Contact Us</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search...">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">Login</button>
                    <button type="button" class="btn btn-outline-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign-up</button>

                    <!-- Modal for sign up -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark text-center" id="staticBackdropLabel" > Register </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="includes/signuphandler.php" method="post">
                                    <div class="modal-body text-dark">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="SurName" name="surname" required>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Your Address" name="address" required>
                                            </div>
                                            <div class="col">
                                                <input type="number" class="form-control" placeholder="Mobile Number" name="mob_number" required>
                                            </div>
                                        </div>
                                        <div class="row mb-1 p-2">
                                            <input type="email" class="form-control" placeholder="Enter your Email" name="email" required>
                                        </div>
                                        <div class="row mb-2 p-2">
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                                        </div>
                                        <div class="row mb-2 p-2">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="conf_password" required>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <p class="text-dark">Already have an Account? <a href="index.php">Login</a></p>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" name="signup" id="alert" >Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- Modal for Login -->
                    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header p-2 bg-success">
                                    <h5 class="modal-title text-dark text-white p-2" id="staticBackdroploginLabel" > Welcome Back! </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>

                                <form action="includes/loginhander.php" method="post" class="">
                                    <div class="modal-body text-dark p-3" style="background-image: url(images/fruits.jpg)">

                                        <div class="row mb-2 p-3">
                                            <input type="email" class="form-control p-3" placeholder="Enter your Email" name="username" required>
                                        </div>
                                        <div class="row mb-2 p-3">
                                            <input type="password" class="form-control p-3" placeholder="Enter Password" name="password" required>
                                        </div>

                                    </div>
                                    <div class="modal-footer p-2">
                                        <p class="text-dark">Don't have an Account? <a href="index.php">Sign Up</a></p>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success" name="submit" >Login</button>
                                    </div>
                                </form>




                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div id="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
                <div class="carousel-item active">
                    <img src="images/mismora.PNG" height="550"  class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mismora Fam Tags</h5>
                        <p>A tag to be given when you visit us</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/mismora_bags.PNG" height="550" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mismora Farm Bags</h5>
                        <p>Shop with us and get a bag from us!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/mismora_cup.PNG" height="550"  class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mismora Farm</h5>
                        <p> Our products are packed in our very own container</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    <div id="products">
        <div class="bg-success p-4 text-center text-white mt-1">
            <h1 class="fs-3"> OUR PRODUCTS </h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col ">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/orange.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ORANGES</h5>
                        <p class="card-text">Natural oranges that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                        <!--<button class="btn btn-warning"> @ Ksh 18 Only</button>
                        <button  class="btn btn-success"><a href="login.php" style="text-decoration: none; color: coral;"></a></button>-->

                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> Updated recently</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/spinach.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Spinach</h5>
                        <p class="card-text">Garden Spinach that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/onion1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Onion</h5>
                        <p class="card-text">Ranginng from Bulb and Spring Onions that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/mangoripe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mangoes</h5>
                        <p class="card-text">Get Graphted and indigineous Mangoes that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/tomatoes.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomatoes</h5>
                        <p class="card-text">Get the best tomatoes that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/pineaple.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pineapple</h5>
                        <p class="card-text">Juicy Pineapple that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/banana.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Banana</h5>
                        <p class="card-text">Indigenous Banana that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/potato.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Potatoes</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 zoom ZZZ">
                    <img src="images/passion.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Passion fruit</h5>
                        <p class="card-text">Natural oranges that are grown without using
                            chemical and we use organic manure. No chemicals No GMOs Get the best quality</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="aboutus" >
        <div class="bg-success text-center p-4 mb-1 text-white fs-5">
            <h1 class=""> About US</h1>
        </div>
        <div class="row">
            <div class="col-4" style="overflow: hidden;">
                <div>
                    <h3 class="bg-success p-2"> Our Story </h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xHND5aPCdvU?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A modi obcaecati rem unde vitae! Eaque eligendi est et explicabo fugit ipsum labore laudantium nesciunt, quam rerum sed sint soluta tenetur.</p>
                </div>
                <div class="col-8" id="abtus" style="background-image: url(images/logo.PNG); background-repeat:no-repeat">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-center bg-success p-2"> Our Location </h2>
                            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120458.72262382868!2d37.90173821261339!3d-1.6449928615524747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x95ff4272073aada5!2sMusili%20Farm%2C%20Mosa%20-%20Kitui!5e0!3m2!1sen!2ske!4v1618548828577!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </p>
                        </div>
                        <div class="col text-center">
                            <h2 class="text-center bg-success p-2"> Background   </h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad alias consequuntur deserunt est fuga, ipsum itaque magnam molestias optio porro quae ratione recusandae reiciendis rerum similique sint voluptatem? Nemo?
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at dolor eos et harum iure nulla officiis quaerat tempore tenetur? Amet asperiores aspernatur deleniti dicta dolor enim id, impedit molestiae.</p>
                        </div>
                    </div>
            </div>

        </div>
    </div>
    <div id="contactus">
        <div class="bg-success text-center p-4 text-white fs-5">
            <?php
                if (isset($_SESSION['feedback']))
                {
                    ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thank you!!</strong> <?php echo $_SESSION['feedback']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php

                    unset($_SESSION['error']);
                }
            ?>

            <h1 class=""> Contact Us Below</h1>


        </div>
        <div class="card mb-3"  >
            <div class="row g-0">
                <div class="col-md-4 bg-success p-2 " style="overflow:hidden;">
                    <h3 class="text-white text-center">Reach us out via.... </h3>
                    <img src="images/contactpic.PNG" alt="...">
                    <div class="text-white text-center fs-4 fw-bold">
                        <p>Tel: +0701-666-555</p>
                        <p> Mail: mismorafarm@farm.ke</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body bg-success">
                        <h3 class="text-center text-white">Give us your Feedback</h3>
                        <form action="includes/contactushandler.php" method="post" >
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-3" style="border-bottom: 2px solid #adadad;">
                                        <input type="text" class="form-control" id="floatingFname" name="fname" placeholder="James">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                    <p class="text-danger fw-bold">
                                        <?php
                                        if (isset($_SESSION['Error_feed'])){
                                            echo $_SESSION['Error_feed'];
                                            unset($_SESSION['Error_feed']);
                                        }
                                        ?>
                                    </p>

                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3" style="border-bottom: 2px solid #adadad;">
                                        <input type="text" class="form-control" id="floatingSname" name="sname" placeholder="Kamau ">
                                        <label for="floatingInput">Surname</label>
                                    </div>
                                    <p class="text-danger fw-bold">
                                        <?php
                                        if (isset($_SESSION['Error_feed'])){
                                            echo $_SESSION['Error_feed'];
                                            unset($_SESSION['Error_feed']);
                                        }
                                        ?>
                                    </p>
                                </div>

                            </div>
                            <div class="form-floating mb-3" style="border-bottom: 2px solid #adadad;">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <p class="text-danger fw-bold">
                                <?php
                                if (isset($_SESSION['Error_feed'])){
                                    echo $_SESSION['Error_feed'];
                                    unset($_SESSION['Error_feed']);
                                }
                                ?>
                            </p>

                            <div class="form-floating mb-3" style="border-bottom: 2px solid #adadad;">
                                <input type="tel" class="form-control" id="floatingMobile" name="mobile"  placeholder="+0000 000 000">
                                <label for="floatingMobile">Mobile</label>
                            </div>

                            <p class="text-danger fw-bold">
                                <?php
                                if (isset($_SESSION['Error_feed'])){
                                    echo $_SESSION['Error_feed'];
                                    unset($_SESSION['Error_feed']);
                                }
                                ?>
                            </p>

                            <div class="form-floating mb-3" style="border-bottom: 2px solid #adadad;">
                                <textarea class="form-control" placeholder="Leave a comment here" name="feedback" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>

                            <p class="text-danger fw-bold">
                                <?php
                                if (isset($_SESSION['Error_feed'])){
                                    echo $_SESSION['Error_feed'];
                                    unset($_SESSION['Error_feed']);
                                }
                                ?>
                            </p>

                            <div class="col-6" style="margin: 0 auto;">
                                <input class="btn-warning fs-1" type="submit" name="send" value="Send Message" style="padding: 5px; width: 100%;  border-radius: 20px; " >
                            </div>

                            <p class="text-warning fw-bold">
                                <?php
                                if (isset($_SESSION['no_feedback'])){
                                    echo $_SESSION['no_feedback'];
                                    unset($_SESSION['no_feedback']);
                                }
                                ?>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
<!--<script>
    document.getElementById('alert')
        .addEventListener('click', function() {
            /* [… code saving data …] */
            alert('Thanks for Registering!! You can now Log in in home Page');
        });
</script>-->
</html>