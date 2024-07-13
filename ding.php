<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        #ding .card {
            transition: 0.5s;
        }

        #ding .card:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>

    <section id="ding">
        <div class="container">
            <h2 class="text-center">訪客訂餐</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-3">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="0">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=1">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="1">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=2">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="2">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=3">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="3">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=4">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="4">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=5">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="5">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=6">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="6">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=7">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#dmodal" class="modal-click" data-toggle="modal" data-img="7">
                        <div class="card">
                            <!-- data-toggle觸發開啟函式 a連結僅能用href來當data-target觸發目標屬性並顯示modal -->
                            <img src="https://picsum.photos/300/200/?random=8">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="dmodal" class="modal">
        <!-- dialog對話框 -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- data-dismiss觸發關閉函式  -->
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div id="modal_box" class="modal-body text-center">
                    <img src="https://picsum.photos/300/200/?random=10">
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-secondary" id="down_img">＜</button>
                    <button class="btn btn-secondary" id="reload_img">o</button>
                    <button class="btn btn-secondary" id="up_img">＞</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal"></div>
    <script src="./jquery/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script>
        $('.modal-click').on('click', function () {
            let img = $(this).find('img').attr('src');
            $('#modal_box img').attr('src', img);
            $('#modal_box img').animate({
                opacity: '1'
            });
        });
        $('#up_img').on('click', function () {

            $('#modal_box img').animate({
                opacity: '+=0.1'
            });
        })
        $('#down_img').on('click', function () {

            $('#modal_box img').animate({
                opacity: '-=0.1'
            });

        })
        $('#reload_img').on('click', function () {
            $('#modal_box img').animate({
                opacity: '1'
            });
        })
    </script>
</body>

</html>