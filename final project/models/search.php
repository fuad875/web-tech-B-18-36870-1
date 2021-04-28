<?php

include("db_conn.php");

if (isset($_GET['key'])) {
    $keyword = $_GET['key'];

    $sql = "SELECT * FROM `cart_item` WHERE name LIKE '%$keyword%'";

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        ?>

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
        <?php
    }



} else {
    $keyword = "";

}
