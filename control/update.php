<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/update_c.php"; ?>
<script>
var pageData = {}
</script>
<div class="container">
    <form class="form col-md-8 col-md-offset-2" id="update_form">
        <input type="hidden" class="form-control" name="type" value="<?=$type?>">
        <input type="hidden" class="form-control" name="id" value="<?=$id?>">
        <?php if($type=="store") { ?>
            <h3>修改门店信息</h3>
             <div class="form-group">
                <label for="sname">门店名称</label>
                <input type="text" class="form-control" name="sname" value="<?=$store["name"]?>">
            </div>
            <div class="form-group">
                <label for="saddress">门店地址</label>
                <input type="text" class="form-control" name="saddress" value="<?=$store["address"]?>">
            </div>
            <div class="form-group">
                <label for="sname">门店负责人</label>
                <select class="form-control" name="manager">
                    <?php foreach($employee as $e) { ?>
                    <option value="<?=$e['id']?>" <?=twone($e['id'], $store['manager'], "selected='selected'") ?>>
                        <?=$e[ 'ename']?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
        <?php if($type=="notice") { ?>
            <h3>修改公告信息</h3>
            <div class="form-group">
                <label for="title">活动名称</label>
                <input type="text" class="form-control" name="title" value="<?=$notice['title']?>">
            </div>
            <div class="form-group">
                <label for="content">活动内容</label>
                <textarea name="content" class="form-control" cols="30" rows="7"><?=$notice['content']?></textarea>
            </div>
        <?php } ?>
        <?php if($type=="active") { ?>
            <h3>修改活动信息</h3>
            <div class="form-group">
                <label for="sname">活动名称</label>
                <input type="text" class="form-control" name="title" value="<?=$active['title']?>">
            </div>
            <div class="form-group">
                <label for="sname">活动时间</label>
                <input type="text" class="form-control dp" id="activeTime" name="time" value="<?=$active['time']?>">
            </div>
            <div class="form-group">
                <label for="content">活动会员价格</label>
                <input type="text" class="form-control" name="mp" value="<?=$active['member_price']?>">
            </div>
            <div class="form-group">
                <label for="content">活动非会员价格</label>
                <input type="text" class="form-control" name="nmp" value="<?=$active['non_member_price']?>">
            </div>
            <div class="form-group">
                <label for="content">活动内容</label>
                <textarea name="content" class="form-control" cols="30" rows="7"><?=$active['content']?></textarea>
            </div>
        <?php } ?>
        <?php if($type=="employee") { ?>
            <h3>修改员工信息</h3>
            <div class="form-group">
                <label for="sname">员工姓名</label>
                <input type="text" class="form-control" name="ename" value="<?=$employee['ename']?>">
            </div>
            <div class="form-group">
                <label for="sname">联系方式</label>
                <input type="text" class="form-control" name="phone" value="<?=$employee['phone']?>">
            </div>
            <div class="form-group">
                <label for="sname">所在门店</label>
                <select class="form-control" name="store_id">
                    <option value="">不选择</option>
                    <?php foreach($store as $s) { ?>
                    <option value="<?=$s['id']?>" <?=twone($employee['store_id'], $s['id'], "selected='selected'") ?>>
                        <?=$s[ 'name']?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-default">更新</button>
    </form>
</div>

<?php require "../public/control/footer.php"; ?>
<?=setJS( "update.js").setJS( "dp.js").setJS( "locales/zh-CN.js")?>
<script>
$('.dp').datetimepicker({
    format: 'yyyy-mm-dd HH:ii',
    language: "zh-CN",
    minView: "0"
});
</script>