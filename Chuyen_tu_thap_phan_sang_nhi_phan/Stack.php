<?php

function Binary($number){
    $stack=[];
    $num=$number;
    while($num>0){
        array_unshift($stack,$number%2);
        $num=floor($num/2);
        $number=$num;
    }
    return implode('',$stack);
}

echo "Chuyen sang so nhi phan la:".Binary(14);