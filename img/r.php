<?php
include "resize.php";
$img = $_GET['img'];
$w = (int)$_GET['w'];
$h = (int)$_GET['h'];

Define('DIR_CACHE', '../image_cache/');

if (!Is_Dir(DIR_CACHE)) {
    mkdir(DIR_CACHE, 0777);
}
$filename = $img;
$new_width = (int)@$w;
$new_height = (int)@$h;
$lst = GetImageSize($filename);
$image_width = $lst[0];
$image_height = $lst[1];
$image_format = $lst[2];
if (($new_width != 0) && ($new_width < $image_width)) {
    $image_height = (int)($image_height * ($new_width / $image_width));
    $image_width = $new_width;
    //  $image_height=$new_height;
  }
  if (($new_height != 0) && ($new_height < $image_height)) {
    $image_width = (int)($image_width * ($new_height / $image_height));
    $image_height = $new_height;
    //  $image_width=$new_width;
  }


$resize = new ResizeImage($img);
$resize->resizeTo($image_width,$image_height, 'exact');
$thumb = substr($img, 0, strrpos($img, "."));
  if(isset($w) && isset($h))
    $thumb = $thumb."_".$w."x".$h;
  else if(isset($w)){
    $h = $w;
    $thumb = $thumb."_".$w."x".$w;
  }
  else if(isset($h)){
    $w = $h;
    $thumb = $thumb."_".$h."x".$h;
  }
  $thumb = $thumb.".webp";
$resize->saveImage($thumb);
// // $resize->readImg();
// Header("Content-type:image/webp");
// readfile($resize->getPath());
