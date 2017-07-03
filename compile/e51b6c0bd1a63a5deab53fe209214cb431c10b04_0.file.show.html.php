<?php
/* Smarty version 3.1.30, created on 2017-07-03 13:33:59
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595a2ba798d5e2_59232076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e51b6c0bd1a63a5deab53fe209214cb431c10b04' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/show.html',
      1 => 1499081621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_595a2ba798d5e2_59232076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>

<style>
    .stitle{
       margin: auto;
        text-align: center;
    }
    .scon{
        margin: auto;
        border:1px solid #ccc;

    }
</style>
<div class="container">
<div class="stitle" sid="<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['sid'];?>
" mid="<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['mid'];?>
" me="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
 <h3><?php echo $_smarty_tpl->tpl_vars['con']->value[0]['stitle'];?>
</h3>
 <span>作者：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['mname'];?>
</span>
 <span>时间：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['stime'];?>
</span>
 <span>点击量：<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['hits']+1;?>
</span>

</div>



<div class="scon">
<?php echo $_smarty_tpl->tpl_vars['con']->value[0]['scon'];?>

</div>

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

 <textarea class="form-control messageSubmitCon" rows="3"></textarea>
 <button class="btn btn-default messageSubmitBtn" type="submit">留言</button>
 <button class="btn btn-default messageCancelBtn" type="submit ">取消</button>

 <style>
  .message-box{
    width:100%;height:auto;
  }
  .liuyan {
   width:100%;height:auto;
  }

  .photo-box{
     height:80px;width:auto;
     display: flex;margin-top:10px;
  }
   .photo{
      width:70px;height:70px;
    border:1px solid #ccc;
    border-radius: 50%;
   }
  .name{
     margin-left:20px;line-height: 80px;
  }
  .message-con{
   margin:5px 0;
  }
  h3.title{
   margin-top:10px;
   border-bottom: 1px solid #ccc;
   padding-bottom: 6px;
  }
  .replay{
   border-left:2px solid #000;
   padding:5px;
   margin-top:10px;
  }

 </style>


   <h3 class="title">
    用户留言，共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条
   </h3>


   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
   <div class="message-box">
       <div class="liuyan" mid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
           <div class="photo-box">
               <div class="photo">

               </div>
               <div class="name">
                    xxx
               </div>
           </div>
           <div class="message-con">
             <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

           </div>
        <button class="btn btn-default replayBtn" type="submit">回复</button>
       </div>

       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
       <div class="replay">
        <div class="photo-box">
         <div class="photo">

         </div>
         <div class="name">
          xxx
         </div>
        </div>
        <div class="message-con">
         <?php echo $_smarty_tpl->tpl_vars['v1']->value["con"];?>

        </div>
        <button class="btn btn-default replayBtn" type="submit">回复</button>
       </div>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


       <div class="replay-box" style="display:none">
         <textarea class="form-control messageReplayCon" rows="3"></textarea>
         <button class="btn btn-default messageReplayBtn" type="submit">回复</button>
         <button class="btn btn-default" type="submit">取消</button>
       </div>
   </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>








<?php echo '<script'; ?>
 class="last-script">
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
