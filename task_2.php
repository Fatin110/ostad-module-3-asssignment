<?php 
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function filterOutEven ($num){
    return $num % 2 !== 0;
}

$evenFilteredOut = array_filter ($numbers, 'filterOutEven');
print_r ($evenFilteredOut);