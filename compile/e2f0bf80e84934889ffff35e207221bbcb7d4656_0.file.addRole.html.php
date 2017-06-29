<?php
/* Smarty version 3.1.30, created on 2017-06-28 10:20:05
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/admin/addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595366b52f8787_39257888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2f0bf80e84934889ffff35e207221bbcb7d4656' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/admin/addRole.html',
      1 => 1498638000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595366b52f8787_39257888 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?m=admin&f=role&a=addCon">

    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">角色名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="rname">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加用户</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
