<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/active_c.php"; ?>
<script>
var pageData = {
    name: 'active'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="active.php"><b class="glyphicon glyphicon-th-list"></b>活动列表</a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#activeModal"><b class="glyphicon glyphicon-plus"></b>添加活动</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>活动名称</th>
                <th>活动内容</th>
                <th>价格</th>
                <th>活动时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($active as $a) { ?>
            <tr>
                <td>
                    <?=$a[ 'title']?>
                </td>
                <td>
                	<pre><?=$a[ 'content']?></pre>
                </td>
                <td>
                    <div>会员价：￥<?=$a[ 'member_price']?></div>
                    <div>非会员价：￥<?=$a[ 'non_member_price']?></div>
                </td>
                <td>
                    <?=$a[ 'time']?>
                </td>
                <td>
                    <?=twone($a['status'] , 1, "开启中" , "过期")?>
                </td>
                <td>
                    <a href="#" class="a_del btn btn-danger" aid="<?=$a[ 'id']?>" ><span class="glyphicon glyphicon-remove"></span>删除</a>
                    <a class="as_update btn btn-info" href="#" aid="<?=$a['id']?>" as="<?=$a['status']?>"><span class="glyphicon glyphicon-refresh"></span>更换状态</a>
                    <a class="btn btn-primary" href="update.php?type=active&id=<?=$a['id']?>" mid=""><span class="glyphicon glyphicon-pencil"></span>更新信息</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal" id="activeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加活动</h4>
            </div>
            <div class="modal-body">
                <form id='active_form'>
                    <input type="hidden" class="form-control" name="ftype" value="active">
                    <div class="form-group">
                        <label for="sname">活动名称</label>
                        <input type="text" class="form-control" name="title" placeholder="活动名称">
                    </div>
                    <div class="form-group">
                        <label for="sname">活动时间</label>
                        <input type="text" class="form-control" id="activeTime" name="time" placeholder="活动时间">
                    </div>
                    <div class="form-group">
                        <label for="content">活动会员价格</label>
                        <input type="text" class="form-control" name="mp" placeholder="活动会员价格">
                    </div>
                    <div class="form-group">
                        <label for="content">活动非会员价格</label>
                        <input type="text" class="form-control" name="nmp" placeholder="活动非会员价格">
                    </div>
                    <div class="form-group">
                        <label for="content">活动内容</label>
                        <textarea name="content" class="form-control" cols="30" rows="7"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="active_store">保存</button>
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "dp.js").setJS( "locales/zh-CN.js")?>
<script>
$('#activeTime').datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    language: "zh-CN"
});
</script>
