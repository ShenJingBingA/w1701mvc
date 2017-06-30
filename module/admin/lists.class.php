<?php
class lists extends main{
    function add(){
        $db=new db("lists");

        $num=$db->select("select count(sid) as sid from lists");
        $page=new page();
        $page->pageNum=3;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
        echo $str;


        $sql="select lists.* ,category.cname from lists,category where lists.cid=category.cid ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("listsAdd.html");
    }
}