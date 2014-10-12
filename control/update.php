<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php";require "../c/update_c.php"; ?>
<script>
var pageData = {}
</script>
<div class="container">
    <form class="form col-md-8 col-md-offset-2" id="update_form" >
        <input type="hidden" class="form-control" name="type" value="<?=$type?>">
        <input type="hidden" class="form-control" name="id" value="<?=$id?>">
         <p>
            <a href="<?=$type?>.php">返回列表</a>
        </p>
        <?php if($type=="member" ) { ?>
        <input type="hidden" class="form-control" name="dl_id" value="<?=$member["dl_id"]?>">
        <h3>用户信息</h3>
        <div class="form-group">
            <label for="title">会员卡</label>
            <input type="text" class="form-control" name="member_num" value="<?=$member['member_num']?>">
        </div>
        <div class="form-group">
            <label for="title">会员名称</label>
            <input type="text" class="form-control" name="name" value="<?=$member['name']?>">
        </div>
        <div class="form-group">
            <label for="title">会员身份证</label>
            <input type="text" class="form-control" name="id_num" value="<?=$member['id_num']?>">
        </div>
        <div class="form-group clearfix"  style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">会员期限</label>
                <input type="text" class="form-control dp" name="memberValid" value="<?=$member['memberValid']?>">
            </div>
            <div class="col-md-6">
                <label for="title">会员类别</label>
                <select name="memberSort" class="form-control">
                    <?php 
                        foreach($sort as $s) {
                     ?>
                    <option value="<?=$s['id']?>" <?=twone($s['id'], $member['memberSort'], "selected='selected'") ?>><?=$s['sort_txt']?></option>
                    <?php 
                        }
                     ?>
                </select>
            </div>
        </div>
         <div class="form-group">
            <label for="title">电话号码</label>
            <input type="text" class="form-control" name="phoneNumber" value="<?=$member['phoneNumber']?>">
        </div>
        <div class="form-group">
            <label for="title">车牌号</label>
            <input type="text" class="form-control" name="liesence" value="<?=$member['liesence']?>">
        </div>
        <div class="form-group">
            <label for="title">驾照档案号</label>
            <input type="text" class="form-control" name="liesenceFileNumber" value="<?=$member['liesenceFileNumber']?>">
        </div>
        <div class="form-group">
            <label for="title">厂牌车型</label>
            <input type="text" class="form-control" name="brand" value="<?=$member['brand']?>">
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">保险公司</label>
                <input type="text" class="form-control" name="insurer" value="<?=$member['insurer']?>">
            </div>
            <div class="col-md-6">
                <label for="title">保险期限</label>
                <input type="text" class="form-control dp" name="insurancePeriod" value="<?=$member['insurancePeriod']?>">
            </div>
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">发动机号</label>
                <input type="text" class="form-control" name="engineNumber" value="<?=$member['engineNumber']?>">
            </div>
            <div class="col-md-6">
                <label for="title">车架号码</label>
                <input type="text" class="form-control" name="frameNumber" value="<?=$member['frameNumber']?>">
            </div>
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">驾照有效起始日期</label>
                <input type="text" class="form-control dp" name="valid_date_start" value="<?=$member['valid_date_start']?>">
            </div>
            <div class="col-md-6">
                <label for="title">驾照有效结束日期</label>
                <input type="text" class="form-control dp" name="valid_date_end" value="<?=$member['valid_date_end']?>">
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="title">初次领证日期</label>
            <input type="text" class="form-control dp" name="firsttime" value="<?=$member['firsttime']?>">
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">驾照类型</label>
                <select name="dl_level" class="form-control">
                    <?php foreach($dl as $d) { ?>
                    <option value="<?=$d['id']?>" <?=twone($d['id'], $member['dl_level'], "selected='selected'") ?>>
                        <?=$d['name']?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="title">性别</label>
                <select name="gender" class="form-control">
                    <option value="1" <?=twone(1, $member['gender'], "selected='selected'") ?>>男</option>
                    <option value="0" <?=twone(0, $member['gender'], "selected='selected'") ?>>女</option>
                </select>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="title">住址</label>
            <input type="text" class="form-control" name="address" value="<?=$member['address']?>">
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">生日</label>
                <input type="text" class="form-control dp" name="birthday" value="<?=$member['birthday']?>">
            </div>
            <div class="col-md-6">
                <label for="title">国籍</label>
                <input type="text" class="form-control" name="nationality" value="<?=$member['nationality']?>">
            </div>
        </div>
        <div class="form-group clearfix" style="margin:0 -15px 15px;">
            <div class="col-md-6">
                <label for="title">来源渠道</label>
                <select name="origin_id" class="form-control">
                    <?php foreach($origin as $o) { ?>
                    <option value="<?=$o['id']?>" <?=twone($o['id'], $member['origin_id'], "selected='selected'") ?>>
                        <?=$o['name']?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="title">用户是否正常</label>
                <input type="checkbox" class="form-control" name="status" <?=twone($member['status'], true, "checked='checked'") ?>>
            </div>
        </div>
        <div class="form-group clearfix">
            <label for="title">所属门店</label>
             <select class="form-control" name="store_id">
                <?php foreach($store as $ss) { ?>
                <option value="<?=$ss['id']?>" <?=twone($ss['id'], $member['store_id'], "selected='selected'") ?>>
                    <?=$ss['name']?>
                </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group clearfix">
            <label for="title">业务员</label>
            <select class="form-control" name="employee_id">
                <option value="">不选择</option>
                <?php foreach($employee as $e) { ?>
                <option value="<?=$e['id']?>" <?=twone($e['id'], $member['employee_id'], "selected='selected'") ?>>
                    <?=$e[ 'ename']." - ".$e['store_name']?>
                </option>
                <?php } ?>
            </select>
        </div>
        <?php } ?>
        <?php if($type=="store" ) { ?>
        <h3>修改门店信息</h3>
        <div class="form-group">
            <label for="sname">门店名称</label>
            <input type="text" class="form-control" name="sname" value="<?=$store['name']?>">
        </div>
        <div class="form-group">
            <label for="saddress">门店地址</label>
            <input type="text" class="form-control" name="saddress" value="<?=$store['address']?>">
        </div>
        <div class="form-group">
            <label for="sname">门店负责人</label>
            <select class="form-control" name="manager">
                <?php foreach($employee as $e) { ?>
                <option value="<?=$e['id']?>" <?=twone($e['id'], $store['manager'], "selected='selected'") ?>>
                    <?=$e['ename']?>
                </option>
                <?php } ?>
            </select>
        </div>
        <?php } ?>
        <?php if($type=="notice" ) { ?>
        <h3>修改公告信息</h3>
        <div class="form-group">
            <label for="title">活动名称</label>
            <input type="text" class="form-control" name="title" value="<?=$notice['title']?>">
        </div>
        <div class="form-group">
            <label for="content">活动内容</label>
            <textarea name="content" class="form-control" cols="30" rows="7">
                <?=$notice['content']?>
            </textarea>
        </div>
        <?php } ?>
        <?php if($type=="active" ) { ?>
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
            <textarea name="content" class="form-control" cols="30" rows="7">
                <?=$active['content']?>
            </textarea>
        </div>
        <?php } ?>
        <?php if($type=="employee" ) { ?>
        <h3>修改员工信息</h3>
        <div class="form-group">
            <label for="sname">员工姓名</label>
            <input type="text" class="form-control" name="ename" value="<?=$employee['ename']?>">
        </div>
        <div class="form-group">
            <label for="sname">员工工号</label>
            <input type="text" class="form-control" name="eid" value="<?=$employee['eid']?>">
        </div>
        <div class="form-group">
            <label for="sname">身份证</label>
            <input type="text" class="form-control" name="id_num" value="<?=$employee['id_num']?>">
        </div>
        <div class="form-group">
            <label for="sname">员工生日</label>
            <input type="text" class="form-control dp" name="birthday" value="<?=$employee['birthday']?>">
        </div>
        <div class="form-group">
            <label for="sname">电话</label>
            <input type="text" class="form-control" name="phone" value="<?=$employee['phone']?>">
        </div>
        <div class="form-group">
            <label for="sname">地址</label>
            <input type="text" class="form-control" name="address" value="<?=$employee['address']?>">
        </div>
        <div class="form-group">
            <label for="sname">入职时间</label>
            <input type="text" class="form-control dp" name="entryTime" value="<?=$employee['entryTime']?>">
        </div>
        <div class="form-group">
            <label for="sname">入职渠道</label>
            <select name="entryWay" class="form-control">
                <option value="1" <?=twone("1", $employee['status'], "selected='selected'") ?>>公开招聘</option>
                <option value="2" <?=twone("2", $employee['status'], "selected='selected'") ?>>介绍</option>
                <option value="" <?=twone("", $employee['status'], "selected='selected'") ?>>备注</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="entryWayTxt" value="<?=$employee['entryWayTxt']?>"  placeholder="入职渠道备注">
        </div>
        <div class="form-group">
            <label for="sname">所属部门</label>
            <input type="text" class="form-control" name="department" value="<?=$employee['department']?>">
        </div>
         <div class="form-group">
            <label for="sname">所属岗位</label>
            <input type="text" class="form-control" name="position" value="<?=$employee['position']?>">
        </div>
        <div class="form-group">
            <label for="sname">紧急联络人</label>
            <input type="text" class="form-control" name="emergencyContactor" value="<?=$employee['emergencyContactor']?>">
        </div>
        <div class="form-group">
            <label for="sname">紧急联络人电话</label>
            <input type="text" class="form-control" name="emergencyContactPhone" value="<?=$employee['emergencyContactPhone']?>">
        </div>
        <div class="form-group">
            <label for="sname">员工状态</label>
            <select class="form-control" name="status">
                <?php foreach($employee_status as $key => $es) { ?>
                    <option value="<?=$key?>" <?=twone($key, $employee['status'], "selected='selected'") ?>><?=$es?></option>
                <?php } ?>
                <option value="" <?=twone(0, $employee['status'], "selected='selected'") ?>>备注</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="statusTxt" value="<?=$employee['statusTxt']?>" placeholder="状态备注">
        </div>
        <div class="form-group">
            <label for="sname">所在门店</label>
            <select class="form-control" name="store_id">
                <option value="">不选择</option>
                <?php foreach($store as $s) { ?>
                <option value="<?=$s['id']?>" <?=twone($employee['store_id'], $s['id'], "selected='selected'") ?>>
                    <?=$s['name']?>
                </option>
                <?php } ?>
            </select>
        </div>
        <?php } ?>
        <button class="btn btn-primary">更新信息</button>
    </form>
</div>

<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "update.js").setJS( "dp.js").setJS( "locales/zh-CN.js")?>
<script>
$('.dp').datetimepicker({
    format: 'yyyy-mm-dd',
    language: "zh-CN",
    minView: "2"
});
</script>