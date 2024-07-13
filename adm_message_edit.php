<section id="message_insert" class="py-5">
    <div class="container  border border-secondary p-4">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <h1 class="absolote text-center mb-3">訪客留言-編輯</h1>
            </div>
            <div class="col-4 text-right">
                <button class="btn btn-info">回留言列表</button>
            </div>
            <div class="col-7 mx-auto">

                <div class="form-group row">
                    <label for="username" class="col-3 col-form-label">姓名</label>
                    <div class="col-6 mb-2">
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="col-3"></div>
                    <label for="email" class="col-3 col-form-label">E-mail</label>
                    <div class="col-6 mb-2">
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="email_type" id="" value="1" checked>顯示
                    </div>
                    <label for="tel" class="col-3 col-form-label">電話</label>
                    <div class="col-6 mb-2">
                        <input type="tel" class="form-control" id="tel">
                    </div>
                    <div class="col-3">
                        <input type="checkbox" name="tel_type" id="" value="1" checked>顯示
                    </div>
                    <label for="content" class="col-3 col-form-label">內容</label>
                    <div class="col-6 mb-2">
                        <textarea class="form-control" id="content" rows="4"></textarea>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-secondary mx-2">送出</button>
                    <button class="btn btn-secondary">重設</button>
                </div>
            </div>
        </div>
    </div>
</section>