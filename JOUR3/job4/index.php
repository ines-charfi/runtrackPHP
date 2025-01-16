<?php
$str="“Dans l'espace, personne ne vous entend crier”. ";
echo "Ma phrase initiale est :$str<br>";
    $compteur=0;
    for ($i= 0; $i < strlen($str); $i++)
    $compteur+=1;
echo "$compteur";