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
            <li><a href="#" data-toggle="modal" data-target="#employeeModal"><b class="glyphicon glyphicon-plus"></b>新增员工</a>
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
                <th>操作</th>
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
                <td>
                    <a href="#" class="e_del btn btn-danger" eid="<?=$employee[ 'id']?>" >删除</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal" id="employeeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">新增员工</h4>
            </div>
            <div class="modal-body">
                <form id='employee_form'>
                    <input type="hidden" class="form-control" name="ftype" value="employee">
                    <div class="form-group">
                        <label for="sname">员工姓名</label>
                        <input type="text" class="form-control" name="ename" placeholder="员工姓名">
                    </div>
                    <div class="form-group">
                        <label for="sname">联系方式</label>
                        <input type="text" class="form-control" name="phone" placeholder="联系方式">
                    </div>
                    <div class="form-group">
                        <label for="sname">所在门店</label>
                        <select class="form-control" name="store_id">
                            <?php foreach($store as $s) { ?>
                            <option value="<?=$s['id']?>">
                                <?=$s[ 'name']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="employee_store">保存</button>
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
