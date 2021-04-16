<?php
//send order
 include '../includes/config.php';

//require_once 'orders.php';
if (isset($_POST['place_order'])){
    if (isset($_SESSION['user'])){
        $customer=$_POST[$_SESSION['user']];
        $item_id=$_POST[$_GET['id']];
        $item_name=$_POST['hidden_name'];
        $item_price=$_POST['hidden_price'];
        $item_quantity=$_POST['quantity'];
        $sub_totals=$_POST[$total];

        echo $customer,$item_id,$item_name,$item_price,$item_quantity,$sub_totals;
        $sql_query="INSERT INTO `orders_tble`(`customer_mail`, `item_id`, `item_name`, `item_price`, `item_qty`, `totals`) 
                                      VALUES ('$customer','$item_id','$item_name','$item_price','$item_quantity','$sub_totals')";
        $q_result=mysqli_query($connect,$sql_query);

        if ($q_result){
            echo 'Order placed';
            //header('Location:../index.php');
        }else{
            echo 'Order NOT Placed'.mysqli_error($connect);
        }



    }

}