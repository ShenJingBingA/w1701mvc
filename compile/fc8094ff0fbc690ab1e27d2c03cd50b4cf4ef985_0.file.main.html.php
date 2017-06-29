<?php
/* Smarty version 3.1.30, created on 2017-06-29 02:57:21
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/admin/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59545071a0b294_71631415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc8094ff0fbc690ab1e27d2c03cd50b4cf4ef985' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/admin/main.html',
      1 => 1498697837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59545071a0b294_71631415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    html,body{
    width:100%;height:100%;
}
body{
    padding:0;margin:0;
    overflow: hidden;
}
header{
    width:100%;height:20%;
    border-bottom: 2px solid #000;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;

}
.box{
    width:100%;height:80%;
}
.box .left{
    float:left;
    width:20%;height:100%;
    border-right:2px solid #000;
    box-sizing: border-box;
}
.box .right{
    float:left;
    width:80%;height:100%;
}
iframe{
    width:100%;height:100%;
}
</style>
</head>
<body>

<header>
欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
来到新闻管理系统

<span>
<a href="index.php?m=admin&f=login&a=logout">安全退出</a>
    </span>
    <span>
    <a href="index.php" target="_blank">主页</a>
    </span>
    </header>
    <div class="box">
    <div class="left">
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['rid']->value == 1) {?>
    <li>
    <a href="javascript:;">用户管理</a>

        <ul>
        <li>
        <a href="index.php?m=admin&f=user&a=add" target="iframe">添加用户</a>
        </li>

        <li>
        <a href="showCategory.php" target="iframe">查看用户</a>
        </li>
        </ul>
    </li>
        <?php }?>

        <li>
            <a href="javascript:;">角色管理</a>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=role&a=add" target="iframe">添加角色</a>
                </li>

                <li>
                    <a href="showCategory.php" target="iframe">查看角色</a>
                </li>
            </ul>
        </li>


    <li>
    <a href="javascript:;">会员管理</a>
    <ul>
    <li>
    <a href="addCon.php" target="iframe">添加内容</a>
    </li>

    <li>
    <a href="showCategory.php" target="iframe">查看内容</a>
    </li>
    </ul>
    </li>



    <li>
    <a href="javascript:;">分类管理</a>
    <ul>
    <li>
    <a href="index.php?m=admin&f=category&a=add" target="iframe">添加分类</a>
    </li>

    <li>
    <a href="showPos.php" target="iframe">查看位置</a>
    </li>
    </ul>
    </li>


        <li>
            <a href="javascript:;">内容管理</a>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=category&a=add" target="iframe">添加内容</a>
                </li>

                <li>
                    <a href="showPos.php" target="iframe">查看内容</a>
                </li>
            </ul>
        </li>

    </ul>
    </div>
    <div class="right">
    <iframe src="welcome.html" frameborder="0" name="iframe">

    </iframe>
    </div>
    </div>

    </body>
    </html><?php }
}
