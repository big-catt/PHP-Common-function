<?php
//获取文件大小并格式化
function formatSize( $size){

	$sizes = array(" Bytes"," KB"," MB"," GB"," PB"," EB"," ZB"," YB");
	if ( $size == 0) {
		return('n/a');
	}else{
		return (round($size/pow(1024, ( $i = floor(log( $size, 1024)))), 2) . $sizes[$i]);
	}
}

$thefile = filesize('Innocence.mp3');

echo $thefile;//3733807
echo formatSize( $thefile);//3.56 MB