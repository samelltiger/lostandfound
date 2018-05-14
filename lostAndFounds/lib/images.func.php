<?php
require_once 'string.func.php';

function verifyImage($line = 0, $pixel = 0, $type = 1, $length = 4, $sess_name = "verify")
{   
 
    $width = 80;
    $height = 28;
    $image = imagecreate($width, $height);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);

    imagefilledrectangle($image, 1, 1, $width - 2, $height - 2, $white);
    
    $chars = bulidRandomString($type, $length);
    $_SESSION[$sess_name] = $chars;
    $fontfiles = array(
        "MSYH.TTC",
        "MSYHBD.TTC",
        "MSYHL.TTC",
        "SIMHEI.TTF",
        "SIMKAI.TTF",
        "SIMSUN.TTC"
    );
    for ($i = 0; $i < $length; $i ++) {
        $size = mt_rand(14, 18);
        $angle = mt_rand(- 15, 15);
        $x = 5 + $i * $size;
        $y = mt_rand(20., 26);
        $fontfile = "../fonts/" . $fontfiles[mt_rand(0, count($fontfiles) - 1)];
        $text = substr($chars, $i, 1);
        $color = imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(0, 255));
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }
    
    
    if ($pixel) {
        for ($i = 0; $i < $pixel; $i ++) {
            imagesetpixel($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), $black);
        }
    }
    
    if ($line) {
        for ($i = 0; $i < $line; $i ++) {
            $color = imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(0, 255));
            imageline($image, mt_rand(0, $width - 1), mt_rand(0, $height - 1), mt_rand(0, $width - 1), mt_rand(0, $height - 1), $color);
        }
    }
    header("content-type:image/gif");
    imagegif($image);
    imagedestroy($image);
}
