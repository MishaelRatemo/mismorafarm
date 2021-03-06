<?php
//session_start();
$total="";
//include '../includes/config.php';
require_once '../includes/loginhander.php';
$customer=$sub_totals=$item_id=$item_name=$item_price=$item_quantity='';


    if (isset($_POST['add_to_cart'])){
        if (isset($_SESSION['shop_cart'])){
            $item_array_id = array_column($_SESSION["shop_cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
                $count = count($_SESSION["shop_cart"]);
                $item_array = array(
                    'item_id'			=>	$_GET["id"],
                    'item_name'			=>	$_POST["hidden_name"],
                    'item_price'		=>	$_POST["hidden_price"],
                    'item_quantity'		=>	$_POST["quantity"]
                );
                $_SESSION["shop_cart"][$count] = $item_array;

                /*echo  $item_id=$item_array['item_id'];
                echo   $item_name=$item_array['item_name'];
                echo  $item_price=$item_array['item_price'];
                echo   $item_quantity=$item_array['item_quantity'];*/

            }
            else
            {
                echo '<script>alert("Item Already Added")</script>';
            }
        }else
        {
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shop_cart"][0] = $item_array;

        }
        if (isset($_POST['place_order'])) {
            if (isset($_SESSION['user'])) {

                $customer = $_POST[$_SESSION['user']];

                $sql_query = "INSERT INTO `orders_tble`(`customer_mail`, `item_id`, `item_name`, `item_price`, `item_qty`, `totals`)
                                        VALUES ('$customer','$item_id','$item_name','$item_price','$item_quantity','$sub_totals')";

                $q_result = mysqli_query($connect, $sql_query);

                if ($q_result) {
                    echo 'Order placed';
                    //header('Location:../index.php');
                } else {
                    echo 'Order NOT Placed' . mysqli_error($connect);
                }


            }

        }
    }
/*if (isset($_POST['place_order'])) {
    if (isset($_SESSION['user'])) {

        $customer = $_POST[$_SESSION['user']];

        $sql_query = "INSERT INTO `orders_tble`(`customer_mail`, `item_id`, `item_name`, `item_price`, `item_qty`, `totals`)
                                        VALUES ('$customer','$item_id','$item_name','$item_price','$item_quantity','$sub_totals')";

        $q_result = mysqli_query($connect, $sql_query);

        if ($q_result) {
            echo 'Order placed';
            //header('Location:../index.php');
        } else {
            echo 'Order NOT Placed' . mysqli_error($connect);
        }


    }

}*/
    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
        {
            foreach($_SESSION["shop_cart"] as $keys => $values)
            {
                if($values["item_id"] == $_GET["id"])
                {
                    unset($_SESSION["shop_cart"][$keys]);
                    echo '<script>alert("Item Removed")</script>';
                    echo '<script>window.location="orders.php"</script>';
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mismora Farm | ORDER</title>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
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
	<body class="bg-success">
		<div class="container ">
            <div class="bg-light p-2">
                <div><a href="../backends/logout.php" class="btn text-decoration-none fw-bolder p-4 btn-warning mb-2 " style="float: right; clear: both;">Logout &nbsp;<i class="fa fa-sign-out-alt"></i></a></div>
                <br />
                <h3 align="center" class="bg-light">Mismora  - Home of Original Foods</a></h3><br />
                <h4 class="text-center text-success">You can make an order Below</h4>
            </div>
            <br>
            <div class="col-12">
                <div class="row">

                    <?php

                        $sql_query="SELECT * FROM `products_tbl` ORDER BY id ASC ";
                        $results=mysqli_query($connect,$sql_query);
                        $count=mysqli_num_rows($results);
                        if ($count>0){
                            while($row = mysqli_fetch_array($results))
                            {
                            ?>

                                    <div class="col-4 mb-2" style="float: left; clear: both;">
                                        <form method="post" action="orders.php?action=add&id=<?php echo $row["id"]; ?>">
                                            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                                <img src="../images/<?php echo $row["prod_image"]; ?>" class="img-responsive" /><br />

                                                <h4 class="text-info"><?php echo $row["prod_name"]; ?></h4>

                                                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

                                                <input type="text" name="quantity" value="1" class="form-control" />

                                                <input type="hidden" name="hidden_name" value="<?php echo $row["prod_name"]; ?>" />

                                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

                                            </div>
                                        </form>
                                    </div>

                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <div style="clear:both"></div>
            <br />
            <!--#################******** Cart Table-->

            <h3>Order Details</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-success">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
                    if(!empty($_SESSION["shop_cart"]))
                    {
                        $total = 0;
                        foreach($_SESSION["shop_cart"] as $keys => $values)
                        {
                           ?>
                            <tr>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td> <?php echo $values["item_price"]; ?></td>
                                <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                                <td><a href="orders.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger fw-bold">Remove</span></a></td>
                            </tr>
                            <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <td align="right"> <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <form action="orders.php" method="post">
                                <td colspan="4"  "><input type="submit" class="btn-outline-success form-control " name="place_order" value="Place Order" style="float: right; overflow: hidden; width: 30%;"> </td>
                            </form>
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
            </div>
        </div>
    </body>
</html>