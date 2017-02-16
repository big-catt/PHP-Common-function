<?php

function stringParser( $string, $replacer){

    $result = str_replace(array_keys($replacer), array_values($replacer), $string);

    return $result;

}

$string = 'The {b}anchor text{/b} is the {b}actual word{/b} or words used {br}to descri be the link {br}itself';

$replace_array = array('{b}'=>'<b>','{/b}'=>'</b>','{br}'=>'</br>');

echo stringParser( $string, $replace_array);

