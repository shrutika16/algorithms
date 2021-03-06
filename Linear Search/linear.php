<?php 

function search($x , $arr)
{

    $n= sizeof($arr);

    for ($i=0; $i < $n ; $i++) { 
       if($arr[$i] == $x){
           return $i;
       }
       return -1;
    }
}

$arr = array(2, 3, 4, 10, 40);
$x = 10;

$result  =  search($x, $arr);

if ($result == -1){
    echo "Element is not present in arr";
}
else{
    echo "Element is present in arr";
}

?>
