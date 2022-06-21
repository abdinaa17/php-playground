<?php

// echo 'Hello';

function sum($num) {
    $total = 0;
    for($i=0; $i<=$num; $i++) {
        $total += $i;

    }
    return $total;
}

// echo(sum(4));

$name = 'Nasir';

// echo strlen($name);
// echo strrev($name);



$myarr = "www.website";
// print_r($myarr);

$inArr = explode(".", $myarr);
$inArr = strtolower(end($inArr));

echo $inArr;

