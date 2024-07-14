<style>
    #圖層_1 {
        width: 200px;
        height: 100px;
    }
</style>

<section id="login" class="py-5">
    <div class="container border border-secondary p-4">
        <h1 class="text-center mb-3">網站管理-登入</h1>
        <div class="col-5 mx-auto">
            <div class="form-group row">
                <label for="acc" class="col-3 col-form-label">帳號</label>
                <div class="col-9 mb-2">
                    <input type="text" class="form-control" id="acc">
                </div>
                <label for="pw" class="col-3 col-form-label">密碼</label>
                <div class="col-9 mb-2">
                    <input type="text" class="form-control" id="pw">
                </div>
                <label for="img_pw" class="col-3 col-form-label">圖片驗證</label>
                <div class="col-9 mb-2">
                    <input type="text" class="form-control" id="img_pw">
                </div>
                <div class="col-12 col-form-label text-center">
                    <svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 100"
                        style="enable-background:new 0 0 200 100;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                font-family: 'AdobeMingStd-Light-B5pc-H';
                            }

                            .st1 {
                                font-size: 48px;
                            }
                        </style>
                        <text transform="matrix(1 0 0 1 10.7417 47.2579)" class="st0 st1">A</text>
                        <text transform="matrix(1 0 0 1 56.8066 61.5811)" class="st0 st1">B</text>
                        <text transform="matrix(1 0 0 1 101.129 57.7095)" class="st0 st1">C</text>
                        <text transform="matrix(1 0 0 1 154.7421 88.6777)" class="st0 st1">D</text>
                    </svg>
                </div>
                <div class="col-12 text-center">
                    <div class="form-inline justify-content-center">
                        <input type="text" class="form-control mr-2" name="" id="code">
                        <button id="ref-code" class="btn btn-secondary">驗證碼重新產生</button>
                    </div>
                </div>
                <div class="col-12 text-center mt-2">
                    <button class="btn btn-secondary mx-2 code-check">送出</button>
                    <button class="btn btn-secondary">重設</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let code = ''

    $('#圖層_1 text').each(function (index) {
        const x = index * 50 + Math.round(Math.random() * 30)
        const y = 25 + Math.round(Math.random() * 50)
        $(this).attr('transform', `matrix(1 0 0 1 ${x} ${y})`)
        const text = String.fromCharCode(65 + Math.round(Math.random() * (90 - 65)))
        $(this).text(text)
        code += text
    })
    $('#ref-code').on('click', function () {
        $('#圖層_1 text').each(function (index) {
            const x = index * 50 + Math.round(Math.random() * 30)
            const y = 25 + Math.round(Math.random() * 50)
            $(this).attr('transform', `matrix(1 0 0 1 ${x} ${y})`)
            const text = String.fromCharCode(65 + Math.round(Math.random() * (90 - 65)))
            $(this).text(text)
            code += text
        })
    })

    $('.code-check').click(function () {
        alert(code == $('#code').val().toUpperCase() ? 'OK' : 'X')
    })
</script>