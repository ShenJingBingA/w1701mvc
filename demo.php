<?php
$db=new mysqli("localhost","root","root","w1701blog");

$db->autocommit(false);
$result=$db->query("insert into demo (name) values ('lisi')");
$result2=$db->query("insert into demo2 (age) values ('20')");
if($result&&$result2) {
    $db->commit();
}else{
    $db->rollback();
}
