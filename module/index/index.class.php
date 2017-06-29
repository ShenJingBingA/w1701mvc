<?php
class index extends indexMain {
    function init(){
        $this->smarty->display("index.html");
    }

    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->width=120;
        $obj->height=30;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
}