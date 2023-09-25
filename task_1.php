<?php 
$text = "The quick brown fox jumps over the lazy dog.";

function stringOperation(&$string){
    $string = strtolower($string);
    $string = str_replace("brown","red",$string);
}

stringOperation($text);
echo $text;