<?php
//base64和MD5加密解密
function encryptDecrpt( $key, $string, $decrypt){

	if( $decrypt){

		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), '12');

		return $decrypted;

	}else{

		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));

		return $encrypted;

	}

}
//加密
//2AuVPeeB3xmIPzPV/fsn1a/YA9ryq6GF3YhPx/jSMT8=
echo encryptDecrpt('pwd','Iloveyou',0); 
//解密
//2AuVPeeB3xmIPzPV/fsn1a/YA9ryq6GF3YhPx/jSMT8=Iloveyou
echo encryptDecrpt('pwd','2AuVPeeB3xmIPzPV/fsn1a/YA9ryq6GF3YhPx/jSMT8=',1);
