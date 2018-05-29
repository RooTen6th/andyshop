<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <style>


        /*WebPage*/
        @media (min-width: 768px) {
            .card {
                width: 400px;
                cursor: pointer;
                margin: 0 auto;
            }

                .card:hover {
                    opacity: 0.5;
                }

                    .card:hover > .btn {
                        display: block;
                    }

                .card img {
                    height: 500px;
                    width: 400px;
                    display: block;
                }

                .card .btn {
                    display: none;
                    position: absolute;
                    left: 0px;
                    bottom: 125px;
                    z-index: 1;
                    height: 60px;
                }

                    .card .btn span {
                        font-size: 20px;
                    }

            .card-body > p {
                font-size: 24px;
            }


            #Right-Content {
                margin-top: 200px;
                padding-right: 50px;
            }

            #Content {
                padding: 0 30px;
            }

            #Phone-Title {
                display: none;
            }

            #Web-Products {
                margin: 50px 0px;
            }
        }
        /*Phone*/
        @media (max-width:414px) {

            .card {
                width: 100%;
                cursor: pointer;
                margin: 0 auto;
            }

            .card-title {
                margin-bottom: 0px;
            }

            .card-title {
                margin-bottom: 0px;
            }

            .card img {
                width: 150px;
                display: block;
                margin: 0 auto;
            }

            .card-body {
                padding: 20px;
            }

                .card-body > p {
                    font-size: 16px;
                }


            .card .btn {
                position: absolute;
                left: 0px;
                bottom: -25px;
                z-index: 0;
                background-color: #FFFFFF;
                height: 35px;
            }

                .card .btn span {
                    display: none;
                }

                .card .btn i {
                    color: #000000;
                }


            #Right-Content {
                margin-top: 20px;
            }

                #Right-Content select {
                    margin: 5px 0px;
                }


            #Web-Title {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!--購物車側欄--><?php include('dupTemplate/StoreCarList.php'); ?>
    <!--Phone SideNav && TopNav --><?php include('dupTemplate/PhoneTopBarTool.php'); ?><?php include('dupTemplate/WindowTopBarTool.php'); ?>
    <div class="container-fluid" id="Content">
        <div class="row"><?php include('dupTemplate/RightBarTool.php'); ?>
            <div class="col-md-10" id="Right-Content">
                <div class="row  border-top" style="padding-top:50px;">
                    <div class="col-sm-12 col-md-9" id="Web-Title">
                        <span>全部商品</span>
                    </div>

                    <div class="col-md-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-5  col-sm-12">
                                    <select class="form-control">
                                        <option selected disabled>商品排序</option>
                                        <option>上架時間&#58;從新到舊</option>
                                        <option>上架時間&#58;從舊到新</option>
                                        <option>價格&#58;由高至低</option>
                                        <option>價格&#58;由低至高</option>
                                    </select>
                                </div>
                                <div class="col-md-5 offset-md-1 col-sm-12">
                                    <select class="form-control">
                                        <option selected disabled>每頁顯示24個</option>
                                        <option>每頁顯示24個</option>
                                        <option>每頁顯示48個</option>
                                        <option>每頁顯示72個</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9" id="Phone-Title" style="margin-top: 20px;">
                        <span>全部商品</span>
                    </div>
                </div>

                <!--商品-->
                <div class="container-fluid" id="Web-Products">
                    <div class="row"><?php for($i=0;$i<10;$i++){?>
                        <div class="col-lg-3 col-6" style="margin-bottom:30px;padding:10px;">

                            <div class="card border-0" onclick="javascript:location.href='Product_Page.php'">
                                <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5ad352f64e22a6ce1100282f/800x.webp?source_format=JPG" data-holder-rendered="true">
                                <button href="#" class="btn btn-secondary btn-block rounded-0" style="z-index:1;"><span>加入購物車</span><i class="fa fa-shopping-cart"></i></button>
                                <div class="card-body">
                                    <p class="card-title">商品1</p>
                                    <p class="card-text">NT&#36 3680</p>
                                </div>
                            </div>
                        </div><?php };?>
                    </div>
                </div>

                <!--分頁-->
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div><?php include('dupTemplate/Footer.php'); ?>
</body>
</html>