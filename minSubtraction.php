<?php
function minSubtraction($arr)
{
    sort($arr);
    $min = $arr[1] - $arr[0];
    for ($i = 2; $i < count($arr); $i++) {
        if (($arr[$i]-$arr[$i-1])<$min){
            $min = $arr[$i]-$arr[$i-1];
        }
    }
    for ($j=1;$j<count($arr);$j++){
        if ($min == ($arr[$j]-$arr[$j-1])){
            echo "(".$arr[$j].",".$arr[$j-1].")";
        }
    }
    return $min;
}
$array = [2,5,7,23,15,8,13,14,22];
var_dump(minSubtraction($array));