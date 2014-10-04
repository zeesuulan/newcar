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
            <li><a href="book.php?status=1"><b class="glyphicon glyphicon-th-list"></b>已完成列表</a>
            </li>
            <li><a href="book.php?status=0"><b class="glyphicon glyphicon-th-list"></b>未完成列表</a>
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
                <th>完成状态</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($book as $b) { ?>
            <tr>
                <td>
                    <a href="info.php?type=book&id=<?=$b['id']?>"><?=$b[ 'member_num']?></a>
                </td>
                <td>
                    <?=$b[ 'store_name']?>
                </td>
                <td>
                    <?=$b[ 'date']." ".($b['time'] ? "上午":"下午")?>
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
                    <a class="btn btn-info b_ok" href="#" bid="<?=$b['id']?>"><span class="glyphicon glyphicon-ok"></span>完成</a>
                    <a class="b_cancel btn btn-primary" href="#" bid="<?=$b['id']?>" bs="<?=$b['statue']?>"><span class="glyphicon glyphicon-stop"></span>取消</a>
                    <a href="#" class="b_del btn btn-danger" bid="<?=$b[ 'id']?>" ><span class="glyphicon glyphicon-remove"></span>删除</a>
                </td>
                <td>
                    <?=$b['done']==1 ? "已完成" : "未完成"?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
