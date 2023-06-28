<?php
function begroeting($naam) {
    date_default_timezone_set("Europe/Amsterdam");
    $uur= date('H:i');


    if ($uur<12){
        $ochtend= "Goedemorgen ". $naam;
        return $ochtend;
    } elseif ($uur>=12 & $uur<18){
        $middag= "Goedemiddag ".$naam;
        return $middag;
    } elseif($uur>=18) {
        $avond = "Goedenavond ".$naam ;
        return $avond;
    }
}

echo begroeting("Vasco");
echo "<br>";
echo begroeting("Jesse");
echo "<br>";
echo begroeting("Nadir");
echo "<br>";   
echo "<br>";   

date_default_timezone_set("Europe/Amsterdam");
$uur= date('H:i:s');
echo $uur;
?>
<meta http-equiv="refresh" content="10">
