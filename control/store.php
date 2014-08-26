<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php"; ?>
<script>
    var pageData = {
        name: 'store'
    }
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="#overview-doctype"><b class="glyphicon glyphicon-th-list"></b>门店列表</a>
            </li>
            <li><a href="#overview-mobile"><b class="glyphicon glyphicon-plus"></b>新建门店</a>
            </li>
        </ul>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
