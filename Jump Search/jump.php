<?php

function jumpSearch($arr, $x, $n)
{
    // Finding block size to be jumped which is 4 of 16
    $step = sqrt($n);
    // echo $step;
    $prev = 0;
    // print_r($arr[min($step, $n)] -1);
    // 2 < 55
    while ($arr[min($step, $n)-1] < $x){
        // echo 'loopvalue: ';
        // print_r($arr[min($step, $n)] - 1);
        //first step is 4
        $prev = $step;
        // echo 'prev: '. $prev . ' /n ';
        $step += sqrt($n);
        // echo 'sqrtofn: '. $step . ' /n ';

        if ($prev >= $n){
            return -1;
        }    
    }
    // echo prev: 8, sqrtofn: 12;
    // echo  min($step, $n);
    while ($arr[$prev] < $x) {
        $prev++;
        // echo $prev . '/n';
        // If we reached next block or end of
        // array, element is not present.
        if ($prev == min($step, $n)){
            return -1;
        }
        
    }
    // print_r($arr[$prev]);
    // If element is found
    if ($arr[$prev] == $x){
        return $prev;
    }
       

    return -1;
}

// Driver program to test function
$arr = array(0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610);

//find x
$x= 55;

$n = sizeof($arr) / sizeof($arr[0]);

$index = jumpSearch($arr, $x, $n);
?>