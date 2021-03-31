<?php

function binarySearch($arr , $l, $x, $r){
  
    if($r >= $l){
        $mid = ceil($l + ($r - $l) / 2); 
        print_r($arr[$mid]);
        // If the element is present in the middle
        if ($arr[$mid] == $x) {
            return floor($mid); 
        }

        // If element is smaller than mid arr
        if ($arr[$mid] > $x) {
            return binarySearch(
                $arr,
                $l,
                $mid - 1,
                $x
            ); 
        }

        // element can only  available in right arr
        return binarySearch(
            $arr,
            $l,
            $mid + 1,
            $x
        ); 

    }
    return -1; 

}

$arr = array(2, 3, 4, 10, 40);
$n = count($arr);
$x = 10; 

$result = binarySearch($arr, 0, $n - 1, $x); 
if(($result == -1)) {
    echo "Element is not present in array"; 
}else {
    echo "Element is present at index " . $result;
}

?>