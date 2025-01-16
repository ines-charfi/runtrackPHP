<?php
$nombre = 2;
while ($nombre < 1000) {
    $Premier = true;

    for ($i = 2; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            $nbPremier = false;
            break;
        }
    }

    if ($Premier && $nombre > 1) {
        echo "Le nombre $nombre est premier<br>";
    } else {
        echo "Le nombre $nombre n'est pas premier<br>";
    }

    $nombre++;
}
?>z
