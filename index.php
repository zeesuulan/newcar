<?php require "lib/config.php"; require "lib/index_jump.php"; ?>
<!DOCTYPE html>
<html lang="en" style="height:100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>JIATONG</title>
    <?=setCSS( 'bootstrap.min.css').setCSS( 'global.css')?>
</head>

<body style="height:100%">
    <div class="jumbotron" id="wrap">
        <div id="logo">
            <img src="static/logo.jpg">
        </div>
        <form class="form" style="width:30%;margin:50px auto" id="loginForm">
            <div class="form-group">
                <label for="username" class="control-label">
                    <span class="glyphicon glyphicon-user"></span>用户名：</label>
                    <input type="text" class="form-control" id="login[]" name="username" placeholder="用户名">
            </div>
            <div class="form-group">
                <label for="password" class="control-label">
                    <span class="glyphicon glyphicon-th"></span>密码：</label>
                    <input type="password" class="form-control" id="login[]" name="password" placeholder="密码">
            </div>
            <p id="errmsg" class="text-danger"></p>
            <div class="form-group">
                <div class="">
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>
            </div>
        </form>
    </div>
</body>
<?=setJS( 'jquery.js').setJS( 'jquery.md5.js').setJS( 'bootstrap.min.js')?>
<?=setJS( 'index.js')?>

</html>
