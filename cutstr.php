<?php
/*截取字符串长度
 支持utf-8 gb2312
 开始默认长度为0
*/

 function cutStr( $string, $sublen, $start = 0, $code = 'UTF-8'){
    if ($code = 'utf-8'){
    	$pa = "/[x01-x7f]|[xc2-xdf][x80-xbf]|xe0[xa0-xbf][x80-xbf]|[xe1-xef][x80-xbf][x80-xbf]|xf0[x90-xbf][x80-xbf][x80-xbf]|[xf1-xf7][x80-xbf][x80-xbf][x80-xbf]/";
    	preg_match_all( $pa, $string, $t_string);
    	if (count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
    	return join('',array_slice($t_string[0], $start, $sublen));

    }else{
    	$start = $start * 2;
    	$sublen = $sublen * 2;
    	$strlen = strlen($string);
    	$tmpstr = '';
    	for ($i = 0;$i < $strlen; $i++){
    		if ($i >= $start && $i < ($start+$strlen)){
    			if (ord(substr($string, $i, 2)) > 129) {
    				$tmpstr .= substr($string, $i, 2); 
    			}else{
    				$tmpstr .= substr($string, $i, 1);
    			}
    		}
    		if (ord(substr($string, $i, 2)) > 129) $i++; 
    	}
    	if (strlen($tmpstr) < $strlen) $tmpstr .= "...";
    	return $tmpstr;
    }
 }

$str = "一律使用英文单词  最好不要使用英文加拼音   不要嫌单词长 尽量写完整";

echo cutStr($str,16);