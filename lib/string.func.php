<?php

function bulidRandomString($type = 1,$length = 4)
{
    
    if ($type == 1) {
        $chars = join("", range(0, 9));
    } elseif ($type == 2) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z")));
    } elseif ($type == 3) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z"), range(0, 9)));
    }
    if ($length > strlen($chars)) {
        exit("超出长度");
    }
    $chars = str_shuffle($chars);
    return substr($chars, 0, $length);
}
// function generate_password( $length = 8 ) { 
// // 密码字符集，可任意添加你需要的字符 
// $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
// $password = ''; 
// for ( $i = 0; $i < $length; $i++ ) 
// { 
// // 这里提供两种字符获取方式 
// // 第一种是使用 substr 截取$chars中的任意一位字符； 
// // 第二种是取字符数组 $chars 的任意元素 
// // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1); 
// $password .= $chars[ mt_rand(0, strlen($chars) - 1) ]; 
// } 
// return $password; 
// } 