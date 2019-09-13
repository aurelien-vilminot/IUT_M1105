<?php
session_start();

$_SESSION['captcha'] = mt_rand(1000,9999);
$img = imagecreate(95,53);
$font = '../fonts/Destroy.ttf';

$bg = imagecolorallocate($img,255,255,255);
$textcolor = imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 33, 0, 11, 40, $textcolor, $font, $_SESSION['captcha']);

header('Content-type:image/jpeg');
imagejpeg($img);
imagedestroy($img);

?>