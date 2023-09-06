<div class="main">

    <?php
    include("./pages/sidebar/sidebar.php");
    ?>

    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        }else{
            $tam =' ';
        }
        if($tam=='quanlydanhmuc'){
            include("./pages/main/danhmuc.php");
        }else if($tam=='giohang'){
            include("./pages/main/giohang.php");

        }else if($tam=='tintuc'){
            include("./pages/main/tintuc.php");

        }else if($tam=='lienhe'){
            include("./pages/main/lienhe.php");

        }else if($tam=='sanpham'){
            include("./pages/main/sanpham.php");

        }else if($tam=='dangky'){
            include("./pages/main/dangky.php");

        }else if($tam=='thanhtoan'){
            include("./pages/main/thanhtoan.php");

        }else if($tam=='dangnhap'){
            include("./pages/main/dangnhap.php");

        }else if($tam=='timkiem'){
            include("./pages/main/timkiem.php");

        }else if($tam=='camon'){
            include("./pages/main/camon.php");

        }else if($tam=='thaydoimatkhau'){
            include("./pages/main/thaydoimatkhau.php");

        }else{
            include("./pages/main/index.php");
        }
        ?>
    </div>
</div>
<div class="clear">

</div>