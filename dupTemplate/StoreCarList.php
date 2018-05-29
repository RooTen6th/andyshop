<div style="height:100%;width:350px;z-index:100;background-color:#323536;position:fixed;display:none;" id="StoreCar">
    <div style="background-color:#1f2429;width:100%;padding:20px;color:#ffffff;font-size:24px;">購物車</div>
    <div class="row " style="padding:20px;">
        <div class="col-md-4">
            <img src="https://shoplineimg.com/53e6fa271a08e051c4000003/5b000d320e64fee20a005d67/600x.webp?source_format=jpg" alt="Alternate Text" style="max-width:100%;" />
        </div>
        <div class="col-md-5" style="color:#ffffff;font-size:18px;padding:0px;">
            Suicoke Nylon Tape Straps Sandals
            1x NT$3,580
        </div>
        <div class="col-md-3" style="color:gray;">刪除</div>
    </div>
    <div class="border-top border-secondary" style="padding:20px;">
        <button class="btn btn-block" type="button" style="border: 1px solid #888;background-color: #232a32;color:#fff;" onclick="javascript: location.href='Checkout.php'">訂單結帳</button>
    </div>
</div>
<!--購物車側欄UI-->
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(document).ready(function () {
        $("#StoreCarbtn").click(function () {
            $("#StoreCar").toggle("slide");
        });
    });
</script>
