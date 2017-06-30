<?php
/* Smarty version 3.1.30, created on 2017-06-30 03:17:01
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955a68d121073_76519007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e0565fd617f65fe6278cdc46a99ef705b06731' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/header.html',
      1 => 1498785418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955a68d121073_76519007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/header.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/header.js"><?php echo '</script'; ?>
>

</head>
<body>
<header>
    <h3 class="title">
        <a href="index.php">xxx博客家园</a>
    </h3>
    <h3 class="login">

        <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
        欢迎<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
,
        <a href="index.php?m=index&f=member">
            个人中心
        </a>
        <a href="javascript:;" class="logout">
            退出登陆
        </a>
        <?php } else { ?>
        <a href="javascript:;" class="loginBtn">
            登陆
        </a>
        <a href="javascript:;" class="regBtn">
            注册
        </a>
        <?php }?>

        <a href="javascript:;" class="info">
            发表内容
        </a>
    </h3>
</header>





<form class="loginBox">
    <div class="title">
        请登陆
    </div>
    <div class="loginCloseBtn closeBtn">
        X
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名 </label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="用户名" name="mname">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mpass">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">验证码</label>
        <input type="text" class="form-control" placeholder="验证码" name="code" style="display: inline-block;width:100px;">
        <img src="index.php?a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()">
    </div>

    <button type="submit" class="btn btn-default willLogin">登陆</button>
    <span>没有账户?请 <a href="javascript:;" class="regBtn">注册</a></span>
</form>



<form class="regBox">
    <div class="title">
        请注册
    </div>
    <div class="regCloseBtn closeBtn">
        X
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名 </label>
        <input type="text" class="form-control" placeholder="用户名" name="mname">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" placeholder="Password" name="mpass">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">确认密码</label>
        <input type="password" class="form-control" placeholder="Password" name="mpass1">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">验证码</label>
        <input type="text" class="form-control" placeholder="验证码" name="code" style="display: inline-block;width:100px;">
        <img src="index.php?a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()">
    </div>

    <button type="submit" class="btn btn-default willReg">注册</button>
    <span>已有账户?请 <a href="javascript:;" class="loginBtn">登陆</a></span>
</form>

<div class="errorMessage">

</div><?php }
}
