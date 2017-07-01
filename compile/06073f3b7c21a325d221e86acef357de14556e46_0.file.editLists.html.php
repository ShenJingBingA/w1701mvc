<?php
/* Smarty version 3.1.30, created on 2017-07-01 04:01:45
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/admin/editLists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59570289cfa850_97452330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06073f3b7c21a325d221e86acef357de14556e46' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/admin/editLists.html',
      1 => 1498873814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59570289cfa850_97452330 (Smarty_Internal_Template $_smarty_tpl) {
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



<form action="index.php?m=admin&f=lists&a=editStatus" method="post">
    <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
">
    <input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
    未审核：<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?> ><br>
    审核中：<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>><br>
    通过：<input type="radio" name="status" value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {?> checked <?php }?>><br>
    精华：<input type="radio" name="status" value="3" <?php if ($_smarty_tpl->tpl_vars['status']->value == 3) {?> checked <?php }?>><br>
    违规：<input type="radio" name="status" value="4" <?php if ($_smarty_tpl->tpl_vars['status']->value == 4) {?> checked <?php }?>><br>
    <input type="submit" value="提交">
</form>
</body>
</html><?php }
}
