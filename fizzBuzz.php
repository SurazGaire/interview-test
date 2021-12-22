<?php 	
$n=15;

for($i = 1; $i<=$n; $i++){
  if($i % 3 == 0 && $i % 5 == 0){
  	echo " fizzbuzz ,";
  }else if($i % 3 == 0){
  	echo "fizz ,";
  }
  else if($i % 5 == 0){
  	echo " buzz ,";
  }
  
  else
  echo $i.",";

}

?>