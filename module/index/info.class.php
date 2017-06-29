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
        $this->smarty->display("info.html");
    }


}
