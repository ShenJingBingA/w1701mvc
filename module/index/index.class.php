<?php

//模板引擎
class index{
    function init(){
          $obj=new db("category");
          $result=$obj->setField("lists.title,message.con")->where("lists.id=message.lid")->join("lists,message");

        //1. 查询数据
        //2. 指定视图
        //3. 在相应的视图里面放入相应的数据
        $smarty=new Smarty();
        $smarty->setTemplateDir("template");
        $smarty->setCompileDir("compile");

        $smarty->assign("result",$result);
        $smarty->display("index.html");
    }
    function del(){
      echo "删除";
    }
}
