<?php
//session_start();
$total="";
//include '../includes/config.php';
require_once '../includes/loginhander.php';
$customer=$sub_totals=$item_id=$item_name=$item_price=$item_quantity='';
if (isset($_POST['place_order'])) {
    if (isset($_SESSION['user'])) {
        $customer = $_GET[$_SESSION['user']];
        $item_id = $_GET[$_GET['id']];
        $item_name = $_GET['hidden_name'];
        $item_price = $_GET['hidden_price'];
        $item_quantity = $_GET['quantity'];
        $sub_totals = $_GET[$total];

        //echo $customer, $item_id, $item_name, $item_price, $item_quantity, $sub_totals;
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

}
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
<body>
<div class="container bg-success">
    <br />
    <h3 align="center" class="bg-light">Mismora  - Home of Original Foods</a></h3><br />
    <br />
    <?php

    $sql_query="SELECT * FROM `products_tbl` ORDER BY id ASC ";
    $results=mysqli_query($connect,$sql_query);
    $count=mysqli_num_rows($results);
    if ($count>0){
        while($row = mysqli_fetch_array($results))
        {
            ?>
            <div class="row">
                <div class="col-md-4">
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
            </div>
            <?php
        }
    }
    ?>
    <div style="clear:both"></div>
    <br />
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
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
                        <td>Ksh. <?php echo $values["item_price"]; ?></td>
                        <td>Ksh. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="orders.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger fw-bold">Remove</span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Ksh. <?php echo number_format($total, 2); ?></td>
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
    </html><?php
