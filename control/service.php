<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php"; ?>
<script>
var pageData = {
    name: 'service'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="service.php"><b class="glyphicon glyphicon-th-list"></b>订单列表</a>
            </li>
            <li><a href="#overview-mobile"><b class="glyphicon glyphicon-th-list"></b>已完成列表</a>
            </li>
            <li><a href="#overview-type-links"><b class="glyphicon glyphicon-th-list"></b>未完成列表</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
