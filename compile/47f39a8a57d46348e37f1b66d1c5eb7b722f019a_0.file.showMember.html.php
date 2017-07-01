<?php
/* Smarty version 3.1.30, created on 2017-07-01 04:02:15
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/admin/showMember.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595702a73a1d64_89836987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47f39a8a57d46348e37f1b66d1c5eb7b722f019a' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/admin/showMember.html',
      1 => 1498873048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595702a73a1d64_89836987 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

3发表内容     违规  1  禁言
10个内容精华        2  免审核





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
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>用户名</th>
            <th>昵称</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["mid"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["mname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["nicheng"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["mrole"];?>

            </td>
            <td>
                <a href="">
                    编辑
                </a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
