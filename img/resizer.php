<?php
resizer();
function resizer()
{
    $img = $_GET['img'];
    $w = $_GET['w'];
    $h = $_GET['h'];

    Define('DIR_CACHE', '../image_cache/');
    //Define('DIR_CACHE', '/home/icpdas-u/public_html/images/image_cache/');

    if (!Is_Dir(DIR_CACHE)) {
        mkdir(DIR_CACHE, 0777);
    }

    // IMAGE RESIZE AND SAVE TO FIT IN $new_width x $new_height
    if (file_exists($img)) {

        $thumb = substr($img, 0, strrpos($img, "."));
        if (isset($w) && isset($h))
            $thumb = $thumb . "_" . $w . "x" . $h;
        else if (isset($w)) {
            $h = $w;
            $thumb = $thumb . "_" . $w . "x" . $w;
        } else if (isset($h)) {
            $w = $h;
            $thumb = $thumb . "_" . $h . "x" . $h;
        }
        $thumb = $thumb . ".webp";

        $changed = 0;

        if (file_exists($img) && file_exists(DIR_CACHE . $thumb)) {
            $mtime1 = filemtime(DIR_CACHE . $thumb);
            $mtime2 = filemtime($img);
            if ($mtime2 > $mtime1) $changed = 1;
        } elseif (!file_exists(DIR_CACHE . $thumb)) {
            $changed = 1;
        }

        if ($changed) {

            $filename = $img;
            $new_width = (int)@$w;
            $new_height = (int)@$h;
            $lst = GetImageSize($filename);
            $image_width = $lst[0];
            $image_height = $lst[1];
            $image_format = $lst[2];

            if ($image_format == 1) {
                Header("Content-Type:image/gif");
                readfile($filename);
                exit;
            } elseif ($image_format == 2) {
                $old_image = imagecreatefromjpeg($filename);
            } elseif ($image_format == 3) {
                $old_image = imagecreatefrompng($filename);
            } else {
                exit;
            }


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

            $webp = imagecreatetruecolor($image_width, $image_height);

            // imagepalettetotruecolor($old_image);
            imagealphablending($webp, false);
            imagesavealpha($webp, true);

            $white = imagecolorallocatealpha($webp, 255, 255, 255, 127);
            imagefilledrectangle($webp, 0, 0, $image_width, $image_height, $white);

            imagecopyresampled($webp, $old_image, 0, 0, 0, 0, $image_width, $image_height, imageSX($old_image), imageSY($old_image));

            imagewebp($webp, DIR_CACHE . $thumb, 80);

            imagedestroy($old_image);
            imagedestroy($webp);



            // $webp=imagecreatetruecolor($image_width,$image_height);
            // $white = imagecolorallocate($webp, 255, 255, 255);
            // ImageFill($webp, 0, 0, $white);
            // // imagecopy($webp,$old_image,0,0,0,0,$image_width,$image_height);
            // imagecopyresampled($webp, $old_image, 0, 0, 0, 0, $image_width, $image_height, imageSX($old_image), imageSY($old_image));
            // imagewebp($webp, DIR_CACHE . $thumb, 80);
            // imagedestroy($old_image);
            // imagedestroy($webp);


            // echo("$image_width x $image_height");
            // $new_image=imageCreate($image_width, $image_height);

            // $new_image = imageCreateTrueColor($image_width, $image_height);
            // $white = ImageColorAllocate($new_image, 255, 255, 255);
            // ImageFill($new_image, 0, 0, $white);
            // /*imageCopyResized*/
            // imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $image_width, $image_height, imageSX($old_image), imageSY($old_image));
            // imageJpeg($new_image, DIR_CACHE . $thumb, 80);
        }

        $fp = fopen(DIR_CACHE . $thumb, 'rb');

        Header("Content-Type: image/webp", true);
        header("Content-Length: " . filesize(DIR_CACHE . $thumb), true);
        fpassthru($fp);
        // header("Location: ". DIR_CACHE . $thumb);
        exit();

        // readfile(DIR_CACHE . $thumb);
    } else { // Image file not found

        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        exit();
    }

    
}
