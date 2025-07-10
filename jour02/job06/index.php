<?php
   $width = 20;

$height = 10;

 

$image = imagecreate($width, $height);

 

$color = imagecolorallocate($image, 255, 0, 0);

 

imagerectangle($image,0,0,$width,$height,$color);
 

header("Content-Type: image/png");

imagepng($image);

imagedestroy($image);
?>