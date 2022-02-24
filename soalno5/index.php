<?php
function uangtabungan($uang)
{
    $uang100k = $uang % 100000;
    $a = ($uang - $uang100k) / 100000;

    $uang50k = $uang100k % 50000;
    $b = ($uang100k - $uang50k) / 50000;

    $uang20k = $uang50k % 20000;
    $c = ($uang50k - $uang20k) / 20000;

    $uang5k = $uang20k % 5000;
    $d = ($uang20k - $uang5k) / 5000;

    $uang1k = $uang5k % 1000;
    $e = ($uang5k - $uang1k) / 1000;

    $uang50 = $uang5k % 50;
    $f = ($uang5k - $uang50) / 50;

    echo "Jumlah Uang Rp.100.000 : " . $a . " Lembar <br>";
    echo "Jumlah Uang Rp.50.000 : " . $b . " Lembar <br>";
    echo "Jumlah Uang Rp.20.000 : " . $c . " Lembar <br>";
    echo "Jumlah Uang Rp.5.000 : " . $d . " Lembar <br>";
    echo "Jumlah Uang Rp.1000 : " . $e . " Lembar/Koin <br>";
    echo "Jumlah Uang Rp.50 : " . $f . " Koin <br>";
}
echo uangtabungan(1895250);
