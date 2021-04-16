<?php
include 'config.php';

if (isset($_POST['send'])){
    $fname=trim($_POST['fname']);
    $sname=trim($_POST['sname']);
    $email=trim($_POST['email']);
    $mobile=trim($_POST['mobile']);
    $feedback=trim($_POST['feedback']);

     $query="INSERT INTO `feedback_table`(`fname`, `sname`, `email`, `mobile`, `feedback`) 
                                  VALUES ('$fname','$sname','$email','$mobile','$feedback')";
     $result=mysqli_query($connect,$query);
     if ($result){
         $_SESSION['feedback']=" for your feedback";
         header('Location:../index.php');
     }else{
         $_SESSION['no_feedback']="Your feedback was not Sent. Try Again";
     }


}else{
    $_SESSION['Error_feed']="* This field is empty";
}

