<?php require "../lib/config.php";require "../lib/jump.php";require "../public/control/header.php"; ?>
<script>
var pageData = {
    name: 'book'
}
</script>
    <div class="col-md-2">
        <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top" role="complementary">
            <ul class="nav bs-docs-sidenav">
                <li>
                    <a href="#overview">概览</a>
                    <ul class="nav">
                        <li><a href="#overview-doctype">HTML5 文档类型</a>
                        </li>
                        <li><a href="#overview-mobile">移动设备优先</a>
                        </li>
                        <li><a href="#overview-type-links">排版与链接</a>
                        </li>
                        <li><a href="#overview-normalize">Normalize.css</a>
                        </li>
                        <li><a href="#overview-container">布局容器</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

<?php require "../public/control/footer.php"; ?>
<?=setJS( "control.js").setJS( "control_index.js")?>
