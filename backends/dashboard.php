<?php
//session_start();
include '../includes/loginhander.php';
require_once '../includes/config.php';
/*if (isset($_SESSION['Admin'])){
    echo $_SESSION['Admin'];
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mismora Farm</title>
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

<body>
<div class="container-fluid ">
    <div class="row">
        <div class="col-3  text-white bg-success" >
            <!--<div class="row" style="background-size: cover; background:  url(../images/logo.PNG);">
                <div class="col">
                    <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="../images/logo.PNG" alt="logo" height="100" width="">
                    </a>
                </div>
                <div class="col pt-4 fs-3 fw-bolder text-dark">
                    DASHBOARD
                </div>

            </div>-->
            <div class="b-example-divider"></div>

            <div class="p-3 bg-success text-white" >
                <a href="#" class="d-flex text-white align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <span class="fs-5 fw-bolder"> Admin Dashboard</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1 " >
                        <button class="btn   text-white  align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Home
                        </button>
                        <div class="dropdown bg-light show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li ><a href="#" class="dropdown-item link-dark rounded">Overview</a></li>
                                <li ><a href="#" class="dropdown-item link-dark rounded">Updates</a></li>
                                <li ><a href="#" class="dropdown-item link-dark rounded">Reports</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle text-white  align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Roles
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">Overview</a></li>
                                <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                <li><a href="#" class="link-dark rounded">Annually</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle text-white align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            Orders
                        </button>
                        <div class="collapse" id="orders-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark rounded">New</a></li>
                                <li><a href="#" class="link-dark rounded">Processed</a></li>
                                <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                <li><a href="#" class="link-dark rounded">Returned</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="b-example-divider"></div>



        </div>

        <div class="col-9   ">
            <div class="row bg-warning ">
                <div class="col-10">
                    <h2> Hello <?php echo $name; echo $_SESSION['Admin'];?></h2>
                </div>
                <!--           start of Log out tab-->
                <div class="col-2 btn-outline-warning">
                    <a href="logout.php" class="link-danger  text-decoration-none fw-bolder btn-outline-warning " >Logout &nbsp;&nbsp;<i class="fa fa-sign-out-alt"></i></a>
                </div>

            </div>
           <!-- ###### SYSTEM USERS####-->
            <div class="row">
               <!-- // CONTENT-->
               <!-- <div class="row">
                <p>
                    <a class="btn btn-primary col-10" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">VIEW PRODUCTSt </a>
                    <button class="btn btn-primary col-10" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">VIEW USERS</button>
                    <button class="btn btn-primary col-10" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
             <?php
                //select query
                $sql = "SELECT `id`, `first_name`, `surname`, `address`, `mobile_num`, `email`, `user_type` FROM `customers`";
                $result = mysqli_query($connect, $sql);
                $count=mysqli_num_rows($result);
                if ($count>0)
                {

                   echo "<table class='table table-striped  table-hover'>";
                       echo "<thead class='table-dark'>";
                            echo "<tr><th colspan='14'><h2 CLASS='text-center fw-bolder' >SYSTEM USERS</h2></th></tr>";
                            echo"<tr>";
                                echo "<th>NO# </th>";
                                echo "<th>First Name</th>";
                                echo "<th>Surname</th>";
                                echo "<th>Address</th>";
                                echo "<th>Mobile</th>";
                                echo "<th>Email</th>";
                                echo "<th>User Type</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";

                            while ($row=mysqli_fetch_array($result))
                            {
                               echo "<tr>";
                                    echo "<td>".$row['id'];"</td>";
                                    echo "<td>".$row['first_name'];"</td>";
                                    echo "<td>".$row['surname'];"</td>";
                                    echo "<td> ".$row['address'] ;"</td>";
                                    echo "<td>" .$row['mobile_num'] ;"</td>";
                                    echo "<td>" .$row['email'] ;"</td>";
                                    echo "<td> ".$row['user_type'] ;"</td>";
                                echo"</tr>";?>

                                <?php
                            }
                            ?>
                        </tbody>
                    </table>

                        <?php
                }else{
                    echo 'No record found';
                    }
                ?>
            </div>
            <hr>
            <!--############# PRODUCTS  ####-->
            <div>
                <?php
                //select query
                $sql = "SELECT * FROM `products_tbl` ";
                $result = mysqli_query($connect, $sql);
                $count=mysqli_num_rows($result);
                if ($result) {
                    if (mysqli_num_rows($result)){


                        echo "<table class='table table-dark  table-hover'>";
                         echo "  <thead class='table-info'>";
                          echo " <tr><th colspan='14'><h2 CLASS='text-center fw-bolder' >Products</h2></th></tr>";
                          echo " <tr>";
                               echo "<th>NO# </th>";
                                echo "<th>Product Name</th>";
                                echo "<th>Price</th>";
                                echo "<th>Image</th>";

                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            while ($row=mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                    echo "<td> ".$row['id'];"</td>";
                                    echo "<td>".$row['prod_name'];"</td>";
                                    echo "<td>" . $row['price']; "</td>";
                                    ?>
                                    <td> <img src="../images/<?php echo $row["prod_image"]; ?>" class="img-responsive" style="width: 80px; height: 60px; border-radius: 50%" /></td>
                                    <?php
                                echo "</tr>";

                            }

                            echo "</tbody>";
                        echo "</table>";


                    }else{
                        echo 'No record found';
                    }
                }
                ?>

            </div>
            <!--####### FEED BACKS ####-->

            <div>

                <?php
                $sql = "SELECT * FROM `feedback_table`";
                $result = mysqli_query($connect, $sql);
                $count=mysqli_num_rows($result);
                if ($result) {
                    if (mysqli_num_rows($result)){


                        echo "<table class='table table-dark  table-hover'>";
                                echo "  <thead class='table-info'>";
                                    echo " <tr><th colspan='14'><h2 CLASS='text-center fw-bolder' >Feed backs from visitors</h2></th></tr>";
                                    echo " <tr>";
                                        echo "<th>Feedback Id# </th>";
                                        echo "<th>Sender'Name</th>";
                                        echo "<th>Sende Mail</th>";
                                        echo "<th>Sender Mobile</th>";
                                        echo "<th>Comment</th>";
                                        echo "<th>Time Posted</th>";
                                    echo " </tr>";
                                echo " </thead>";
                                echo" <tbody>";

                                    while ($row=mysqli_fetch_array($result))
                                    {
                                        echo "<tr>";
                                            echo "<td> ".$row['feed_id'];"</td>";
                                            echo "<td>".$row['fname'].'  '.$row['sname'];"</td>";
                                            echo "<td>" . $row['email']; "</td>";
                                            echo "<td>" . $row['mobile']; "</td>";
                                            echo "<td>" . $row['feedback']; "</td>";
                                            echo "<td>" . $row['time_posted']; "</td>";

                                        echo "</tr>";

                                    }

                                echo "</tbody>";
                        echo "</table>";


                    }else{
                        echo 'No record found';
                    }
                }
                ?>


                ?>

            </div>



    </div>

</div>


</body>
</html>
