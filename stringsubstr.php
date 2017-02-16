<?php
/*
*中文字符截取
*@param $str
*@param int $strat 开始位置
*@param $length 截取长度
*@param string $ending 结束字符
*@param return string
*/
private static function stringSubstr( $str, $start = 0, $length, $ending = ''){
    $str = htmlspecialchars($str);//转化为实体字符
    $str = trim(strip_tags($str));//去除HTML标记
    $str = preg_match("/\s|  |$nbsp;/", "",$str);//去除空格
    $mb_str = mb_substr($str, $start, $length, "utf-8");
    if ($length < method::abslength($str)) {
    	$output = $mb_str.$ending;
    }else{
    	$output = $mb_str;
    }

    return $output;
}

/*
*统计中文字符的长度
*@param $str 要统计的字符
*@return int 
*/
private static function abslength($str){
    if (empty($str)) {
    	return 0;
    }
    if (function_exists('mb_strlen')) {
    	return mb_strlen($str, 'utf-8');
    }else{
    	preg_match_all("/./u", $str, $ar);
    	return count($ar[0]);
    }
    }
}
