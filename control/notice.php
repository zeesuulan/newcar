<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/notice_c.php";  ?>
<script>
var pageData = {
    name: 'notice'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="notice.php"><b class="glyphicon glyphicon-th-list"></b>公告列表</a>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#noticeModal"><b class="glyphicon glyphicon-plus"></b>添加公告</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <table class="table table-striped table-hover ">
        <thead>
            <tr>
                <th>公告名称</th>
                <th>公告内容</th>
                <th>发布时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($notice as $a) { ?>
            <tr>
                <td>
                    <?=$a[ 'title']?>
                </td>
                <td>
                    <pre><?=$a[ 'content']?></pre>
                </td>
                <td>
                    <?=$a[ 'time']?>
                </td>
                <td>
                    <a href="#" class="n_del btn btn-danger" nid="<?=$a[ 'id']?>" >删除</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal" id="noticeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加公告</h4>
            </div>
            <div class="modal-body">
                <form id='notice_form'>
                    <input type="hidden" class="form-control" name="ftype" value="notice">
                    <div class="form-group">
                        <label for="title">活动名称</label>
                        <input type="text" class="form-control" name="title" placeholder="活动名称">
                    </div>
                    <div class="form-group">
                        <label for="content">活动内容</label>
                        <textarea name="content" class="form-control" cols="30" rows="7"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content">同时发布</label>
                        <input type="checkbox" checked="checked" name="published">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="notice_store">保存</button>
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
