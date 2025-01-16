<?php
$str = "Les choses que l'on Possède finissent par nous posséder.";
    echo"Ma phrase initiale est : $str<br>";
    $reversed_str = '';

    for ($i = strlen($str) - 1; $i >= 0; $i--) 
        {
            $reversed_str .= $str[$i];
        }

    echo "Ma nouvelle phrase inversée est : $reversed_str<br>";
?>
