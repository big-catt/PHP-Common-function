<?php
//获取文件后缀
//int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )
function getExt( $filename){

	$mytext = substr( $filename, strrpos( $filename, '.'));

	return str_replace('.', '', $mytext);

}

echo getExt('text.txt');