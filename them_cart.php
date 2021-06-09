<?php
include 'connect.php';
if (isset($_POST['them_cart'])) {
    // if (isset($_GET['maspt'])) {
    $maspt = $_GET['maspt'];
    $sql = "select*from product_index where product_id=$maspt";
    $kq = $connect->query($sql)->fetch();
    $cart_name = $kq['product_name'];
    $cart_price = $kq['product_price'];
    $cart_image = $kq['product_image'];
    // }

    $cart_quantity = $_POST['cart_quantity'];
    $sqlcart = "insert into cart values(null,'$cart_name','$cart_price','$cart_image','$cart_quantity')";
    $kq = $connect->exec($sql);
    if ($kq == 1) {
        echo "thanh cong";
    } else {

        echo "loi";
    }
}
