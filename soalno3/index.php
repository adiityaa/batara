<?php

function faktorial($angka)
{
    $i = 1;
    $faktor = 1;
    while ($i <= $angka) {
        $faktor = $faktor * $i;
        $i = $i + 1;
    }
    return $faktor;
}
echo "Hasil Faktorial adalah " . faktorial(4);
echo "<br>";
echo "Hasil Faktorial adalah " . faktorial(8);
