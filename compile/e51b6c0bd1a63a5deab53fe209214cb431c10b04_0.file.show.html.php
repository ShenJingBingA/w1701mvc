<?php
/* Smarty version 3.1.30, created on 2017-07-01 13:22:45
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59578605c6b591_57896973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e51b6c0bd1a63a5deab53fe209214cb431c10b04' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/show.html',
      1 => 1498908162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_59578605c6b591_57896973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>

<style>
    .stitle{
        width:1000px;margin: auto;
        text-align: center;
    }
    .scon{
        width:1000px;margin: auto;
        border:1px solid #ccc;

    }
</style>

<div class="stitle" sid="<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['sid'];?>
" mid="<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['mid'];?>
">
 <h3><?php echo $_smarty_tpl->tpl_vars['con']->value[0]['stitle'];?>
</h3>
 <span>作者：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['mname'];?>
</span>
 <span>时间：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['stime'];?>
</span>
 <span>点击量：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['hits']+1;?>
</span>
 <div style="text-align: left">
  <?php if ($_smarty_tpl->tpl_vars['status']->value == "nologin") {?>
 <button type="button" class="btn btn-primary guanzhu">关注</button>
  <button type="button" class="btn btn-primary cancelguanzhu" style="display: none" >取消关注</button>
  <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "self") {?>
  <button type="button" class="btn btn-primary guanzhu" style="display:none">关注</button>
  <button type="button" class="btn btn-primary cancelguanzhu" style="display: none" >取消关注</button>
  <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "true") {?>
  <button type="button" class="btn btn-primary guanzhu" style="display:none">关注</button>
  <button type="button" class="btn btn-primary cancelguanzhu" >取消关注</button>
  <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "false") {?>
  <button type="button" class="btn btn-primary guanzhu" >关注</button>
  <button type="button" class="btn btn-primary cancelguanzhu" style="display:none">取消关注</button>
  <?php }?>


 </div>
</div>



<div class="scon">
<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['scon'];?>

</div>

<?php echo '<script'; ?>
>
    $.ajax({
        url:"index.php?m=index&f=show&a=hits",
        type:"post",
        data:{
            sid:$(".stitle").attr("sid")
        }
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
