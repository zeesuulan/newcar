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
            <li><a href="#" data-toggle="modal" data-target="#storeModal"><b class="glyphicon glyphicon-plus"></b>新建门店</a>
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
                <th>操作</th>
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
                <td>
                    <a href="#" class="s_del btn btn-danger" sid="<?=$store[ 'id']?>" >删除</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="modal" id="storeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">新建门店</h4>
            </div>
            <div class="modal-body">
                <form id='store_form'>
                    <input type="hidden" class="form-control" name="ftype" value="store">
                    <div class="form-group">
                        <label for="sname">门店名称</label>
                        <input type="text" class="form-control" name="sname" placeholder="门店名称">
                    </div>
                    <div class="form-group">
                        <label for="saddress">门店地址</label>
                        <input type="text" class="form-control" name="saddress" placeholder="门店名称">
                    </div>
                    <div class="form-group">
                        <label for="sname">门店负责人</label>
                        <select class="form-control" name="manager">
                            <?php foreach($employee as $e) { ?>
                            <option value="<?=$e['id']?>">
                                <?=$e[ 'ename']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="save_store">保存</button>
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
