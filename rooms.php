<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/jquery-ui.css">
  <link rel="stylesheet" href="./css/bootstrap.css">

  <style>
    #date {
      width: 1000px;
    }

    .ui-datepicker {
      width: 100%;
    }
  </style>
</head>

<body>
  <section id="rooms">
    <div class="container">
      <h2 class="text-center">訪客訂房－選擇訂房資訊</h2>
      <div class="row">
        <div class="col-6">
          <div id="date"></div>
        </div>
      </div>
      <fieldset disabled>
      <div class="form-group row">
        <!-- 訂房間數 -->
        <label for="room" class="col-3 col-form-label">訂房間數</label>
        <div class="col-3 mb-2">
          <select name="room" class="custom-select" id="room">
            <option value="1">1間</option>
            <option value="2">2間</option>
            <option value="3">3間</option>
          </select>
        </div>
        <div class="col-6"></div>
        <!-- 入住天數 -->
        <label for="ck_day" class="col-3 col-form-label">入住天數</label>
        <div class="col-3 mb-2">
          <input type="text" name="" class="form-control" id="ck_day" value="1天" readonly>
        </div>
        <div class="col-6"></div>
        <!-- 入住 -->
        <label for="ck_date" class="col-3 col-form-label">入住日期</label>
        <div class="col-4 mb-2">
          <input type="date" name="" class="form-control" id="ck_date" value="" readonly>
        </div>
        <div class="col-auto align-self-center">
          到
        </div>
        <div class="col-4 mb-2">
          <input type="date" name="" class="form-control" id="ckout_date" value="" readonly>
        </div>
        <!-- 房號  -->
        <label for="room_num" class="col-3 col-form-label">房號</label>
        <div class="col-3 mb-2">
          <input type="text" name="" class="form-control" id="room_num" value="" readonly>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-secondary">自動產生房號</button>
        </div>
        <div class="col mb-2">
          <button type="button" class="btn btn-primary">選擇房號</button>
        </div>
        <div class="col-12 text-center">
          <button class="btn btn-success mr-5">確認訂房</button>
          <button class="btn btn-danger">取消</button>
        </div>
      </div>
      </fieldset>
    </div>
  </section>
  <script src="./jquery/jquery.js"></script>
  <script src="./jquery/jquery-ui.min.js"></script>
  <script src="./js/bootstrap.js"></script>

  <script>
    const rooms = {
      '2024/07/01': {
        num: 5,
        price: 1000
      }
    }
    $('#date').datepicker({
      beforeShow: updateText,
      onChangeMonthYear: updateText,
      onSelect: updateText,

    })
    updateText()
    function updateText() {
      setTimeout(() => {
        $(".ui-datepicker-calendar td").filter(function () {
          var date = $(this).text();
          return /\d/.test(date);
        }).find("a").each(function () {
          const month = (parseInt($(this).parent().attr('data-month')) + 1).toString().padStart(2, '0')
          const year = $(this).parent().attr('data-year').padStart(2, '0')
          const day = $(this).text().padStart(2, '0')
          const date = `${year}/${month}/${day}`
          const num = rooms[date]?.num || '0'
          const price = '$' + (rooms[date]?.price || '0')
          $(this).html(`
            ${day} 
            <br>
            房型: AAA
            <br>
            價格: ${price}
            <br>
            剩餘: ${num}
          `)
          $(this).click(function () {
            console.log(date)
            console.log(rooms[date])
          })
        })
      }, 10)

    }
  </script>
</body>

</html>