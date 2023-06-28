<?php
$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

function kleineWoorden($string) {
    $words = explode(" ", $string);
    $count = 0;

    foreach ($words as $word) {
        $wordLength = strlen($word);
        if ($wordLength < 4) {
            $count++;
        }
    }
return $count;
}

echo kleineWoorden("dit is een voorbeeld");
echo "<br>";
echo kleineWoorden("a b c d");
echo "<br>";
echo kleineWoorden("abcd");
echo "<br>";
echo kleineWoorden($string);