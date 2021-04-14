<?php
     session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prices</title>
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
<div class="container mt-1">
    <div class="" >
        <form action="../includes/handleprice.php" method="POST" class="bg-success p-4"  style="border-radius: 30px 0px 30px 0px;">
            <div  class="fs-1 text-center fw-bold">
                <p>Enter the price  for the items </p>
            </div>
            <?php
                if (isset($_SESSION['status']))
                {
                    ?>

                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Thanks!</strong> Prices Added successfully -:
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <?php

                    unset($_SESSION['status']);
                }
            ?>
            <div class="row">
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Orange Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="orange" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold    ">Onion Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="onion" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Spinach Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="spinach" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Tomatoes Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="tomato" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Avocado Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="avocado" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Potatoes Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="potato" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Mangoes Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="mango" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Banana Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control " name="banana" aria-label="Amount (to the nearest Ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="col">
                    <label for="basic-url" class="form-label fs-4 text-white fw-bold">Pineapples Price</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold">Ksh</span>
                        <input type="number" class="form-control" name="pineapple" aria-label="Amount (to the nearest ksh)" placeholder=" only number are accepted" required>
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="col-4 p-1" style="margin: 0 auto;">
                <input type="submit"  class="btn btn-outline-warning form-control fs-4 fw-bold p-3 " name="sendprice" value="Submit" style="border-radius: 30px;">
            </div>

        </form>

    </div>

</div>


</body>
</html>



