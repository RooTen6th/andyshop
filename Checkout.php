<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>首頁</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Nav.js"></script>
    <link rel="stylesheet" href="css/Footer.css" />
    <link rel="stylesheet" href="css/Nav.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
        /*Phone_Page*/
        @media (max-width: 414px) {

            .carousel-image {
                padding-bottom: 20px;
            }



            .carousel-item img {
                max-width: 100%;
            }



            #fixed-menu-container {
                padding: 0 15px;
                position: fixed;
                top: 15px;
                right: unset;
                z-index: 1;
            }



            .carousel-image {
                padding: 0px;
            }

            .carousel ol {
                display: none;
            }

            .carousel a span {
                display: none;
            }

            label {
                font-size: 16px;
            }

            #Content {
                padding: 50px 30px;
            }

                #Content .table {
                    display: none;
                }

                #Content #Order_Data {
                    margin-top: 30px;
                }

                #Content .title {
                    padding: 12px 0 5px 20px;
                }

                    #Content .title label {
                        font-size: 18px;
                    }

                #Content #tip_login {
                    padding: 15px;
                }

                #Content #Order_Data p {
                    font-size: 16px;
                }

                #Content #Order_Data a {
                    font-size: 16px;
                }
        }

        /*Web_Page*/
        @media (min-width: 768px) {
            label {
                font-size: 20px;
            }
            #Content {
                padding: 20px 30px;
            }
                #Content .table th {
                    font-size:20px;
                }
                #Content #Phone_List {
                    display:none;
                }
                #Content .title {
                    padding:20px;
                }
                #Content .title label {
                    font-size:24px;
                }
                #Content #tip_login {
                    padding: 25px;
                }

                #Content #Order_Data p {
                    font-size: 20px;
                }

                #Content #Order_Data a {
                    font-size: 20px;
                }
                #Content #Order_Data b {
                    font-size: 20px;
                }
        }
    </style>
    <script>
        $(function () {
            // This button will increment the value
            $('.qtyplus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                // If is not undefined
                if (!isNaN(currentVal)) {
                    // Increment
                    $('input[name=' + fieldName + ']').val(currentVal + 1);
                } else {
                    // Otherwise put a 0 there
                    $('input[name=' + fieldName + ']').val(0);
                }
            });
            // This button will decrement the value till 0
            $(".qtyminus").click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                // If it isn't undefined or its greater than 0
                if (!isNaN(currentVal) && currentVal > 0) {
                    // Decrement one
                    $('input[name=' + fieldName + ']').val(currentVal - 1);
                } else {
                    // Otherwise put a 0 there
                    $('input[name=' + fieldName + ']').val(0);
                }
            });
        });
    </script>
</head>
<body>
    <?php include('dupTemplate/StoreCarList.php'); ?>
    <!--Phone SideNav && TopNav --><?php include('dupTemplate/PhoneTopBarTool.php'); ?>
    <div style="position:fixed relative;z-index:0;">
        <!--Web TopNav--><?php include('dupTemplate/WindowTopBarTool.php'); ?>
        <div class="container-fluid" id="Content">
            <div class="col-md-12">
                <div class="row">
                    <!--Web SideNav--><?php include('dupTemplate/RightBarTool.php'); ?>
                    <div class="col-md-8 offset-md-1">
                        <div class="text-center" style="margin:40px 0;">
                            <img style="height: auto;max-width: 100%;" src="//jci.book.com.tw/css/books/m_cart2015/images/time_line_step1_zh-tw.png" />
                        </div>
                        <div class="row border" style="margin-top:50px;"id="tip_login">
                            <div class="col-md-10 col-8">
                                <label>已經是會員？登入後可以更方便管理訂單！</label>
                            </div>
                            <div class="col-md-2 col-4">
                                <button type="button" class="btn btn-block" style="height:50px;">登入</button>
                            </div>
                        </div>

                        <div class="row border" style="margin-top:30px;">
                            <div class="col-md-12 title" style="background-color:#F6F6F6;">
                                <label>購物車(1件)</label>
                            </div>
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
                                            <input class="form-control" type='text' name='quantity' value='0' style="height:35px;max-width:100px;"/>
                                            <button type='button' value='+' class="btn qtyplus border" field='quantity' style="border-radius:0px;width:35px;height:35px;padding:5px;background-color:#ffffff;">
                                                <i class="fa fa-plus"></i>
                                            </button> 
                                            <a style="padding:8px;"><i class="far fa-trash-alt" style="font-size:20px;"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <p style="margin-top:15px;">NT$3,580</p>
                                    </div>
                                </div>
                            </div>
                            <table class="table col-md-12">
                                <thead>
                                    <tr>
                                        <th scope="col">商品資料</th>
                                        <th scope="col">優惠</th>
                                        <th scope="col">單件價格</th>
                                        <th scope="col">數量</th>
                                        <th scope="col">小計</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5b000d320e64fee20a005d67/800x.webp?source_format=jpg" alt="Alternate Text" style="width:100px;height:100px;" /> Suicoke Nylon Tape Straps Sandals
                                        </th>
                                        <td></td>
                                        <td style="vertical-align:middle;">NT$3,580</td>
                                        <td style="vertical-align:middle;">
                                            <div class="input-group" id='myform' style="margin:10px 0;">
                                                <button type='button' value='-' class="btn qtyminus" field='quantity' style="border-radius:0px;">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control" type='text' name='quantity' value='0' />
                                                <button type='button' value='+' class="btn qtyplus" field='quantity' style="border-radius:0px;">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td style="vertical-align:middle;">NT$3,580</td>
                                        <td style="vertical-align:middle;"><i class="far fa-trash-alt" style="font-size:26px;"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="row border-top-0 border" style="padding:20px;">
                            <div class="col-md-12" style="padding:0px;">
                                <label>已享用之優惠</label>
                            </div>
                            <div style="background-color:#808080;color:#ffffff;padding:10px;">優惠促銷</div>
                            <span style="font-size:18px;margin-left:10px;padding:10px;">FREE SHIPPING OVER NT 2000！</span>
                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-md-7 col-12  border" style="padding:0px;">
                                <div class="border-bottom title" style="background-color:#F6F6F6;"><label>選擇送貨及付款方式</label></div>
                                <div class="form-group" style="padding:0px 20px;margin-top:10px;">
                                    <label>送貨地點</label>
                                    <select class="form-control" style="height:50px;">
                                        <option>台灣</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group" style="padding:0px 20px;">
                                    <label>送貨方式</label>
                                    <select class="form-control" style="height:50px;">
                                        <option>7-11店到店(請先付款再至7-11取貨)</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group" style="padding:0px 20px;">
                                    <label>付款方式</label>
                                    <select class="form-control" style="height:50px;">
                                        <option>信用卡</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-1 col-12 border" style="padding:0px;" id="Order_Data">

                                <div class="border-bottom title" style="margin-bottom:0px; background-color:#F6F6F6;"> <label>訂單資訊</label></div>

                                <div style="padding:20px;">
                                    <p>小計：</p>
                                    <p>運費：</p>
                                    <div style="margin:25px 0;">
                                        <a href="#">使用促銷代碼</a>
                                    </div>
                                </div>

                                <div class="border-top" style="padding:20px;">
                                    <b>合計：</b>
                                    <button type="button" class="btn btn-block" style="background-color:#5cb85c;color:#ffffff;height:50px;margin-top:20px;" onclick="jacascript:location.href='WritingData.php'">前往結帳</button>
                                </div>
                            </div>
                        </div>
                        <div class="row border" style="margin-top:30px;padding:20px;">
                            - 使用線上刷卡分期服務 -
                            <br>
                            金額滿6000(含)以上方可以用免利息分三期服務  <br>
                            如消費金額未滿請勿以此方式結帳  <br>
                            GROOVY有權撤銷金額不足的分期付款訂單  <br>
                            謝謝合作  <br>  <br>
                            *目前支援的分期刷卡銀行：台新, 玉山, 永豐, 中信, 台北富邦, 遠東, 國泰世華, 華南, 日盛國際商銀, 台灣樂天, 聯邦, 兆豐商銀, 台中商銀, 上海, 凱基, 匯豐, 星展, 臺灣新光, 合作金庫, 彰化, 第一, 元大  <br>  <br>
                            - GROOVY VIP 折扣 -  <br>
                            會員如欲在網站購物，請私訊提供電話號碼以利查詢  <br>
                            我們會提供一組折扣代碼，結帳輸入後一樣可享九折優惠唷！  <br>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div><?php include('dupTemplate/Footer.php'); ?>
</body>
</html>