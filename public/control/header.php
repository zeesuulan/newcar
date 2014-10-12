<html lang="en" style="height:100%">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>JIATONG</title>
    <?=setCSS( 'bootstrap.min.css').setCSS( 'dp.css').setCSS( 'global.css')?>
</head>

<body>
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">首页</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li id="member"><a href="member.php">会员管理</a>
                </li>
                <?php if(isAdmin()) { ?>
                <li id="service"><a href="service.php">服务管理</a>
                </li>
                <?php } ?>
                <li id="book"><a href="book.php">订单管理</a>
                </li>
                <?php if(isAdmin()) { ?>
                <li id="store"><a href="store.php">门店管理</a>
                </li>
                <li id="employee"><a href="employee.php">员工管理</a>
                </li>
                <li id="notice"><a href="notice.php">公告管理</a>
                </li>
                <li id="active"><a href="active.php">活动发布管理</a>
                </li>
                 <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="logout">退出<span>（<?=$_SESSION['username']?>）</span></a>
                </li>
            </ul>
        </div>

    </div>
