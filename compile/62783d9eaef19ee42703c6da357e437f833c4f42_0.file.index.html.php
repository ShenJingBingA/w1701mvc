<?php
/* Smarty version 3.1.30, created on 2017-06-23 10:59:29
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594cd8714b62e9_55875962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62783d9eaef19ee42703c6da357e437f833c4f42' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index.html',
      1 => 1498208366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594cd8714b62e9_55875962 (Smarty_Internal_Template $_smarty_tpl) {
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
        dt{
            color: red;
        }


    </style>
    <?php echo '<script'; ?>
>
    <?php echo '</script'; ?>
>
</head>
<body>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
  <dt>
      <dl><?php echo $_smarty_tpl->tpl_vars['v']->value["title"];?>
</dl>
      <dd><?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>
</dd>
  </dt>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
