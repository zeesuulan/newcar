<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/store_c.php"; ?>
<script>
var pageData = {
    name: 'store'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="store.php"><b class="glyphicon glyphicon-th-list"></b>门店列表</a>
            </li>
            <li><a href="#overview-mobile"><b class="glyphicon glyphicon-plus"></b>新建门店</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>门店名称</th>
                <th>门店地址</th>
                <th>门店负责人</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $store) { ?>
            <tr>
                <td>
                    <?=$store[ 'name']?>
                </td>
                <td>
                    <?=$store[ 'address']?>
                </td>
                <td>
                    <?=$store[ 'ename']?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
