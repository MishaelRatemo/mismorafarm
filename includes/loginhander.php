<?php
session_start();
include '../includes/config.php';

$msg=$role="";
$name='';
if (isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass = $_POST['password'];

    $sql="SELECT  `email`, `password`,`first_name`,`user_type` FROM `customers` WHERE email='$username'";
    $result=mysqli_query($connect,$sql);

    if (mysqli_num_rows($result)==1) {
        $rows=mysqli_fetch_array($result);
        // verify password
        if (password_verify($pass,$rows['password'])){
            echo 'You have login successfully';

        }else{
            echo 'invalid';
        }

        //identify which type of user
        if ($rows['user_type']=="admin"){
            $_SESSION['Admin']=$rows['email'];
            $name=$rows['first_name'];
            header('Location:../backends/dashboard.php');
        }else{
            $_SESSION['user']=$rows['email'];
            header('Location:../frontends/orders.php');
        }

    }else{
        $msg="Invalid Username or Password";
        //header('Location:../frontends/login.php');
        echo $msg;
    }
}
echo $role;


