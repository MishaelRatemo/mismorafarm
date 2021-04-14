<?php
session_start();

include 'config.php';
if (isset($_POST['sendprice'])){

    $orange=mysqli_real_escape_string($connect,$_POST['orange']);
    $onion=mysqli_real_escape_string($connect,$_POST['onion']);
    $spinach=mysqli_real_escape_string($connect,$_POST['spinach']);
    $tomato=mysqli_real_escape_string($connect,$_POST['tomato']);
    $avocado=mysqli_real_escape_string($connect,$_POST['avocado']);
    $potato=mysqli_real_escape_string($connect,$_POST['potato']);
    $mango=mysqli_real_escape_string($connect,$_POST['mango']);
    $banana=mysqli_real_escape_string($connect,$_POST['banana']);
    $pineapple=mysqli_real_escape_string($connect,$_POST['pineapple']);

    $sql="INSERT INTO `prices`(`oranges`, `onions`, `spinach`, `tomatoes`, `avocado`, `potatoes`, `mangoes`, `banana`, `pineapples`) 
                       VALUES ('$orange','$onion','$spinach','$tomato','$avocado','$potato','$mango','$banana','$pineapple')";

    $results=mysqli_query($connect,$sql);
    if ($results){
        $_SESSION['status']="Prices Added successfully";
        //$msg="";
        header('Location:../backends/pricelist.php'); // change this to admin page
    }else{
        $msg_err="Faile to Add Prices $sql".mysqli_error($connect);
    }


}
?>