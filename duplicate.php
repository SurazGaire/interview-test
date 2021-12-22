<?php
$array1 = [4,5,6,4,6,9,10,5];
$duplicate=[];


$count = count($array1);

for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if($array1[$i] == $array1[$j]){
            array_push($duplicate,$array1[$i]);
        }
    }

}

print_r($duplicate);


?>