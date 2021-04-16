<?php
include '../includes/loginhander.php';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/bootstrap-icons"></script>

    <!--    //font awesome-->
    <link href="../fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome/css/brands.css" rel="stylesheet">
    <link href="../fontawesome/css/solid.css" rel="stylesheet">

</head>
<style>
    #signup{
        background-color: #bc2eb1;
        border-radius:0 0 30px 30px;
        /*margin: auto 0;*/
        /*padding: 30px 0;*/
    }
    #terms{
        text-align: left;
    }

    }
    #formhead{
        background-color: cornflowerblue;
        border-radius: 15px 15px ;
        padding: 10px;
        border-bottom: 2px double #000000;
        /*margin-bottom: 2px;*/
        text-align: center;
        overflow: hidden;
    }

</style>
<body>
<div class="container mt-1">
    <div style="margin: 0 auto; width: 60%; ">
        <div class="row bg-success p-1" id="formhead" style="border-radius: 15px 15px 0 0;">
            <div class="col-4" >
                <i class="fas fa-user fa-8x" style="border-radius: 50%; background-color: #badbcc; padding: 10px; overflow: hidden"></i>
            </div>
            <div class="col-8 pt-5" >
                <p class="fs-2 fw-bolder  text-white">Login in below</p>
            </div>

        </div>
        <div class="row">
            <form action="../includes/loginhander.php" method="post" class="text-center bg-success" id="signup">
            <div>
                <div class="row p-2">
                    <div class="col-12 input-group">
                        <span class="input-group-text bg-dark text-light">Username : &nbsp;&nbsp;</span>
                        <input type="email" class="form-control fs-5 p-3" name="username" placeholder="Enter your email here" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12 input-group">
                        <span class="input-group-text bg-dark text-light">Your Password:</span>
                        <input type="password" class="form-control fs-5 p-3" name="password" placeholder="Password" required>
                    </div>

                </div>
                <h3 class="text-center" style="color: #bb2d3b;">

                    <?php
                    if (isset($_SESSION['loginerr'])){
                        echo $_SESSION['loginerr'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </h3>

                <div class="row ">
                    <div >
                        <button type="submit" class="btn btn-outline-warning mt-1 fs-5 fw-bold p-2  col-4" name="submit" VALUE="Login">Login</button>
                    </div>
                </div>

                <div class="row mt-1">
                    <div >
                        <h5>Don't have an account? &nbsp;<a href="../index.php" style="text-decoration: none; color: #b6d4fe">Sign up</a></h5>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>

</div>


</body>
</html>
