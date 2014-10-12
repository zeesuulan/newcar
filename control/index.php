<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/index_c.php"; ?>
<script>
var pageData = {
    name: 'index'
}
</script>
<div class="container">
    <div id="logo">
        <img src="../static/logo.jpg">
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">会员</div>
            <div class="panel-body">
                目前拥有会员
                <span class="cIndexNumber">
                    <?=$m_num?>
                </span>位
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">雇员</div>
            <div class="panel-body">
                目前拥有雇员
                <span class="cIndexNumber">
                    <?=$e_num?>
                </span>位
            </div>
        </div>
    </div>
    <?php if(isAdmin()){ ?>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">门店</div>
            <div class="panel-body">
                目前拥有门店
                <span class="cIndexNumber">
                    <?=$s_num?>
                </span>家
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">订单</div>
            <div class="panel-body">
                目前拥有订单
                <span class="cIndexNumber">
                    <?=$b_num?>
                </span>条， 完成
                <span class="cIndexNumber">
                    <?=$bd_num?>
                </span>条
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
    <script>
    $("#logo").fadeIn().animate({
        "top": "0"
    })
    </script>
