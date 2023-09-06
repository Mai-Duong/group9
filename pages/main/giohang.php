<p>Giỏ hàng</p>

<?php
if (isset($_SESSION['dangky'])) {
    echo 'Xin chao ' . '<span style="color:red">' . $_SESSION['dangky'] . '</span>';

    echo '----' . $_SESSION['id_khachhang'];
}
?>

<?php
if (isset($_SESSION['cart'])) {
}
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th.id-column {
        width: 3%;
        /* Điều chỉnh kích thước của cột Id ở đây */
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    td img {
        max-width: 50px;
        max-height: 50px;
    }

    .actions {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .actions a {
        text-decoration: none;
        margin: 0 5px;
        color: #333;
    }

    .total {
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .total p {
        font-weight: bold;
    }

    .checkout {
        text-align: center;
        margin-top: 10px;
    }

    .checkout a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .empty-cart {
        text-align: center;
        margin-top: 20px;
    }

    p.empty-cart-message {
        text-align: center;
        font-weight: bold;
        color: #ff0000;
        /* Màu đỏ */
        font-size: 18px;
        /* Kích thước chữ */
    }

    .total {
        text-align: center;
    }

    .total p {
        margin-bottom: 5px;
    }
</style>

<table>
    <tr>
        <th class="id-column">Id</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
            $tongtien += $thanhtien;
            $i++;
            ?>
            <tr>
                <td>
                    <?php echo $i; ?>
                </td>
                <td>
                    <?php echo $cart_item['masp']; ?>
                </td>
                <td>
                    <?php echo $cart_item['tensanpham']; ?>
                </td>
                <td> <img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="30%"> </td>
                <td>
                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i
                            class="fa-solid fa-plus"></i></a>

                    <?php echo $cart_item['soluong']; ?>
                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i
                            class="fa-solid fa-minus"></i></a>
                </td>
                <td>
                    <?php echo number_format($cart_item['giasp'], 0, ',', '.') . 'vnđ'; ?>
                </td>
                <td>
                    <?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ'; ?>
                </td>
                <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a></td>
            </tr>
            <?php
        }
        ?>
        <tr class="total">
            <td colspan="8">
                <p>Tổng tiền :
                    <?php echo number_format($tongtien, 0, ',', '.') . 'vnđ'; ?>
                </p>
                <p><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
            </td>
        </tr>
        <tr class="checkout">
            <td colspan="8">
                <?php if (isset($_SESSION['dangky'])) { ?>
                    <p><a href="./pages/main/thanhtoan.php" class="checkout-button">Đặt hàng</a></p>
                <?php } else { ?>
                    <p><a href="index.php?quanly=dangky" class="checkout-button">Đăng ký đặt hàng</a></p>
                <?php } ?>
            </td>
        </tr>
        <?php
    } else {
        ?>
        <tr>
            <td colspan="8">
                <p class="empty-cart-message">Hiện tại giỏ hàng trống</p>
            </td>
        </tr>
        <?php
    }
    ?>
</table>