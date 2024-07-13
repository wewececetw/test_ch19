<section id="rooms_list">
  <div class="container">
    <div class="row text-center">
      <div class="col-4"></div>
      <div class="col-4">
        <h2>線上訂房-後台管理</h2>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</section>


<section id="rooms" class="py-5">
  <div class="container-fluid">
    <table class="table">
      <tr>
        <td>訂房編號</td>
        <td>入住第一晚的日期</td>
        <td>入住最後一晚的日期</td>
        <td>房間數量</td>
        <td>房間資訊</td>
        <td>姓名</td>
        <td>電話</td>
        <td>E-mail</td>
        <td>備註</td>
        <td>總金額</td>
        <td>需付訂金</td>
        <td>編輯</td>
        <td>刪除</td>
      </tr>
      <tr data-table="0">
        <td>01</td>
        <td>02</td>
        <td>03</td>
        <td>04</td>
        <td>05</td>
        <td>06</td>
        <td>07</td>
        <td>08</td>
        <td>09</td>
        <td>10</td>
        <td>11</td>
        <td><button type="button" data-toggle="modal" data-target="#roomsModal" class="btn btn-success">編輯</button>
        </td>
        <td><button type="button" class="btn btn-danger">刪除</button></td>
      </tr>
    </table>
  </div>
  <div id="roomsModal" class="modal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="form-group row">
              <label for="orderNum" class="col-3 col-form-label">訂房編號</label>
              <div class="col-6">
                <input type="text" class="form-control" name="orderNum" id="orderNum">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="form-group row">
              <label for="ckinDate" class="col-3 col-form-label">入住第一晚日期</label>
              <div class="col-6">
                <input type="date" class="form-control" name="ckinDate" id="ckinDate">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="form-group row">
              <label for="ckoutDate" class="col-3 col-form-label">入住最後一晚日期</label>
              <div class="col-6">
                <input type="date" class="form-control" name="ckoutDate" id="ckoutDate">
              </div>
              <div class="col-3"></div>
            </div>

            <div class="form-group row">
              <label for="roomsNum" class="col-3 col-form-label">房間數量</label>
              <div class="col-3">
                <input type="text" class="form-control" name="roomsNum" id="roomsNum">
              </div>
              <label for="roomsInfo" class="col-3 col-form-label">房間資訊</label>
              <div class="col-3">
                <input type="text" class="form-control" name="roomsInfo" id="roomsInfo">
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-3 col-form-label">姓名</label>
              <div class="col-3">
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <label for="tel" class="col-3 col-form-label">電話</label>
              <div class="col-3">
                <input type="tel" class="form-control" name="tel" id="tel">
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="label col-3 col-form-label">E-mail</label>
              <div class="col-3">
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <label for="commen" class="label col-3 col-form-label">備註</label>
              <div class="col-3">
                <textarea class="form-control" name="commen" id="commen" rows="4"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="total" class="col-3 col-form-label">總金額</label>
              <div class="col-3">
                <input type="text" class="form-control" name="total" id="total">
              </div>
              <label for="orderMoney" class="col-3 col-form-label">需付訂金</label>
              <div class="col-3">
                <input type="text" class="form-control" name="orderMoney" id="orderMoney">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6 text-right">
                <button id="roomSubmit" class="btn btn-success">儲存</button>
              </div>
              <div class="col-6">
                <button type="button" id="roomReset" class="btn btn-info">重設</button>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</section>