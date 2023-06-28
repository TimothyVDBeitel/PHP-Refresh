<?php
$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";

function kleineWoorden($int,$string) {
    $words = explode(" ", $string);
    $count = 0;

    foreach ($words as $word) {
        $wordLength = strlen($word);
        if ($wordLength <$int) {
            $count++;
        }
    }
return $count;
}

echo kleineWoorden(4,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(3,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(1,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(0,"dit is een voorbeeld");
echo "<br>";
echo kleineWoorden(2,"a b c d");
echo "<br>";
echo kleineWoorden(6,"abcde");
echo "<br>";
echo kleineWoorden(4,$string);
echo "<br>";
echo kleineWoorden(3,$string);
echo "<br>";
echo kleineWoorden(10,$string);