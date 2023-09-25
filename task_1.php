<?php 
$text = "The quick brown fox jumps over the lazy dog.";

function stringOperation(&$string){
    $string = strtolower($string);
    $string = str_replace("brown","red",$string);
}

stringOperation($text);
echo $text;



/* 
Task 1: String Manipulation


Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:


Convert the string to all lowercase.


Replace "brown" with "red" in the string.


Print the modified text.

*/