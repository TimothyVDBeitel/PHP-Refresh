<?php

function netEuro($getal) {
  $uitkomst =  number_format(round($getal,2), 2);
  return $uitkomst;
}

echo netEuro(13);
echo "<br>";
echo netEuro(13.5);
echo "<br>";
echo netEuro(13.6666);