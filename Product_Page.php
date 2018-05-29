<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="fb:admins" content="youruserid" />
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Nav.js"></script>
    <link rel="stylesheet" href="css/Pagination.css" />
    <link rel="stylesheet" href="css/Footer.css" />
    <link rel="stylesheet" href="css/Nav.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
   
        /*WebPage*/
        @media (min-width: 768px) {



            #Right-Content {
                margin-top: 200px;
                padding: 50px;
            }
                #Right-Content label {
                    font-size: 24px;
                }
                #Right-Content p {
                    font-size: 24px;
                }

            #Content {
                padding: 0 30px;
            }
            #Bigimg {
                padding-right:50px;
            }
            #PriceFont {
                font-size: 28px;
            }
            #detail_img{
                margin-top:30px;
            }
            #Related_Products{
                padding:60px;
            }

        }
        /*Phone*/
        @media (max-width:576px) {
            #Right-Content h1 {
                font-size: 26px;
                line-height: 32px;
            }
            #Right-Content {
                padding: 30px;
            }
            #Right-Content h2{
                font-size:24px;
            }

                #Right-Content label {
                    font-size:20px;
                }

            #Right-Content p{
                font-size:18px;
            }

            #PriceFont {
                font-size: 24px;
            }

            #Related_Products {
                padding: 5px;
            }
           
        }

        #Right-Content span {
            font-size: 24px;
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
    <!--購物車側欄--><?php include('dupTemplate/StoreCarList.php'); ?>
    <!--Phone SideNav && TopNav --><?php include('dupTemplate/PhoneTopBarTool.php'); ?><?php include('dupTemplate/WindowTopBarTool.php'); ?>
    <div class="container-fluid" id="Content">
        <div class="row"><?php include('dupTemplate/RightBarTool.php'); ?>
            <div class="col-md-10 border-top" id="Right-Content">
                <div class="row">
                    <div class="col-md-6" id="Bigimg">
                        <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5ad3537459563019100002f8/800x.webp?source_format=JPG" style="width:100%" />
                        <div style="overflow:hidden;overflow-x:scroll;width:100%;">
                            <div style="width:99999999px;margin-top:20px;">                                <?php
                                for($i=0;$i<10;$i++){
                                ?>
                                <div style="margin:0px 5px;width:100px;height:100px;float:left;margin-bottom:10px;">
                                    <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5ad3537459563019100002f8/800x.webp?source_format=JPG" style="width:100px;height:100px;" />
                                </div>                                <?php
                                };
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1>Gwynn Indigo Beanie - Indigo/White/Balck</h1>
                        <p id="PriceFont">NT&#36 3680</p>

                        <div style="margin:30px 0;">
                            <span>顏色</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control" style="margin:10px 0;">
                                        <option>黑色</option>
                                        <option>白色</option>
                                        <option>灰色</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin:30px 0;">
                            <span>數量</span>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group" id='myform' style="margin:10px 0;">
                                        <button type='button' value='-' class="btn qtyminus rounded-circle mr-2" field='quantity'><i class="fa fa-minus"></i></button>
                                        <input class="form-control" type='text' name='quantity' value='0' />
                                        <button type='button' value='+' class="btn qtyplus rounded-circle ml-2" field='quantity'><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn  btn-outline-dark btn-lg btn-block"><b>加入購物車</b></button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container-fluid" style="padding:0 0px;">
                    <div class="row">
                        <div class="col-md-12">
                            <label style="margin-top:30px;">分享到</label>
                            <div>
                                <i class="fab fa-facebook-square" style="font-size:60px; color: #3B5998;"></i>
                                <i class="fab fa-twitter-square" style="font-size:60px; color: #55ACEE;"></i>
                                <i class="fab fa-line" style="font-size:60px;color:rgb(0, 195, 0);"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top" style="padding-top:30px;margin-top:30px;">
                            <h2>商品敘述</h2>
                            <p>沒有這個商品的敘述。</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top" style="padding-top:30px;margin-top:30px;">
                            <h2>了解更多</h2>
                            <div class="row" id="detail_img">                                <?php
                                for($i=0;$i<3;$i++){
                                ?>
                                <div class="offset-md-3 col-md-6" style="margin-top:30px;">
                                    <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5ad3537459563019100002f8/800x.webp?source_format=JPG" style="width:100%" />
                                </div>                                <?php
                                };
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 border-top" style="padding-top:30px;margin-top:30px;">
                            <h2>相關商品</h2>
                            <div class="row" style="padding:0 10px;">                                <?php
                                for($i=0;$i<4;$i++){
                                ?>
                                <div class="col-6 col-md-3 text-center" id="Related_Products">
                                    <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5ad3537459563019100002f8/800x.webp?source_format=JPG" style="width:100%" />
                                    <p style="margin-top:20px;">商品一</p>
                                    <p>NT&#36 3680</p>
                                </div>                                <?php
                                };
                                ?>


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 border-top" style="padding-top:30px;margin-top:30px;">
                            <p style="font-size:20px;">未撰寫</p>
                            <img src="img/fb.jpg" alt="Alternate Text" style="width:50%;" />
                        </div>
                    </div>
                </div>

                <!--商品-->
                <div class="container-fluid" id="Web-Products">

                </div>


            </div>
        </div>
    </div><?php include('dupTemplate/Footer.php'); ?>
</body>
</html>