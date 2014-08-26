<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/employee_c.php"; ?>
<script>
var pageData = {
    name: 'employee'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="employee.php"><b class="glyphicon glyphicon-th-list"></b>员工列表</a>
            </li>
            <li><a href="#overview-mobile"><b class="glyphicon glyphicon-plus"></b>新增员工</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>员工姓名</th>
                <th>联系方式</th>
                <th>所在门店</th>
                <th>加入时间</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $employee) { ?>
            <tr>
                <td>
                    <?=$employee[ 'ename']?>
                </td>
                <td>
                    <?=$employee[ 'phone']?>
                </td>
                <td>
                    <?=$employee[ 'name']?>
                </td>
                <td>
                    <?=$employee[ 'time']?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
