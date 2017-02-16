<?php
//获取当前url地址 
 function  getCurrentUrl(){
    
    $pageUrl = 'http';
    // if(isset($_SERVER['HTTPS'])  && $_SERVER['HTTPS'] == 'on')
    if (!empty( $_SERVER['HTTPS'])) {
    $pageUrl .= 's';
    }
    $pageUrl .= '://';

    if ($_SERVER['SERVER_PORT'] != 80) {
    $pageUrl .= $_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

    }else{
    	$pageUrl .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }

    return $pageUrl;
 }

 echo getCurrentUrl();

 //http://localhost/PHP-Common-function/currenturl.php