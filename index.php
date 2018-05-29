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
    <style>
        /*Phone_Page*/
        @media (max-width: 414px) {

            .carousel-image {
                padding-bottom: 20px;
            }

            #Content {
                padding: 0px;
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

        }
  
            /*Web_Page*/
            @media (min-width: 768px) {



                #Content {
                    padding: 20px 30px;
                }



            }
            /*////////////////////////////////////////////*/



    </style>
 
</head>
<body>
    <!--購物車側欄-->
    <?php include('dupTemplate/StoreCarList.php'); ?>
    <!--Phone SideNav && TopNav -->
    <?php include('dupTemplate/PhoneTopBarTool.php'); ?>
    <div style="position:fixed relative;z-index:0;">
        <!--Web TopNav-->
        <?php include('dupTemplate/WindowTopBarTool.php'); ?>
        <div class="container-fluid" id="Content">
            <div class="col-md-12">
                <div class="row">
                    <!--Web SideNav-->
                    <?php include('dupTemplate/RightBarTool.php'); ?>
                    <div class="col-md-10 carousel-image">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://icrvb3jy.xinmedia.com/solomo/article/58798/DA7DA27A-D61C-7651-E263-5A127B3CCE7C.jpg" alt="First slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://cdn1-digiphoto-techbang.pixfs.net/system/images/101585/original/8d5dbf6dec6aa76245c43eb8791e4941.jpg?1439950514" alt="Second slide" />
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://shop.r10s.jp/jeijei/cabinet/epoch/epo7738910768.jpg" alt="Third slide" />
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('dupTemplate/Footer.php'); ?>
    </div>
</body>
</html>