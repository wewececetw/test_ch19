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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- brand並排 -->
            <a href="#" class="navber-brand text-white">快樂旅遊網</a>
            <!-- toggler導覽 -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#pmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="pmenu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="" class="nav-link">訪客留言</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">訪客訂房</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">訪客訂餐</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">網站管理</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <?php
        if(!empty($_GET['g'] && str_contains($_GET['g'], 'adm')))
        {
            include("./sub_menu.php");
        }
    ?>
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