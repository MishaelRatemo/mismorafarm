<?php
session_start();
include "config.php";

/*if (isset($_POST['signup'])){
    $firstname=$_POST['first_name'];
    $surname=$_POST['surname'];
    $address=$_POST['address'];
    $mob=$_POST['mob_number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conf_pass=$_POST['conf_password'];

    // verify the password and hash them

        // validate minimum requirements of password ... characters
        if (strlen($password)<8){
            $pass_error="Password MUST be 8 character and above";
            echo $pass_error;
        }else{
            $store_pass=password_hash($password,PASSWORD_DEFAULT);
        }
        // check if the passwords are the same
        if ($conf_pass!=$password){
            $pass_err="Password MUST be the same/match";
            echo $pass_err;
        }else{
            $store_conf_pass=password_hash($conf_pass,PASSWORD_DEFAULT);
        }

     //insert data to table
   if (empty($pass_error) and empty($pass_err)){
        $sql="INSERT INTO `customers`( `first_name`, `surname`, `address`, `mobile_num`, `email`, `password`) 
                              VALUES ('$firstname','$surname','$address',$mob,'$email',$store_pass)";
            $result=mysqli_query($connect,$sql);

            if ($result){
                $msg=" Registered Successfully";
                echo $msg;
            }else{
                //$msg_err=;
                echo "Failed to register $sql".mysqli_error($connect);
            }

    }


}
mysqli_close($connect);*/

if (isset($_POST['signup'])){

    $fname=mysqli_real_escape_string($connect,$_POST['first_name']);
    $sname=mysqli_real_escape_string($connect,$_POST['surname']);
    $address=mysqli_real_escape_string($connect,$_POST['address']);
    $mobile=mysqli_real_escape_string($connect,$_POST['mob_number']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $pass=mysqli_real_escape_string($connect,$_POST['password']);
    $conf_pass=mysqli_real_escape_string($connect,$_POST['conf_password']);

    // verify the password and hash them

    // validate minimum requirements of password ... characters
    if (strlen($pass)<8){
        $pass_error="Password MUST be 8 character and above";
        echo $pass_error;
    }else{
        $new_pass=password_hash($pass,PASSWORD_DEFAULT);
    }
    // check if the passwords are the same
    if ($conf_pass!=$pass){
        $pass_err="Password MUST be the same/match";
        echo $pass_err;
    }else{
        $store_conf_pass=password_hash($conf_pass,PASSWORD_DEFAULT);
    }

    //check if user exists
    $sql_check="SELECT * FROM `customers` WHERE  email='$email'";
    $check_exist=mysqli_query($connect,$sql_check);

    if (mysqli_num_rows($check_exist)>0){
        $_SESSION['error']="Failed to Register: EMAIL ALREADY EXISTS!! Use different ";
        header('Location:../index1.php');

    }else{


        $sql="INSERT INTO `customers`(`first_name`,`surname`,`address`,`mobile_num`,`email`,`password`) 
                               VALUES('$fname','$sname','$address','$mobile','$email','$new_pass')";
        $result=mysqli_query($connect,$sql);
        if ($result){
            $_SESSION['status']="Registered Successfully !! ";
            //echo "<script> alert('Registered Successfully !!') ; </script>      ";
            header('Location:../index1.php');
        }else{
            echo "Failed to Insert data $sql".mysqli_error($connect);
        }
    }

}