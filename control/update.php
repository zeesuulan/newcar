<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/update_c.php"; ?>
<script>
var pageData = {}
</script>
<div class="container">
    <form class="form col-md-8 col-md-offset-2" id="update_form">
        <?php if($type=="employee") { ?>
        <h3>修改员工信息</h3>
        <input type="hidden" class="form-control" name="type" value="<?=$type?>">
        <input type="hidden" class="form-control" name="id" value="<?=$id?>">
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
<?=setJS( "update.js")?>
