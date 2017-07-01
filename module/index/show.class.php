<?php
class show extends indexMain{
    function  init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));




        $sid=$_GET["sid"];
        $db=new db("lists");
        $sql="select lists.*,member.mname from lists,member where lists.sid={$sid} and lists.mid=member.mid";
         $con=$db->select($sql);
        $status=$this->guanzhu($con[0]["mid"]);
        $this->smarty->assign("con",$con);
        $this->smarty->assign("status",$status);
        $this->smarty->display("show.html");
    }

     function guanzhu($mid){
         //1.  没登录 关注         nologin

         //3.  登陆了  不是自己  没关注  true
         //4.  登陆了  不是自己  关注    false
         if(!$this->session->get("indexLogin")){
             $status="nologin";
         }else{
             //2.  登陆了  自己  不出现  self
              if($mid==$this->session->get("mid")){
                  $status="self";
              }else{
                  $mid1=$this->session->get("mid");
                  $mid2=$mid;
                  $db=new db("guanzhu");
                  $sql="select * from guanzhu where mid1={$mid1} and mid2={$mid2}";
                  $result=$db->select($sql);
                  if(count($result)){
                      $status= "true";
                  }else{
                      $status= "false";
                  }
              }



         }
         return $status;

    }
    function hits(){
        $db=new db("lists");
        $sid=$_POST["sid"];
        $sql="update lists set hits=hits+1 where sid={$sid}";
        $db->db->query($sql);
        if($db->db->affected_rows>0){
            echo "ok";
        }


    }
}