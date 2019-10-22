<?php

$kylgA = 5;
$kylgB = 3;

function kolmnurk($kylgA, $kylgB){

    $kylgC =  sqrt(pow($kylgA, 2) + pow($kylgB, 2));
    return $kylgC;
}

echo kolmnurk($kylgA, $kylgB);
?>