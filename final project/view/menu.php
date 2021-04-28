<?php
session_start();

include "db_conn.php";
if (isset($_POST['add_to_cart'])) {

    if (isset($_SESSION['cart'])) {



        $session_array_id = array_column($_SESSION['cart'], "id");

        if (!in_array($_GET['id'], $session_array_id)) { // when already in cart

            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']

            );
            $_SESSION['cart'][] = $session_array;
        }
    } else {
        $session_array = array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity" => $_POST['quantity']
        );
        $_SESSION['cart'][] = $session_array;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<style>
    .ca {
        background: #ffeb3b;
        padding: 14px 20px;
        font-size: 15px;
        line-height: 20px;
        color: #000;
        font-weight: 600;
        border-radius: 20px;
    }

    .pt-30 {
        padding-top: 30px;


    }

    input.form-control {
        text-align: center;
    }
</style>

<body>
    <div class="container-fluid pt-30">
        <div class="">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12">
                    <h2 class="text-center">Menu</h2>

                    <div class="form-group">
                        <input type="search" onkeyup="searchMenu()" class="form-control" id="search" placeholder="Search here...">
                    </div>

                    <div class="">

                        <div id='output' class="row"></div>

                        <div class="row">

                            <?php

                            $sql = "SELECT * FROM cart_item ";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="col-md-4 col-lg-4 col-sm-12">
                                    <form method="post" action="menu.php?id=<?= $row['id'] ?>">
                                        <img src="food/<?= $row['image'] ?>" style="height: 150PX; width: 100%;">
                                        <h2 class="text-center"><?= $row['name'] ?></h2>
                                        <h5 class="text-center">Tk<?= number_format($row['price'], 2); ?></h5>
                                        <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                        <input type="number" name="quantity" value="1" class="form-control">


                                        <input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add to Cart">
                                    </form>
                                </div>



                            <?php }



                            ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6 col-12">
                    <a href="home.php" class="ca">Back</a>
                    <h2 class="text-center">Item Selected</h2>
                    <?php
                    $total = 0;
                    $output = "";
                    $output .= "
                        <table class = 'table table-bordered table-striped'>
                        <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                        </tr>
                        ";

                    if (!empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $output .= "
                    <tr>
                    <td>" . $value['id'] . "</td>
                    <td>" . $value['name'] . "</td>
                    <td>" . $value['price'] . "</td>
                    <td>" . $value['quantity'] . "</td>

                    <td>tk" . number_format($value['price'] * $value['quantity']) . "</td>

                    <td>
                    <a href='menu.php?action=remove&id=" . $value['id'] . " '>
                    <button class='btn btn-danger btn-block'>Remove</button?
                    </a>
                    </td>

                        ";
                            $total = $value['quantity'] * $value['price'];
                        }

                        $totalPrice = 0;

                        foreach ($_SESSION['cart'] as $key => $value) {
                            $totalPrice += $value['quantity'] * $value['price'];
                        }

                        $output .= "
            <tr>
                <td colspan='3'></td>
                <td><b>Total price</b></td>
                <td>" . number_format($totalPrice, 2) . "</td>
                <td>
                <a href='menu.php?action=clearall' class='btn btn-warning'>
                    Clear
                </a>
            </td>
            </tr>
            ";
                    }

                    echo $output;

                    ?>
                </div>
            </div>

        </div>
    </div>
    <?php

    if (isset($_GET['action'])) {

        if ($_GET['action'] == "clearall") {
            unset($_SESSION['cart']);
        }

        if ($_GET['action'] == "remove") {

            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['id'] == $_GET['id']) {
                    unset($_SESSION['cart'][$key]);
                }
            }
        }
    }

    ?>


    <script>
        function searchMenu() {
            var input = document.getElementById('search')
            var output = document.getElementById('output')

            // AJAX = Asynchronous JavaScript & XML
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = _ => {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    console.log(xhttp.responseText);
                    output.innerHTML = xhttp.responseText;
                }
            }
            xhttp.open('GET', "search.php?key=" + input.value, true);
            xhttp.send();


        }
    </script>

</body>


</html>