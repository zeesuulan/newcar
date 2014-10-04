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
                    <a href="info.php?type=employee&id=<?=$employee['id']?>"><?=$employee[ 'ename']?></a>
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
                    <a href="#" class="e_del btn btn-danger" eid="<?=$employee[ 'id']?>" ><span class="glyphicon glyphicon-remove"></span>删除</a>
                    <a class="btn btn-primary" href="update.php?type=employee&id=<?=$employee['id']?>" mid=""><span class="glyphicon glyphicon-pencil"></span>更新信息</a>
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
                        <label for="sname">员工工号</label>
                        <input type="text" class="form-control" name="eid" placeholder="员工工号">
                    </div>
                    <div class="form-group">
                        <label for="sname">身份证</label>
                        <input type="text" class="form-control" name="id_num" placeholder="身份证">
                    </div>
                    <div class="form-group">
                        <label for="sname">员工生日</label>
                        <input type="text" class="form-control dp" name="birthday" placeholder="员工生日">
                    </div>
                    <div class="form-group">
                        <label for="sname">电话</label>
                        <input type="text" class="form-control" name="phone" placeholder="电话">
                    </div>
                    <div class="form-group">
                        <label for="sname">地址</label>
                        <input type="text" class="form-control" name="address" placeholder="地址">
                    </div>
                    <div class="form-group">
                        <label for="sname">入职时间</label>
                        <input type="text" class="form-control dp" name="entryTime" placeholder="入职时间">
                    </div>
                    <div class="form-group">
                        <label for="sname">入职渠道</label>
                        <select name="entryWay" class="form-control">
                            <option value="1">公开招聘</option>
                            <option value="2">介绍</option>
                            <option value="">备注</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="entryWayTxt" placeholder="备注">
                    </div>
                    <div class="form-group">
                        <label for="sname">所属部门</label>
                        <input type="text" class="form-control" name="department" placeholder="所属部门">
                    </div>
                     <div class="form-group">
                        <label for="sname">所属岗位</label>
                        <input type="text" class="form-control" name="position" placeholder="所属岗位">
                    </div>
                    <div class="form-group">
                        <label for="sname">紧急联络人</label>
                        <input type="text" class="form-control" name="emergencyContactor" placeholder="紧急联络人">
                    </div>
                    <div class="form-group">
                        <label for="sname">紧急联络人电话</label>
                        <input type="text" class="form-control" name="emergencyContactPhone" placeholder="紧急联络人电话">
                    </div>
                    <div class="form-group">
                        <label for="sname">员工状态</label>
                        <select class="form-control" name="status">
                            <?php foreach($employee_status as $key => $es) { ?>
                                <option value="<?=$key?>"><?=$es?></option>
                            <?php } ?>
                            <option value="">备注</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="statusTxt" placeholder="备注">
                    </div>
                    <div class="form-group">
                        <label for="sname">所在门店</label>
                        <select class="form-control" name="store_id">
                            <option value="">不选择</option>
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
<?=setJS( "control.js").setJS( "dp.js").setJS( "locales/zh-CN.js")?>
<script>
$('.dp').datetimepicker({
    format: 'yyyy-mm-dd',
    language: "zh-CN",
    minView: "2"
});


function test(){
    $.post("../api/add.php", 
        {
            "ftype" :"employee",
            "ename" : "dddddd" + Math.random(),
            "phone" : "12333123123",
            "id_num" : "123123123",
            "eid" : "3213123",
            "birthday" : "123213",
            "address" : "123123",
            "entryTime" : "123123",
            "entryWay" : 1,
            "entryWayTxt" : "asdasd",
            "department" : "2333",
            "position" : "11222",
            "emergencyContactor" : "4444",
            "emergencyContactPhone" : "4444",
            "status" : "",
            "statusTxt" : "statusTxt",
            "store_id" : "22"
        }, function(data) {
            console.log(data)
            return
        if (data.no == 0) {
            reload()
        } else {
            errmsg.html(data.msg)
        }
    }, "json")
}

</script>