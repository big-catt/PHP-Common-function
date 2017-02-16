<?php 
//生成随机字符串
function generateRandomString( $length = 10){

         $charcters = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM,./@#%^&*()_+';
         $randomString = '';

         for( $i = 0;$i < $length; $i++){
         	$randomString .= $charcters[rand(0,strlen($charcters) - 1)];
         }

         return $randomString;

}
//ijWzR5FX^8N^5Bc(p(Qn
echo generateRandomString(20);

/*
*随机生成字符串
*@param int $length
*@return null | string
 */

private static function getRandChar( $length = 8){

	$str = null;
	$strPol = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPLMKJNHBGVFCDXSZA";
	$max = strlen($strPol)-1;

	for( $i = 0; $i < $max; $i++){

		$str .= $strPol[rand(0,$max)];
	}

	return $str;


} 