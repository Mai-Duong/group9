<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/styleadmincp.css'>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body>
    <H3 class="title_admin">Welcome to Admin</H3>
    <div class="wrapper">
        <?php
        include("./config/config.php");
        include("./modules/header.php");
        include("./modules/menu.php");
        include("./modules/main.php");
        include("./modules/footer.php");
        ?>
    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript">
        new Morris.Area({
            // ID of the element in which to draw the chart.
            element: 'chart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                { year: '2023-09-09',order:5, sales:15000, quantity:20 },
                { year: '2023-08-08',order:5, sales:12000, quantity:15 },
                { year: '2023-08-05',order:5, sales:11000, quantity:10 }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'year',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['order','sales','quantity'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Đơn hàng','Doanh thu','Số lượng bán']
        });
    </script>
</body>

</html>