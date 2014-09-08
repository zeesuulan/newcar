<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/book_c.php"; ?>
<script>
var pageData = {
    name: 'book'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="book.php"><b class="glyphicon glyphicon-th-list"></b>订单列表</a>
            </li>
            <li><a href="#overview-mobile"><b class="glyphicon glyphicon-th-list"></b>已完成列表</a>
            </li>
            <li><a href="#overview-type-links"><b class="glyphicon glyphicon-th-list"></b>未完成列表</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>会员号</th>
                <th>预约门店</th>
                <th>预约时间</th>
                <th>预约服务</th>
                <th>状态</th>
                <th>分配技师</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($book as $b) { ?>
            <tr>
                <td>
                    <?=$b[ 'member_num']?>
                </td>
                <td>
                    <?=$b[ 'store_name']?>
                </td>
                <td>
                    <?=$b[ 'date'].$b['time']?>
                </td>
                <td>
                    <?=$b[ 'sort_name']." - ".$b[ 'subsort_name']?>
                </td>
                <td>
                    <?=$b[ 'status']==1 ? "正常" : "已取消"?>
                </td>
                <td>
                <select class="form-control e_change" bid="<?=$b[ 'id']?>" name="employee">
                    <option value="">不选择</option>
                    <?php foreach($employee as $e) { ?>
                    <option value="<?=$e['id']?>" <?=($b["employee_id"] == $e['id'] ? "selected=selected" : "")?>>
                        <?=$e[ 'ename']." - ".$e['store_name']?>
                    </option>
                    <?php } ?>
                </select>
                </td>
                <td>
                    <a href="#" class="e_del btn btn-danger" eid="<?=$b[ 'id']?>" ><span class="glyphicon glyphicon-remove"></span>删除</a>
                    <a class="btn btn-primary" href="update.php?type=employee&id=<?=$b['id']?>" mid=""><span class="glyphicon glyphicon-pencil"></span>更新状态</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
