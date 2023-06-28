<?php
$opmerking = "Deze student is erg goed in programmeren in ";

function breekAf($maxLength, $opmerking) {
    if (strlen($opmerking) <= $maxLength) {
        return $opmerking;
    }
    $substring = substr($opmerking, 0, $maxLength);
    $lastSpace = strrpos($substring, ' ');
    return substr($opmerking, 0, $lastSpace);
}



echo breekAf(32, $opmerking);
echo "<br>";
echo breekAf(18, $opmerking);
echo "<br>";
echo breekAf(19, $opmerking);
echo "<br>";
echo breekAf(20, $opmerking);
echo "<br>";
echo breekAf(21, $opmerking);
echo "<br>";
echo breekAf(24, $opmerking);
echo "<br>";
echo "moet leeg worden.> " . breekAf(3, $opmerking). " <";
