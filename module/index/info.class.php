<?php
class info extends indexMain{
    function add(){
        if(!$this->session->get("indexLogin")){
           echo "nologin";
        }
    }
}
