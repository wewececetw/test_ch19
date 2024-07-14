<style>
    #date {
      width: 1000px;
    }

    .ui-datepicker {
      width: 100%;
    }
  </style>

<section id="rooms">
  <div class="container">
    <h2 class="text-center">訪客訂房－選擇訂房資訊</h2>
    <div class="row">
      <div class="col-6">
        <div id="date"></div>
      </div>
    </div>
    <form id="room-info" action="?g=rooms_check" method="get">

      <div class="form-group row">
        <!-- 訂房間數 -->
        <label for="room" class="col-3 col-form-label">訂房間數</label>
        <div class="col-3 mb-2">
          <select name="" class="custom-select" id="room" disabled>
            <option value="1">1間</option>
            <option value="2" selected>2間</option>
            <option value="3">3間</option>
          </select>
          <input type="hidden" name="room" id="" value="2">
        </div>
        <div class="col-6"></div>
        <!-- 入住天數 -->
        <label for="ck_day" class="col-3 col-form-label">入住天數</label>
        <div class="col-3 mb-2">
          <input type="text" name="ck_day" class="form-control" id="ck_day" value="1天" readonly>
        </div>
        <div class="col-6"></div>
        <!-- 入住 -->
        <label for="ck_date" class="col-3 col-form-label">入住日期</label>
        <div class="col-4 mb-2">
          <input type="date" name="ck_date" class="form-control" id="ck_date" value="2024-07-08" readonly>
        </div>
        <div class="col-auto align-self-center">
          到
        </div>
        <div class="col-4 mb-2">
          <input type="date" name="ckout_date" class="form-control" id="ckout_date" value="2024-08-09" readonly>
        </div>
        <!-- 房號  -->
        <label for="room_num" class="col-3 col-form-label">房號</label>
        <div class="col-3 mb-2">
          <input type="text" name="room_num" class="form-control" id="room_num" value="R009S" readonly>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-secondary">自動產生房號</button>
        </div>
        <div class="col mb-2">
          <a href="?g=rooms_sel" class="btn btn-primary text-white">選擇房號</a>
        </div>
        <div class="col-12 text-center">
          <button type="button" id="rooms_confirm" class="btn btn-success mr-5">確認訂房</button>
          <button type="button" class="btn btn-danger">取消</button>
        </div>
        </formx>
      </div>
  </div>
</section>

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
  $('#rooms_confirm').on('click', function () {
    var formData = $('#room-info').serialize();
    // console.log(formData);
    var actionUrl = $('#room-info').attr('action') + '&' + formData;
    // console.log(actionUrl);
    window.location.href = actionUrl;
  })
</script>