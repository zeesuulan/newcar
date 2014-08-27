<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/service_c.php"; ?>
<script>
var pageData = {
    name: 'service'
}
</script>
<div class="col-md-2">
    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
        <ul class="nav">
            <li><a href="service.php"><b class="glyphicon glyphicon-th-list"></b>服务管理</a>
            </li>
        </ul>
    </div>
</div>
<div class="col-md-10">
    <div class="col-md-12">
        <a href="#" class="btn btn-Warning" data-toggle="modal" data-target="#bigSortModal"><b class="glyphicon glyphicon-plus"></b>添加大类</a>
        <a href="#" class="btn btn-Warning" data-toggle="modal" data-target="#subSortModal"><b class="glyphicon glyphicon-plus"></b>添加子类</a>
    </div>
    <div class="col-md-3">
        <table class="table table-striped table-hover " style="margin-top:20px">
            <thead>
                <tr>
                    <th>大类名称</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sort as $s) { ?>
                <tr>
                    <td><?=$s['sname']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-5">
        <table class="table table-striped table-hover col-md-6" style="margin-top:20px">
            <thead>
                <tr>
                    <th>所属大类</th>
                    <th>子类名称</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sub_sort as $ss) { ?>
                <tr>
                    <td><?=$ss['sname']?></td>
                    <td><?=$ss['name']?></td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal" id="bigSortModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加大类</h4>
            </div>
            <div class="modal-body">
                <form id='bigSort_form'>
                    <input type="hidden" class="form-control" name="ftype" value="s_sort">
                    <div class="form-group">
                        <label for="title">大类名称</label>
                        <input type="text" class="form-control" name="name" placeholder="活动大类">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="bigSortModal_store">保存</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="subSortModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">添加子类</h4>
            </div>
            <div class="modal-body">
                <form id='subSort_form'>
                    <input type="hidden" class="form-control" name="ftype" value="sub_sort">
                    <div class="form-group">
                        <select class="form-control" name="sort_id">
                            <?php foreach($sort as $s) { ?>
                            <option value="<?=$s['id']?>">
                                <?=$s[ 'sname']?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">子类名称</label>
                        <input type="text" class="form-control" name="name" placeholder="子类名称">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <p id="errmsg" class="text-danger"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="subSortModal_store">保存</button>
            </div>
        </div>
    </div>
</div>
<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js")?>
