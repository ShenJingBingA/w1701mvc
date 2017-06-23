<?php

class main{
    function __construct(){
          $smarty=new Smarty();
          $smarty->setCompileDir("compile");
          $smarty->setTemplateDir("template");
          $this->smarty=$smarty;
    }
}