<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/member_c.php"; ?>
<script>
var pageData = {
    name: 'member'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="book.php"><b class="glyphicon glyphicon-th-list"></b>会员列表</a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#mModal"><b class="glyphicon glyphicon-plus"></b>新增会员</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <div class="col-md-12">
        <a href="#" class="btn btn-Warning" data-toggle="modal" data-target="#cModal"><b class="glyphicon glyphicon-plus"></b>添加渠道</a>
    </div>
    <div class="col-md-3">
        <table class="table table-striped table-hover " style="margin-top:20px">
            <thead>
                <tr>
                    <th>渠道名称</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($origin as $o) { ?>
                <tr>
                    <td><?=$o['name']?><a href="#" oid="<?=$o['id']?>" class="glyphicon glyphicon-remove delIcon o_del" title="删除渠道"></a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-9">
        <table class="table table-striped table-hover col-md-6" style="margin-top:20px">
            <thead>
                <tr>
                    <th>会员名</th>
                    <th>会员卡号</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($member as $m) { ?>
                <tr>
                    <td><?=$m['name']?></td>
                    <td><?=$m['member_num']?></td>
                    <td><?=twone($m['status'] , 1, "激活" , "未激活")?></td>
                    <td><a class="m_del btn btn-danger" href="#" mid="<?=$m['id']?>"><span class="glyphicon glyphicon-remove"></span>删除</a>
                    <a class="ms_del btn btn-info" href="#" mid="<?=$m['id']?>" ms="<?=$m['status']?>"><span class="glyphicon glyphicon-refresh"></span>更换状态</a>
                    <a class="btn btn-primary" href="update.php?type=member&id=<?=$m['id']?>" mid=""><span class="glyphicon glyphicon-pencil"></span>更新信息</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal" id="mModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加会员</h4>
            </div>
            <div class="modal-body">
                <form id='member_form'>
                    <input type="hidden" class="form-control" name="ftype" value="member">
                    <div class="form-group">
                        <label for="title">会员卡</label>
                        <input type="text" class="form-control" name="member_num" placeholder="会员卡">
                    </div>
                    <div class="form-group">
                        <label for="title">密码</label>
                        <input type="password" class="form-control" name="password" placeholder="密码">
                    </div>
                    <div class="form-group">
                        <label for="title">确认密码</label>
                        <input type="password" class="form-control" name="confirm_password" placeholder="确认密码">
                    </div>
                    <div class="form-group">
                        <label for="title">会员名称</label>
                        <input type="text" class="form-control" name="name" placeholder="会员名称">
                    </div>
                    <div class="form-group">
                        <label for="title">会员身份证</label>
                        <input type="text" class="form-control" name="id_num" placeholder="会员身份证">
                    </div>
                    <div class="form-group clearfix" style="margin:0 -15px 15px;">
                        <div class="col-md-6">
                            <label for="title">有效起始日期</label>
                            <input type="text" class="form-control dp" name="valid_date_start" placeholder="有效起始日期">
                        </div>
                        <div class="col-md-6">
                            <label for="title">有效结束日期</label>
                            <input type="text" class="form-control dp" name="valid_date_end" placeholder="有效结束日期">
                        </div>
                    </div>
                    <div class="form-group clearfix">
                            <label for="title">初次领证日期</label>
                            <input type="text" class="form-control dp" name="firsttime" placeholder="初次领证日期">
                    </div>
                    <div class="form-group clearfix" style="margin:0 -15px 15px;">
                        <div class="col-md-6">
                            <label for="title">驾照类型</label>
                            <select name="dl_level" class="form-control">
                                <?php 
                                    foreach($dl as $d) {
                                 ?>
                                <option value="<?=$d['id']?>"><?=$d['name']?></option>
                                <?php 
                                    }
                                 ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="title">性别</label>
                            <select name="gender" class="form-control">
                                <option value="1">男</option>
                                <option value="0">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                            <label for="title">住址</label>
                            <input type="text" class="form-control" name="address" placeholder="住址">
                    </div>
                    <div class="form-group clearfix" style="margin:0 -15px 15px;">
                        <div class="col-md-6">
                            <label for="title">生日</label>
                            <input type="text" class="form-control dp" name="birthday" placeholder="生日">
                        </div>
                        <div class="col-md-6">
                            <label for="title">国籍</label>
                            <input type="text" class="form-control" name="nationality" value="中国">
                        </div>
                    </div>
                    <div class="form-group clearfix" style="margin:0 -15px 15px;">
                        <div class="col-md-6">
                            <label for="title">来源渠道</label>
                            <select name="origin_id" class="form-control">
                                <?php 
                                    foreach($origin as $o) {
                                 ?>
                                <option value="<?=$o['id']?>"><?=$o['name']?></option>
                                <?php 
                                    }
                                 ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="title">激活</label>
                            <input type="checkbox" class="form-control" name="status" checked="checked">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="member_store">保存</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="cModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加渠道</h4>
            </div>
            <div class="modal-body">
                <form id='channel_form'>
                    <input type="hidden" class="form-control" name="ftype" value="member_origin">
                    <div class="form-group">
                        <label for="title">渠道名称</label>
                        <input type="text" class="form-control" name="name" placeholder="渠道名称">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="channel_store">保存</button>
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
</script>