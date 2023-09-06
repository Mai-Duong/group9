<?php
session_start();
$sql_danhmuc = "SELECT * FROM tbl_danhmuc";
$query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>

<div class="menu">
    <ul class="list_menu">
        <a href="index.php">
            <li>Trang chủ</li>
        </a>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
            ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"> <?php echo $row_danhmuc['tendanhmuc'] ?> </a></li>
            <?php
        }
        ?>
        <li><a href="index.php?quanly=giohang">Giỏ Hàng</a></li>

        <?php
        if (isset($_SESSION['dangky'])) {
            ?>
            <li>
                <a href="index.php?dangxuat=1">Đăng xuất</a>
            </li>
            <li>
                <a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a>
            </li>
            <?php
        } else {
            ?>
            <li>
                <a href="index.php?quanly=dangky">Đăng ký</a>
            </li>
            <?php
        }
        ?>

        <!-- <li><a href="index.php?quanly=dangky">Đăng ký</a></li> -->
        <li><a href="index.php?quanly=tintuc">Tin Tức</a></li>
        <li><a href="index.php?quanly=lienhe">Liên Hệ</a></li>

    </ul>
    <form action="index.php?quanly=timkiem" method="POST" class="search-form">
        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" class="search-input">
        <input type="submit" name="timkiem" value="Tìm kiếm" class="search-button">
    </form>
    <style>

        .search-form {
            border-radius: 5px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            overflow: hidden;
            padding-top: 5px;
        }

        .search-input {
            border: none;
            padding: 10px;
            width: 70%;
            font-size: 16px;
        }

        .search-button {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
    </style>

</div>