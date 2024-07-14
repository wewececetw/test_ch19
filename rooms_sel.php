<section id="room_sel">
  <div class="container">
    <h2 class="text-center">訪客訂房－選擇房間</h2>
    <h4 class="text-center">2024/04/05星期八</h4>
    <div class="row nav nav-pills">
      <label class="col-3 nav-link" for="room_sel_1">Room 1</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_1">
      <label class="col-3 nav-link disabled bg-danger text-white" for="room_sel_2">Room 2</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_2">
      <label class="col-3 nav-link" for="room_sel_3">Room 3</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_3">
      <label class="col-3 nav-link" for="room_sel_4">Room 4</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_4">
      <label class="col-3 nav-link" for="room_sel_5">Room 5</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_5">
      <label class="col-3 nav-link" for="room_sel_6">Room 6</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_6">
      <label class="col-3 nav-link" for="room_sel_7">Room 7</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_7">
      <label class="col-3 nav-link" for="room_sel_8">Room 8</label>
      <input type="checkbox" name="room_sel" class="d-none" id="room_sel_8">
      <div class="col-12 text-center">
        <button class="btn btn-success" id="btn-room-sel">確定選取</button>
        <button class="btn btn-danger">取消選取</button>
        <a href="?g=rooms" class="btn btn-info">放棄離開</a>
      </div>
    </div>
  </div>
</section>
<script>
  const rooms = 3
  $('input[name="room_sel"]').on('input', function () {
    if ($(this).siblings(':checked').length >= rooms) {
      this.checked = false
    } else {
      if (this.checked) $(`label[for="${$(this).attr('id')}"]`).addClass('active')
      else $(`label[for="${$(this).attr('id')}"]`).removeClass('active')
    }
  })
</script>