<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/styletest.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="wrapper">
         <?php

            include("admincp/config/config.php");
            include("./pages/header.php");
            include("./pages/menu.php");
            include("./pages/main.php");
            include("./pages/footer.php");
        ?> 
    </div>
</body>

</html>