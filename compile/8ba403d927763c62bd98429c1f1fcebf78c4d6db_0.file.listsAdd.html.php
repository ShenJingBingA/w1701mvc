<?php
/* Smarty version 3.1.30, created on 2017-07-01 03:48:40
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/admin/listsAdd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5956ff789cfb56_72979857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ba403d927763c62bd98429c1f1fcebf78c4d6db' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/admin/listsAdd.html',
      1 => 1498873716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5956ff789cfb56_72979857 (Smarty_Internal_Template $_smarty_tpl) {
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
   <table class="table table-striped">
        <tr>
            <th>
                id
            </th>
            <th>
                所属分类
            </th>
            <th>
                stitle
            </th>
            <th>
                推荐位
            </th>
            <th>
                状态
            </th>
            <th>
                发表时间
            </th>

            <th>
                作者
            </th>
            <th>
                操作
            </th>
        </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>





            </td>
            <td>

                <?php if ($_smarty_tpl->tpl_vars['v']->value["status"] == 0) {?>
                  未审核
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 1) {?>
                   审核中
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 2) {?>
                   通过
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 3) {?>
                   精华
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 4) {?>
                   违规
                <?php }?>
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value["mname"];?>

            </td>
            <td>
                <a href="index.php?m=admin&f=lists&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>

                <a href="index.php?m=admin&f=lists&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">编辑</a>

                
            </td>
        </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </table>


   <a href="index.php?m=admin&f=lists&a=add">
       全部
   </a>
   <a href="index.php?m=admin&f=lists&a=add&status=2">
       通过
   </a>
   <a href="index.php?m=admin&f=lists&a=add&status=1">
       审核中
   </a>
   <a href="index.php?m=admin&f=lists&a=add&status=0">
       未审核
   </a>
<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>


</body>
</html><?php }
}
