<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>登入頁面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container" style="margin-top:90px;padding:0px;">
        <div class="col-md-6 offset-md-3 col-sm-12 border" style="padding:0px;">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" style="height:60px;">
                    <a class="nav-link active rounded-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:60px;padding:15px 0;color:#333;">註冊會員</a>
                </li>
                <li class="nav-item" style="height:60px;">
                    <a class="nav-link rounded-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="height:60px;padding:15px 0;color:#333;">會員登入</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="text-center col-10 offset-1" style="margin-top:5px;padding-bottom:20px;">
                        <button type="button" class="btn  btn-block" style="margin-top:20px;margin-bottom:20px;background-color:#3b5998;color:#ffffff;">使用Facebook註冊</button>
                        <p class="border-top" style="padding-top:10px;">註冊電郵</p>
                        <input class="form-control" type="email" placeholder="用戶名" style="margin-top:20px;" />
                        <input class="form-control" type="email" placeholder="電郵" style="margin-top:20px;" />
                        <input class="form-control" type="password" placeholder="密碼" style="margin-top:20px;" />
                        <small style="float:left;">至少8個字元</small>
                        <div style="clear:left;"></div>
                        <label style="float:left;margin-top:15px;font-size:14px;">商店資訊及優惠方案</label>
                        <div style="clear:left;"></div>
                        <div class="form-check text-left">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" style="margin-top:8px;" />
                            <label class="form-check-label" for="defaultCheck1" style="font-size:14px;">發送至郵件</label>
                        </div>
                        <button type="button" class="btn btn-block btn-info" style="margin-top:10px;background-color:#3493fb;color:#ffffff;">立即加入!</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="text-center col-10 offset-1" style="margin-top:5px;padding-bottom:20px;">
                        <button type="button" class="btn  btn-block" style="margin-top:20px;margin-bottom:20px;background-color:#3b5998;color:#ffffff;">使用Facebook登入</button>
                        <p class="border-top" style="padding-top:10px;">登入電郵</p>
                        <input class="form-control" type="email" placeholder="電郵" style="margin-top:20px;" />
                        <input class="form-control" type="password" placeholder="密碼" style="margin-top:20px;" />
                        <button type="button" class="btn btn-block btn-info" style="margin-top:20px;background-color:#3493fb;color:#ffffff;" onclick="javascript:location.href='index.php'">開始購物吧</button>
                        <a class="d-block" href="" style="text-decoration:none;color:#666;font-size:14px;margin-top:10px;">忘記密碼?</a>
                        <a href="" style="text-decoration:none;color:#666;font-size:14px;">後台管理登入</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>