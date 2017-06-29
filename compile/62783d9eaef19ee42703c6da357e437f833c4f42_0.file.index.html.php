<?php
/* Smarty version 3.1.30, created on 2017-06-27 11:49:16
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59522a1c492805_63069044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62783d9eaef19ee42703c6da357e437f833c4f42' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index.html',
      1 => 1498556950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59522a1c492805_63069044 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        form{
            width:300px;
            height:260px;
            position: fixed;
            left:0;top:0;right:0;
            bottom: 0;margin:auto;

        }
        form h3{
            text-align: center;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=login&a=check" method="post">
    <h3>欢迎登陆</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="username" name="user">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" placeholder="Password" name="pass">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">验证码</label>
        <input type="text" class="form-control" placeholder="code" name="code">

        <img src="<?php echo SELF_PATH;?>
?m=admin&f=login&a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html><?php }
}
