
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>頁</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Nav.js"></script>
    <link rel="stylesheet" href="css/Nav.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />

    <style>
        /*WebPage*/
        @media (min-width: 768px) {
            label {
                font-size:20px;
            }
            .listbtn p{
                font-size:26px;
            }
            .listbtn span {
                font-size: 26px;
            }
            .title label {
                font-size:26px;
            }
            #Phone_List {
                display:none;
            }
        }
        /*Phone*/
        @media (max-width:576px) {
            .listbtn p {
                font-size: 20px;
            }
            .listbtn span {
                font-size: 20px;
            }
            .title label {
                font-size: 18px;
            }
            .table {
                display:none;
            }
        }
    </style>


    <script>
        var x, y, n = 0, ny = 0, rotINT, rotYINT

        function rotateDIV() {
            x = document.getElementById("icontransfer")
            clearInterval(rotINT)
            rotINT = setInterval("startRotate()", 0.005)
        }
        function startRotate() {
            n = n + 1
            x.style.transform = "rotate(" + n + "deg)"
            x.style.webkitTransform = "rotate(" + n + "deg)"
            x.style.OTransform = "rotate(" + n + "deg)"
            x.style.MozTransform = "rotate(" + n + "deg)"
            if (n == 180 || n == 360) {
                clearInterval(rotINT)
                if (n == 360) { n = 0 }
            }
        }

        $(document).ready(function () {
            $(".listbtn").click(function () {
                $("#content").slideToggle();
            });

        });
    </script>
</head>
<body>
    <!--購物車側欄-->
    <?php include('dupTemplate/StoreCarList.php'); ?>
    <?php include('dupTemplate/WindowTopBarTool.php');?>

    <div class="container-fluid" style="margin-bottom:30px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5652c98b69702d145f27a700/x140.webp?source_format=jpg" alt="Alternate Text" style="width: 20%;height: auto;" />
                </div>
                        <div class="text-center" style="margin:40px 0;">
                            <img style="height: auto;max-width: 100%;"src="//jci.book.com.tw/css/books/m_cart2015/images/time_line_step2_zh-tw.png" />
                        </div>


                <!--<div class="text-center form-inline" style="display:table;">
                        <div style="height:75px;width:75px;border-radius:40px;background-color:#9daab2;padding-top:15px;">
                            <span style="color:#FFFFFF;font-size:26px;margin-top:10px;">1</span>
                        </div>
                        <div style="margin-top:10px;">
                            <span style="font-size:18px;">購物車</span>
                        </div>
                    <hr style="width:300px;height:1px;  background-color:black;background-color:#9daab2;" />
                    <div>
                        <div style="height:75px;width:75px;border-radius:40px;background-color:#9daab2;padding-top:15px;">
                            <span style="color:#FFFFFF;font-size:26px;margin-top:10px;">2</span>
                        </div>
                        <div style="margin-top:10px;">
                            <span style="font-size:18px;">填寫資料</span>
                        </div>

                    </div>

                    <span style="width:300px;height:5px;  background-color:black; margin-top:38px;background-color:#cccccc;"></span>

                    <div>
                        <div style="height:75px;width:75px;border-radius:40px;background-color:#cccccc;padding-top:15px;">
                            <span style="color:#FFFFFF;font-size:26px;margin-top:10px;">3</span>

                        </div>
                        <div style="margin-top:10px;">
                            <span style="font-size:18px;">訂單確認</span>
                        </div>

                    </div>


                </div>-->

                <div class="border text-center listbtn" style="padding:10px;margin-top:30px;cursor:pointer;" onclick="rotateDIV()">
                    <p>合計：NT$3580</p>
                    <span style="color:#000000;">
                        購物車
                        <i class="fas fa-angle-down" style="margin:0 10px;font-size:26px;" id="icontransfer"></i>
                    </span>
                </div>
                <div class="border listbtn" style="width:100%;display:none;cursor:pointer;" id="content">
                    <div id="Phone_List" style="padding:10px;">
                        <div class="row">
                            <div class="col-3">
                                <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5b000d320e64fee20a005d67/800x.webp?source_format=jpg" alt="Alternate Text" style="width:80px;height:80px;" />
                            </div>
                            <div class="col-9">
                                <p>Suicoke Nylon Tape Straps Sandals</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group" id='myform' style="margin:10px 0;">
                                    <button type='button' value='-' class="btn qtyminus border" field='quantity' style="border-radius:0px;width:35px;height:35px;padding:5px;background-color:#ffffff;">
                                        <i class="fa fa-minus" style="width:5px;height:5px;"></i>
                                    </button>
                                    <input class="form-control" type='text' name='quantity' value='0' style="height:35px;max-width:100px;" />
                                    <button type='button' value='+' class="btn qtyplus border" field='quantity' style="border-radius:0px;width:35px;height:35px;padding:5px;background-color:#ffffff;">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <a style="padding:8px;">
                                        <i class="far fa-trash-alt" style="font-size:20px;"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4">
                                <p style="margin-top:15px;">NT$3,580</p>
                            </div>
                        </div>
                    </div>
                    <table class="table col-md-12 border-0">
                        <thead class="border-top-0">
                            <tr>
                                <th scope="col" style="font-size:20px;">商品資料</th>
                                <th scope="col" style="font-size:20px;">優惠</th>
                                <th scope="col" style="font-size:20px;">單件價格</th>
                                <th scope="col" style="font-size:20px;">數量</th>
                                <th scope="col" style="font-size:20px;">小計</th>
                                <th scope="col" style="font-size:20px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5b000d320e64fee20a005d67/800x.webp?source_format=jpg" alt="Alternate Text" style="width:100px;height:100px;" /> Suicoke Nylon Tape Straps Sandals
                                </th>
                                <td></td>
                                <td style="vertical-align:middle;">NT$3,580</td>
                                <td style="vertical-align:middle;">10</td>
                                <td style="vertical-align:middle;">NT$3,580</td>
                                <td style="vertical-align:middle;">刪除</td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="border" style="padding:20px;">
                        <p style="font-size:24px;">已享用之優惠</p>
                        <div class="form-inline text-center">
                            <div style="background-color:#808080;color:#ffffff;width:100px;margin-right:10px;">優惠促銷</div>
                            <span style="font-size:18px;">FREE SHIPPING OVER NT 2000！</span>
                        </div>

                    </div>

                    <div class="row" style="padding:20px;">
                        <div class="col-md-2 offset-md-6 col-6 text-right">
                            <p style="font-size:20px;">小計:</p>
                            <p style="font-size:20px;">運費:</p>
                            <p style="font-size:20px;">合計:</p>
                        </div>
                        <div class="col-md-4 col-6 text-right">
                            <p style="font-size:20px;">NT$3580</p>
                            <p style="font-size:20px;">NT$0</p>
                            <p style="font-size:20px;">NT$3580</p>
                        </div>
                    </div>
                    <div class="row " style="padding:20px;">
                        <div class="col-md-12 text-center border-top">
                            <i class="fas fa-angle-up" style="font-size:40px;margin-top:20px;"></i>
                        </div>
                    </div>
                </div>

                <div class="container-fuild" style="margin-top:30px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="border">
                                <div style="background-color:#F6F6F6" class="title">
                                    <label style="padding:10px 20px;">顧客資料</label>
                                </div>
                                <div class="border-top" style="padding:20px;">
                                    <span>
                                        以會員身份快速結帳？可立即
                                        <a href="#">登入</a>
                                    </span>
                                    <div class="form-group" style="margin-top:20px;">
                                        <label>顧客名稱</label>
                                        <input class="form-control" type="text" name="name" value="" />
                                    </div>
                                    <div class="form-group" style="margin-top:20px;">
                                        <label>電子信箱</label>
                                        <input class="form-control" type="email" name="name" value="" />
                                    </div>
                                    <div class="form-group" style="margin-top:20px;">
                                        <label>電話號碼</label>
                                        <input class="form-control" type="tel" name="name" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="border" style="margin-top:30px;">
                                <div class="title" style="background-color:#F6F6F6">
                                    <label style="padding:10px 20px;">訂單備註</label>
                                </div>
                                <div class="border-top" style="padding:20px;">
                                    <textarea style="width:100%;resize:none;" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border">
                                <div class="title" style="background-color:#F6F6F6;">
                                    <label style="padding:10px 20px;">送貨資料</label>
                                    <span style="position: absolute;right:0px;padding:20px 40px;font-size:18px;">運費:NT$0</span>
                                </div>
                                <div class="border-top" style="padding:20px;">
                                    <span>已選擇的送貨方式：7-11店到店(請先付款再至7-11取貨)</span>
                                    <div class="form-check" style="margin-top:20px;">
                                        <input type="checkbox" class="form-check-input" style="zoom:1.5" />
                                        <label class="form-check-label">收件人資料與顧客相同</label>
                                    </div>
                                    <div class="form-group" style="margin-top:20px;">
                                        <label>收件人名稱</label>
                                        <input class="form-control" type="text" name="name" value="" />
                                        <small>請填入收件人真實姓名，以確保順利收件</small>
                                    </div>
                                    <div class="form-group" style="margin-top:20px;">
                                        <label>收件人電話號碼</label>
                                        <input class="form-control" type="tel" name="name" value="" />
                                    </div>
                                    <div class="form-group border-top" style="margin-top:20px;padding-top:20px;">
                                        <img src="http://static.shoplineapp.com.s3.amazonaws.com/web/v1/img/seven-eleven.png" alt="Alternate Text" />
                                        <label style="font-size:20px; margin-left:10px;margin-bottom:30px;">選擇門市</label>
                                        <button class="btn btn-block btn-secondary" type="button" style="height:50px; font-size:22px;">搜尋門市</button>
                                    </div>
                                </div>
                            </div>
                            <div class="border" style="margin-top:30px;">
                                <div class="title" style="background-color:#F6F6F6">
                                    <label style="padding:10px 20px;">付款資料</label>
                                </div>
                                <div class="border-top" style="padding:20px;">
                                    <span>已選擇付款方式：信用卡</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:30px;">
                        <div class="col-md-12">
                            <div class="border" style="padding:20px;">
                                - 使用線上刷卡分期服務 -
                                <br />
                                金額滿6000(含)以上方可以用免利息分三期服務
                                <br />
                                如消費金額未滿請勿以此方式結帳
                                <br />
                                GROOVY有權撤銷金額不足的分期付款訂單
                                <br />
                                謝謝合作
                                <br />
                                <br />
                                *目前支援的分期刷卡銀行：台新, 玉山, 永豐, 中信, 台北富邦, 遠東, 國泰世華, 華南, 日盛國際商銀, 台灣樂天, 聯邦, 兆豐商銀, 台中商銀, 上海, 凱基, 匯豐, 星展, 臺灣新光, 合作金庫, 彰化, 第一, 元大
                                <br />
                                <br />
                                - GROOVY VIP 折扣 -
                                <br />
                                會員如欲在網站購物，請私訊提供電話號碼以利查詢
                                <br />
                                我們會提供一組折扣代碼，結帳輸入後一樣可享九折優惠唷！
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:30px;">
                        <div class="col-md-12">
                            <div class="border" style="padding:20px;">
                                <div class="offset-md-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" style="zoom: 1.5" />
                                            <label class="form-check-label" style="font-size:18px;margin-left:10px;">
                                                我同意
                                                <a href="#">網站服務條款及隱私政策</a>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" style="zoom: 1.5" />
                                            <label class="form-check-label" style="font-size:18px;margin-left:10px;">
                                                成為GROOVY STORE的會員
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" style="zoom: 1.5" />
                                            <label class="form-check-label" style="font-size:18px;margin-left:10px;">
                                                我想收到最新資訊及優惠方案
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border border-top-0" style="padding:20px;">
                                <div class="row">
                                    <div class="col-md-6" style="padding-top:10px;">
                                        <a href="#" style="font-size:20px;">
                                            <i class="fas fa-angle-left"></i> 返回購物車
                                        </a>
                                    </div>
                                    <div class=" col-md-6">
                                        <button type="button" class="btn btn-block" style="background-color:#449d44;color:#ffffff;height:50px;">提交訂單</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
