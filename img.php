<?php
//header("content-type:image/jpeg");
$filename=time().".jpg";
move_uploaded_file($_FILES["files"]["tmp_name"],$filename);

$re1=imagecreatefromjpeg($filename);
$re2=imagecreatefrompng("uek.png");

imagecopy($re1,$re2,100,100,0,0,443,340);

imagejpeg($re1,$filename);






