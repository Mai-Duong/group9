<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }
</style>
<table border="1" width="50%" style="border-collapse: collapse">
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
        <th>In</th>
    </tr>

    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        <td><?php if($row['cart_status']==1){
             echo '<a href = "./modules/quanlydonhang/xuly.php?code='.$row['code_cart'].' ">Đơn hàng mới </a> ';
        }else{
            echo 'Đã xem';
        } ?></td>
        <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
        </td>
        <td>
        <a href = "./modules/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart'] ?>">In đơn hàng</a>

        </td>
    </tr>
    <?php
    }
    ?>
</table>
