<?php
$array = [11,11,5,2,12,6,7,8,1,10,9];


function telGroteGetallen($array) {
$returnArray=0;
  for($i=0; $i<count($array); $i++){
  if ($array[$i]>10){
    $returnArray+=$array[$i];
  }
  }
 return ($returnArray);
}
  echo "<pre>";
  print_r( telGroteGetallen([10,20,20]) );
  echo "<br>";
  print_r( telGroteGetallen([9, 10, 11]) );
  echo "<br>";
  print_r( telGroteGetallen($array) );

