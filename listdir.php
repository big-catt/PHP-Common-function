<?php
//列出目录下的文件名
function listDir( $dirpath){

	if ( $dir = opendir( $dirpath)) {
		while (( $file = readdir( $dir)) !== false  ) {
			if (!is_dir( $dirpath.$file)) {		
				echo "filename: $file<br>";
			}
		}
	}

}

listDir('home/some_floder/')