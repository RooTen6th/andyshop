<div style="height:60px;" id="Web_TopNav">
    <div id="fixed-menu-container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link disabled" href="../login.php" style="color:#000;"><i class="fa fa-user"></i>登入會員</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color:#000;" id="StoreCarbtn"><i class="fa fa-shopping-cart"></i>購物車</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" style="color:#000;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-comment"></i>聯絡我們</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:#000"><i class="fa fa-globe"></i>中文(繁)</a>
            </li>
            <li class="nav-item">
                <div class="form-inline" id="search">
                    <input class="text-center" id="box" placeholder="找商品" />
                    <a class="nav-link disabled" href="#" style="color:#000; width:40px;"><i class="fa fa-search"></i></a>
                </div>
            </li>
        </ul>

    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:10%;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form>
                    <p><b>聯絡我們</b></p>
                    <div class="form-group">
                        <input type="text" class="form-control" id="recipient-name" placeholder="請輸入你的電子信箱">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message-text" rows="5" style="resize:none;" placeholder="請輸入你的訊息"></textarea>
                    </div>
                    <button type="button" class="btn btn-dark" style="left:0;">發送</button>
                </form>
            </div>
        </div>
    </div>
</div>