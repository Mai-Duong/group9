<?php
session_start();
include('../../admincp/config/config.php');
$id_khachhang = $_SESSION['id_khachhang'];
echo $_SESSION['id_khachhang'];
$code_order = rand(0, 9999);

$insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart, cart_status) VALUES ('" . $id_khachhang . "', '" . $code_order . "', 1)";

echo $insert_cart;


// $insert_cart = "INSERT INTO tbl_cart(id_khachhang, code_cart, cart_status) VALUE('" . $id_khachhang . "'.'" . $code_order . "',1)";
$cart_query = mysqli_query($mysqli, $insert_cart);

if ($cart_query) {
    // Thêm chi tiết giỏ hàng
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham, code_cart, soluongmua) VALUES ('$id_sanpham', '$code_order', '$soluong')";
        $details_query = mysqli_query($mysqli, $insert_order_details);

        if (!$details_query) {
            echo "Lỗi khi thêm chi tiết giỏ hàng: " . mysqli_error($mysqli);
        }
    }
} else {
    echo "Lỗi khi thêm giỏ hàng: " . mysqli_error($mysqli);
}
unset($_SESSION['cart']);
header('Location:../../index.php?quanly=camon');
?>