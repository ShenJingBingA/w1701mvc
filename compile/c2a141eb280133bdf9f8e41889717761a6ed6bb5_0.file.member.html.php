<?php
/* Smarty version 3.1.30, created on 2017-07-03 11:09:33
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index/member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595a09cdebdcd1_30882014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a141eb280133bdf9f8e41889717761a6ed6bb5' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index/member.html',
      1 => 1499072971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_595a09cdebdcd1_30882014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    .left{
        width:20%;float:left;
    }
    .right{
        width:80%;float:right;
    }
    .photo{
        width:100px;height:100px;
        border:1px solid #000;
        border-radius: 50%;
    }
    .nicheng{
        width:100%;
        height:30px;
    }
    .message{
        width:100px;height:40px;
        background: rgba(0,0,0,.7);
        border-radius: 5px;
        position: fixed;
        left:0;top:0;right:0;
        bottom: 0;margin:auto;
        display: none;
        color:#fff;
        text-align: center;
        line-height: 40px;
    }
</style>
<?php echo '<script'; ?>
>
    $(function () {
        $(".nicheng").click(function(){

            $(this).attr("contenteditable","true").focus();
        })
        $(".nicheng").blur(function(){
                var mid=$(".right").attr("mid");
                var filed=$(this).attr("attr");
                var val=$(this).html();


                $.ajax({
                    url:"index.php?m=index&f=member&a=edit",
                    type:"post",
                    data:{
                        mid:mid,filed:filed,val:val
                    },
                    success:function(e){
                       $(".message").html(e).css("display","block");
                       setTimeout(function(){
                           $(".message").css("display","none");

                       },2000)
                    }


                })
        })

    })
<?php echo '</script'; ?>
>

  <div class="left" >
      <a href="">
          个人信息
      </a> <br>
      <a href="">
          发布的文章
      </a><br>
      <a href="">
          我的留言
      </a><br>
      <a href="">
          我的回复
      </a><br>
      <a href="">
          我的关注
      </a><br>
      <a href="">
          被关注
      </a>
  </div>
  <div class="right" mid="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
      <table class="table">
          <tr>
              <td>
                  <div class="photo">

                  </div>
              </td>
              <td>

              </td>
          </tr>
          <tr>
              <td>昵称</td>
              <td>
                  <div class="nicheng" attr="nicheng">
                      <?php echo $_smarty_tpl->tpl_vars['nicheng']->value;?>

                  </div>
              </td>
          </tr>
          <tr>
              <td>用户名</td>
              <td>
<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>


              </td>
          </tr>
          <tr>
              <td>修改密码</td>
              <td>
                  <span class="glyphicon glyphicon-pencil"></span>
              </td>
          </tr>

          <tr>
              <td>邮箱</td>
              <td>
                  <div class="nicheng" attr="email"></div>
              </td>
          </tr>

          <tr>
              <td>性别</td>
              <td>
                  女：<input type="radio" name="sex" value="1">
                  男：<input type="radio" name="sex" value="2">
                  保密：<input type="radio" name="sex" value="3">
              </td>
          </tr>
      </table>

  </div>
  <!--
   搜索引擎不太友好

    js去控制相应的内容
  -->
 <div class="message">

 </div>
</body>
</html><?php }
}
