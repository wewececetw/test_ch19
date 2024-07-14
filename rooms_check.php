<section id="rooms">
    <div class="container">
      <h2 class="text-center">訪客訂房－已選擇的訂房資訊再確認</h2>
      <div class="form-group row">
        <!-- 訂房間數 -->
        <label for="room" class="col-3 col-form-label">訂房間數</label>
        <div class="col-3 mb-2">
          <input type="text" class="form-control" name="room" id="room" value="<?= $_GET['room'] ?>間">
        </div>
        <div class="col-6"></div>
      </div>
      <div class="form-group row">
        <!-- 房號 -->
        <label for="room_num" class="col-3 col-form-label">房號</label>
        <div class="col-3 mb-2">
          <input type="text" class="form-control" name="room_num" id="room_num" value="<?= $_GET['room_num'] ?>">
        </div>
        <div class="col-6"></div>
      </div>
      <div class="form-group row">
        <!-- 入住天數 -->
        <label for="ck_day" class="col-3 col-form-label">入住天數</label>
        <div class="col-3 mb-2">
          <input type="text" name="" class="form-control" id="ck_day"  value="<?= $_GET['ck_day'] ?>">
        </div>
        <div class="col-6"></div>
      </div>
      <div class="form-group row">
        <!-- 入住 -->
        <label for="ck_date" class="col-3 col-form-label">入住日期</label>
        <div class="col-4 mb-2">
          <input type="date" name="" class="form-control" id="ck_date" value="<?= $_GET['ck_date'] ?>">
        </div>
        <div class="col-auto align-self-center">
          到
        </div>
        <div class="col-4 mb-2">
          <input type="date" name="" class="form-control" id="ckout_date" value="<?= $_GET['ckout_date'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <!-- 總金額  -->
        <label for="total" class="col-3 col-form-label">總金額</label>
        <div class="col-3 mb-2">
          <input type="text" name="" class="form-control" id="total" value="">
        </div>
        <div class="col-6"></div>
      </div>
      <div class="form-group row">
        <!-- 需付訂金  -->
        <label for="orderMon" class="col-3 col-form-label">需付訂金</label>
        <div class="col-3 mb-2">
          <input type="text" name="" class="form-control" id="orderMon" value="">
        </div>
        <div class="col-6"></div>
      </div>

      <div class="col-12 text-center">
        <button class="btn btn-success mr-5">確認訂房</button>
        <a href="?g=rooms" class="btn btn-danger">取消</a>
      </div>
    </div>
    </fieldset>
    </div>
  </section>