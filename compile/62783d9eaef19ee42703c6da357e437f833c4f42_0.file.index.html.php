<?php
/* Smarty version 3.1.30, created on 2017-06-23 12:30:17
  from "/Users/gaoxin/Documents/www/w1701/mvc/template/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594cedb9a45612_15810252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62783d9eaef19ee42703c6da357e437f833c4f42' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1701/mvc/template/index.html',
      1 => 1498213812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594cedb9a45612_15810252 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <!--  php  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet"/>
    <style>
        html,body{
            width:100%;height:100%;overflow: hidden;
        }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        mui.init();
    <?php echo '</script'; ?>
>
    <style>

        .nav{
            width:100%;height:44px;
            line-height: 44px;
            overflow: hidden;
        }

        .nav a{
            padding:0 15px;
            float: left;
        }
        .load{
            display: none;
            text-align: center;

        }

    </style>
    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>
    <style>

        .container{
            width:100%;bottom: 50px;
            left:0;right:0;
            position: absolute;
            z-index:10;
            overflow: hidden;
            border:1px solid #000;
        }
        .mui-table-view{
            position: absolute;

        }
    </style>
</head>
<body>
<header class="mui-bar mui-bar-nav">
    <h1 class="mui-title">xx新闻</h1>
    <a href="index.php?a=login">登陆</a>
</header>

<div class="mui-content">

    <nav class="nav">
        <div class="navbox">
            <a href="index.php">
                首页推荐
            </a>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <a href="list.php?cid=<?php echo '<?php ';?>echo  $row['id']<?php echo '?>';?>">
                <?php echo $_smarty_tpl->tpl_vars['v']->value["catname"];?>

            </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </div>
    </nav>


    <div class="mui-slider">
        <div class="mui-slider-group">

            <div class="mui-slider-item"><a href="show.php?id="><img src="../admin/"/></a></div>

        </div>
    </div>


    <div class="container">


        <ul class="mui-table-view">
            <div class="load">
                loading......
            </div>

            <li class="mui-table-view-cell mui-media" relative="<?php echo '<?php ';?>echo $row['keywords']<?php echo '?>';?>">
                <a href="show.php?id=<?php echo '<?php ';?>echo $row['id']<?php echo '?>';?>">
                    <img class="mui-media-object mui-pull-right" src="../admin/">
                    <div class="mui-media-body">

                        <p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
                    </div>
                </a>
            </li>




        </ul>

    </div>
</div>

<nav class="mui-bar mui-bar-tab">
    <a class="mui-tab-item mui-active">
        <span class="mui-icon mui-icon-home"></span>
        <span class="mui-tab-label">首页</span>
    </a>
    <a class="mui-tab-item">
        <span class="mui-icon mui-icon-phone"></span>
        <span class="mui-tab-label">电话</span>
    </a>
    <a class="mui-tab-item">
        <span class="mui-icon mui-icon-email"></span>
        <span class="mui-tab-label">邮件</span>
    </a>
    <a class="mui-tab-item setting" href="setting.php" >
        <span class="mui-icon mui-icon-gear"></span>
        <span class="mui-tab-label">设置</span>

    </a>
</nav>
<?php echo '<script'; ?>
>

    /*
     *            touchstart
     *
     *            touchmove
     *
     *            touchend
     *
     *            mousedown
     *            mousemove
     *            mouseup
     *            click
     *
     *
     *
     *
     *
     *
     * */


    $(".setting").click(function(){
        location.href="setting.php";
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
