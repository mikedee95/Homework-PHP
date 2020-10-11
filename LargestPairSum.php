<?php
function findSum($arr, $x){

    if ($arr[0] > $arr[1]){
        $largest = $arr[0];
        $second = $arr[1];
    } else {
        $largest = $arr[1];
        $second = $arr[0];
    }

    for ($i = 2; $i < $x; $i++) {
        if ($arr[$i] > $largest) {
            $second = $largest;
            $largest = $arr[$i];
        } elseif ($arr[$i] > $second and $arr[$i] != $largest)
            $largest = $arr[$i];
    }
    return $largest + $second;
}

$arr = array(1,3,4,5,6,7,43,23,454,21,67);
$x = count($arr);
echo findSum($arr,$x);