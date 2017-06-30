<?php
class info extends indexMain{
    function add(){
        if(!$this->session->get("indexLogin")){
           echo "nologin";
        }else{
            echo "ok";
        }
    }

    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));

        $db=new db("position");
        $result=$db->select();

        $tree=new tree();
        $tree->getTree(0,0,"-",$db->db,"category");
        $this->smarty->assign("str",$tree->str);
        $this->smarty->assign("position",$result);
        $this->smarty->display("info.html");
    }

    function upload(){
        $obj=new upload();
        //$obj->root="../root";
        $obj->move();
    }

    function addCon(){
        $stitle=$_POST["stitle"];
        $scon=$_POST["scon"];
        $simage=$_POST["simage"];
        $mid=$this->session->get("mid");
        $cid=$_POST["cid"];
        $status=0;
        $posid=$_POST["posid"];
        $posid=implode(";",$posid);
        $keywords=P("keywords");

        $db=new db("lists");
        $sql="stitle='{$stitle}',scon='{$scon}',simage='{$simage}',mid='{$mid}',cid='{$cid}',status='{$status}',posid='{$posid}',keywords='{$keywords}'";

        if($db->insert($sql)>0){
            $this->jump("插入成功","index.php?m=index&f=info");
        }


    }


}
