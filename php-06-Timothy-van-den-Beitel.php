<?php
$PHPCijfers=[4,5,4,5,6,6,5,8,7,6,4,8];

function onvoldoendes($array) {
$returnArray=[];
  for($i=0; $i<count($array); $i++){
  if ($array[$i]<6){
    $returnArray[]=$array[$i];
  }
  }
 return ($returnArray);
}
  echo "<pre>";
  print_r( onvoldoendes([6,6,7]) );
  print_r( onvoldoendes([6,3,6,7]) );
  print_r( onvoldoendes($PHPCijfers) );

