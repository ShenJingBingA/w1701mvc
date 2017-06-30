<?php
/* Smarty version 3.1.30, created on 2017-06-30 04:21:14
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955b59aaa90e5_06561947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a204e9cf7feb21675d4911a4e7ca6073a44352f' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/info.html',
      1 => 1498788709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5955b59aaa90e5_06561947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo EDIT_PATH;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>

<form style="width:auto;height:auto;position: static" method="post" action="index.php?m=index&f=info&a=addCon">

    <div class="form-group">
        <label for="exampleInputEmail1">所属话题</label>
        <select class="form-control" name="cid">
            <option>选择话题</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">标题</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="stitle">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">关键词</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="keywords">

    </div>
    <div class="form-group">
        <?php echo '<script'; ?>
 id="editor" type="text/plain" name="scon"><?php echo '</script'; ?>
>
    </div>
    <div class="form-group uploadbox">

        <label for="exampleInputFile">上传图片</label>

        <input type="hidden" name="simage">

    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['position']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="checkbox" style="margin-left:20px;">
            <input type="checkbox" name="posid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['posid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>


    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php echo '<script'; ?>
>
    var ue = UE.getEditor('editor');

    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("index.php?m=index&f=info&a=upload",function(data){
        document.querySelector("input[name=simage]").value=data;
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
