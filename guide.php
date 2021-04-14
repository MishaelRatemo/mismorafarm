<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("conneciton");
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
    echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="admin"){
?>
<script type="text/javascript">
    window.location.href="admin.php"</script>
<?php

}else{
    ?>
    <script type="text/javascript">
        window.location.href="user.php"</script>
    <?php

}
}else{
    echo 'no result';
}
}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Multi user login system</title>
</head>

<body>
<form method="post">
    <table>
        <tr>
            <td>Username:<input type="text" name="user" placeholder="enter your username"</td>

        </tr>
        <tr>
            <td>Password:<input type="text" name="pass" placeholder="enter your password"</td>
        </tr>
        <tr>
            <td>
                Select user type: <select name="usertype">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="Login" value="Login"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
session_start();
include '../includes/config.php';

if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass = $_POST['password'];

    // hash pass received
    $pass_hash=password_hash($pass,PASSWORD_DEFAULT);

    $sql="SELECT  `email`, `password` FROM `customers` WHERE email='$username'";
    $result=mysqli_query($connect,$sql);

    if (mysqli_num_rows($result)==1){
        $rows=mysqli_fetch_array($result);
        // verify password
        if (password_verify($pass,$rows['password'])){
            echo'<script type="text/javascript">alert("You are login successfully and you are logined as ' .$rows['email'].'")</script>';
            header('Location:');
        }else{
            echo 'wrong password';

        }
    }else{
        echo 'Wrong password and username';
    }



}

?>


/////////DASHBOAD ////////////
<div class="bg-info">
    <div>
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductPrice" aria-expanded="false" aria-controls="collapseExample">
                View  Product prices
            </button>
        </p>
        <div class="collapse multi-collapse" id="collapseProductPrice">
            <div class="card card-body">
                <?php
                /*$sql="SELECT `id`, `first_name`, `surname`, `address`, `mobile_num`, `email`, `password`, `user_type` FROM `customers`";
                $result=mysqli_query($connect,$sql);
                if ($result){
                    if (mysqli_num_rows($result)>0){  */?>

                <table class='table table-striped  table-hover'>
                    <thead class='table-dark'>
                    <tr><th colspan='14'><h2 CLASS='text-center fw-bolder' >Product Prices</h2></th></tr>
                    <tr>
                        <th>NO# </th>
                        <th>Orange</th>
                        <th>Onion.</th>
                        <th>Spinach</th>
                        <th>Tomato</th>
                        <th>Avocado</th>
                        <th>Potato</th>
                        <th>Mango</th>
                        <th > Banana</th>
                        <th >Pineapple</th>
                        <th > VIEW</th>
                        <th > EDIT</th>
                        <th > DELETE</th>
                    </tr>
                    </thead>
                    <tbody>

                    <!-- <?php
                    /*                                             while ($row = mysqli_fetch_array($result)){
                                                                     */?>
                                            <tr>
                                                <td> <?php /*$row['id'] */?></td>
                                                <td><?php /*$row['oranges'] */?></td>
                                                <td> <?php /*$row['onions'] */?></td>
                                                <td> <?php /*$row['spinach'] */?></td>
                                                <td> <?php /*$row['tomatoes'] */?></td>
                                                <td> <?php /*$row['avocado'] */?></td>
                                                <td> <?php /*$row['potatoes'] */?></td>
                                                <td> <?php /*$row['mangoes'] */?></td>
                                                <td> <?php /*$row['banana'] */?></td>
                                                <td> <?php /*$row['pineapples'] */?></td>

                                                 <?php
                    /*                                             }
                                                                */?>



                            --><?php
                    /*
                                                        }

                                                    }


                                                */?>


            </div>
        </div>
    </div>



</div>
<div class="bg-info">
    <div>
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProductPrice" aria-expanded="false" aria-controls="collapseExample">
                View  Product prices
            </button>
        </p>
        <div class="collapse multi-collapse" id="collapseProductPrice">
            <div class="card card-body">
                <?php
                /*$sql="SELECT `id`, `first_name`, `surname`, `address`, `mobile_num`, `email`, `password`, `user_type` FROM `customers`";
                $result=mysqli_query($connect,$sql);
                if ($result){
                    if (mysqli_num_rows($result)>0){  */?>

                <table class='table table-striped  table-hover'>
                    <thead class='table-dark'>
                    <tr><th colspan='14'><h2 CLASS='text-center fw-bolder' >Product Prices</h2></th></tr>
                    <tr>
                        <th>NO# </th>
                        <th>Orange</th>
                        <th>Onion.</th>
                        <th>Spinach</th>
                        <th>Tomato</th>
                        <th>Avocado</th>
                        <th>Potato</th>
                        <th>Mango</th>
                        <th > Banana</th>
                        <th >Pineapple</th>
                        <th > VIEW</th>
                        <th > EDIT</th>
                        <th > DELETE</th>
                    </tr>
                    </thead>
                    <tbody>

                    <!-- <?php
                    /*                                             while ($row = mysqli_fetch_array($result)){
                                                                     */?>
                                            <tr>
                                                <td> <?php /*$row['id'] */?></td>
                                                <td><?php /*$row['oranges'] */?></td>
                                                <td> <?php /*$row['onions'] */?></td>
                                                <td> <?php /*$row['spinach'] */?></td>
                                                <td> <?php /*$row['tomatoes'] */?></td>
                                                <td> <?php /*$row['avocado'] */?></td>
                                                <td> <?php /*$row['potatoes'] */?></td>
                                                <td> <?php /*$row['mangoes'] */?></td>
                                                <td> <?php /*$row['banana'] */?></td>
                                                <td> <?php /*$row['pineapples'] */?></td>

                                                 <?php
                    /*                                             }
                                                                */?>



                            --><?php
                    /*
                                                        }

                                                    }


                                                */?>


            </div>
        </div>
    </div>



</div>
