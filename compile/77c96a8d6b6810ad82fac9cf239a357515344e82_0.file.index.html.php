<?php
/* Smarty version 3.1.30, created on 2017-07-01 11:02:22
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5957651e9162b8_54505001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c96a8d6b6810ad82fac9cf239a357515344e82' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/index.html',
      1 => 1498898986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5957651e9162b8_54505001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    ul,li{
        padding:0;
    }
    nav{
        width:1000px;height:30px;
        margin:auto;border:1px solid #ccc;
        margin-top: 20px;
    }
    .wheel{
        width:1000px;height:200px;
        margin:auto;margin-top: 20px;
        border:1px solid #ccc;
    }
    .main{
        margin:auto;
        width:1000px;
    }
    .main .left{
        width:70%;float: left;
    }
    .main .right{
        width:28%;float: right;
    }
    .list{
        margin:5px 0;
        border:1px solid #ccc;
        padding:5px;
        display: flex;

    }


    .list .img{
        width:100px;height:100px;
        border:1px solid #ccc;
    }
    .list .con{
        margin-left:20px;
    }
    .hot{
        color:red;
    }


</style>

<nav>
    导航
</nav>
<div class="wheel">
轮播
</div>
<div class="main">
    <div class="left">
        <ul class="listbox hot">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&f=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="list">
                <div class="img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simage'];?>
" alt="" style="width:100%">
                </div>
                <div class="con">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

                    </h3>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>

        <ul class="listbox">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['normal']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="index.php?m=index&f=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"  class="list">
                <div class="img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simage'];?>
" alt="" style="width:100%">
                </div>
                <div class="con">
                    <h3>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

                    </h3>
                </div>
            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>



    </div>
    <div class="right">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                热门文章
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>

        <div class="list-group">
            <a href="#" class="list-group-item active">
                推荐文章
            </a>
            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item">Morbi leo risus</a>
            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item">Vestibulum at eros</a>
        </div>
    </div>
</div>
</body>
</html><?php }
}
