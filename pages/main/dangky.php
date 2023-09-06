<?php
if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau =md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUES('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    if($sql_dangky){
        echo '<p style ="color:green">Bạn đã đăng ký thành công </p>';
        // $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);

        header('Location:index.php?quanly=giohang');
    }
}
?>


<h2 style="text-align:center; color: red;" >Đăng ký thành viên</h2>
<style type="text/css">
     body {
            /* font-family: Arial, sans-serif; */
            background-color: #f4f4f4;
        }

        /* .container {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        } */

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 98%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: black;
            text-decoration: none;
        }
</style>
<!-- <div class="containerr"> -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="hovaten">Họ và tên</label>
                <input type="text" id="hovaten" name="hovaten">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="dienthoai">Điện thoại</label>
                <input type="text" id="dienthoai" name="dienthoai">
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input type="text" id="diachi" name="diachi">
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu</label>
                <input type="password" id="matkhau" name="matkhau">
            </div>
            <div class="form-group">
                <input type="submit" name="dangky" value="Đăng ký">
                <a class="login-link" href="index.php?quanly=dangnhap">Đăng nhập nếu bạn đã có tài khoản</a>
            </div>
        </form>
    <!-- </div> -->