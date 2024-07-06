<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <section id="header">
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "home" ? "active": ""?>">首頁</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "message" ? "active": ""?>">訪客留言</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "room" ? "active": ""?>">訪客訂房</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "order" ? "active": ""?>">訪客訂餐</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "traffic" ? "active": ""?>">交通資訊</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link <?=$_GET['g'] === "admin" ? "active": ""?>">網站管理</a>
                </li>
            </ul>
        </div>
    </section>

    <main>
       <?php
            if(!empty($_GET['g']))
            {
                include($_GET['g']."php");
            }
        ?>
    </main>

    <script src="./jquery/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>

</html>